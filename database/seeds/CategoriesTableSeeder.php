<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['libelle' => "Entreprise"],
            ['libelle' => "Perso"],
            ['libelle' => "Formations"],
            ['libelle' => "Lab"],
            ['libelle' => "Freelance"]
        );
        foreach ($data as $key => $d){
            DB::table('categories')->insert([$key => $d]);
        }
    }
}
