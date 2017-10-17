<?php

use Illuminate\Database\Seeder;

class TechnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['libelle' => "PHP", 'techno_type_id' => 1],
            ['libelle' => "HTML", 'techno_type_id' => 1],
            ['libelle' => "CSS", 'techno_type_id' => 1],
            ['libelle' => "MySQL", 'techno_type_id' => 4],
            ['libelle' => "SQL Server", 'techno_type_id' => 4],
            ['libelle' => "Node JS", 'techno_type_id' => 5],
            ['libelle' => "Javascript", 'techno_type_id' => 1],
            ['libelle' => "JQuery", 'techno_type_id' => 3],
            ['libelle' => "Symfony", 'techno_type_id' => 2],
            ['libelle' => "CakePHP", 'techno_type_id' => 2],
            ['libelle' => "Laravel", 'techno_type_id' => 2]
        );
        foreach ($data as $key => $d){
            DB::table('technos')->insert([$key => $d]);
        }
    }
}
