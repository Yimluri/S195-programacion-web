<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class clientestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Jimena',
                'apellido'=>'Lugo',
                'correo'=>'jlugo@gmail.com',
                'telefono'=>'4456789013'
            ],
            [
                'nombre'=>'Uriel',
                'apellido'=>'Martínez',
                'correo'=>'UMhshgyu@gmail.com',
                'telefono'=>'44567839677'
            ],
            [
                'nombre'=>'Ana',
                'apellido'=>'Ibarra',
                'correo'=>'ana@gmail.com',
                'telefono'=>'4456789097'
            ]
        ]);
    }
}
