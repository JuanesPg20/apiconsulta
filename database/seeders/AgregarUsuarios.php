<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AgregarUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Juan Proactivo',
                'email' => 'juan.proactivo@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Marena Proactiva',
                'email' => 'marena.proactiva@example.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
