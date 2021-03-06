<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            'nombre' => 'Charmander',
            'tipo' => 'Fuego',
            'descripcion' => 'Este pokemon parece una largatija',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
