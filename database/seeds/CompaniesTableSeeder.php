<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['nom' => "Belisoft"],
            ['nom' => "Monabee"],
            ['nom' => "Ecole It-Akademy"],
            ['nom' => "Ecole Isitech"]
        );
        foreach ($data as $key => $d){
            DB::table('companies')->insert([$key => $d]);
        }
    }
}
