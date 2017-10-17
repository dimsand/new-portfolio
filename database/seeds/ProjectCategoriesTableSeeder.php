<?php

use Illuminate\Database\Seeder;

class ProjectCategoriesTableSeeder extends Seeder
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
            DB::table('project_categories')->insert([$key => $d]);
        }
    }
}
