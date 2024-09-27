<?php

namespace Database\Seeders;

use App\Models\Formularios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgregarRutas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'formulario_id' => 1,
                'url' => 'http://127.0.0.1:8000/formOne',
            ],
            [
                'formulario_id' => 2,
                'url' => 'http://127.0.0.1:8000/formTwo',
            ],
            [
                'formulario_id' => 3,
                'url' => 'http://127.0.0.1:8000/formThree',
            ]
        ];
        foreach ($data as $key => $value) {
            Formularios::create($value);
        }
    }
}
