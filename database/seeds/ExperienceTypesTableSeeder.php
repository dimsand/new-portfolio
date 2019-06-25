<?php

use Illuminate\Database\Seeder;

class ExperienceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['libelle' => "Expérience professionnelle"],
            ['libelle' => "Formation"]
        );
        foreach ($data as $key => $d){
            DB::table('experience_types')->insert([$key => $d]);
        }
    }
}
