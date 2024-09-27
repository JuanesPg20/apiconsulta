<?php

namespace Database\Seeders;

use App\Models\derechos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgregarDerechos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $js1 = ['1','2',];
        $js2 = ['2','3',];

        $data = [
            [
                'id_cliente' => 1,
                'derechos' => json_encode($js1, true),
            ],
            [
                'id_cliente' => 2,
                'derechos' => json_encode($js2, true),
            ],
        ];
        foreach ($data as $key => $value) {
            derechos::create($value);
        }
    }
}
