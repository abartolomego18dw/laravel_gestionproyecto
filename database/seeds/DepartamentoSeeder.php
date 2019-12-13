<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<3;$i++) {
       	DB::table('departamentos')->insert([
                'nombre' => Str::random(10)       
                  ]);
        }
    }
}
