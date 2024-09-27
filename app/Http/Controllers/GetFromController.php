<?php

namespace App\Http\Controllers;

use App\Models\derechos;
use App\Models\Formularios;
use Illuminate\Http\Request;

class GetFromController extends Controller
{
    public function index(Request $request)
    {
        $derechos = derechos::where('id_cliente', $request->idUser)->first();

        if ($derechos) {

            $permisos = json_decode($derechos->derechos, true);

            if (in_array($request->idform, $permisos)) {

                $url = Formularios::where('formulario_id', $request->idform)->first()->url;

                $data = [
                    'message' => 'success',
                    'url' => $url
                ];

                return response()->json($data, 200);
            }else {

                $data = [
                    'message' => 'error',
                    'error' => 'El formulario que intenta acceder no existe, o no tiene permisos.'
                ];
                return response()->json($data, 404);
            }

        }else {

            $data = [
                'message' => 'error',
                'error' => 'El usuario que intenta acceder no existe o no tiene permisos.'
            ];
            return response()->json($data, 404);
        }
    }
}
