<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            "Artesanias",
            "Electronica",
            "Electrodomésticos",
            "Computacion",
            "Indumerntaria",
            "Pesca, caza y camping",
            "Aire Libre"
        ];

        foreach ($categorias as $key ) {
            DB::table('categorias')->insert([
                "nombre" => $key
            ]);
        }
      
    }
}
