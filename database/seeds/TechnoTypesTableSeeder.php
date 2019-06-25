<?php

use Illuminate\Database\Seeder;

class TechnoTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['libelle' => "Langage"],
            ['libelle' => "Framework PHP"],
            ['libelle' => "Librairie Javascript"],
            ['libelle' => "SGBD"],
            ['libelle' => "Autres, outils, ..."],
            ['libelle' => "Professionnel"]
        );
        foreach ($data as $key => $d){
            DB::table('techno_types')->insert([$key => $d]);
        }
    }
}
