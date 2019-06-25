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
            ['libelle' => "PHP", 'techno_type_id' => 1, 'note' => 8],
            ['libelle' => "HTML", 'techno_type_id' => 1, 'note' => 10],
            ['libelle' => "CSS", 'techno_type_id' => 1, 'note' => 9],
            ['libelle' => "MySQL", 'techno_type_id' => 4, 'note' => 8],
            ['libelle' => "SQL Server", 'techno_type_id' => 4, 'note' => 8],
            ['libelle' => "Node JS", 'techno_type_id' => 5, 'note' => 5],
            ['libelle' => "Javascript", 'techno_type_id' => 1, 'note' => 8],
            ['libelle' => "JQuery", 'techno_type_id' => 3, 'note' => 8],
            ['libelle' => "Symfony", 'techno_type_id' => 2, 'note' => 6],
            ['libelle' => "CakePHP", 'techno_type_id' => 2, 'note' => 8],
            ['libelle' => "Laravel", 'techno_type_id' => 2, 'note' => 7]
        );
        foreach ($data as $key => $d){
            DB::table('technos')->insert([$key => $d]);
        }
    }
}
