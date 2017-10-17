<?php

use Illuminate\Database\Seeder;

class SiteInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'info' => "PRESENTAION",
                'description' => "<p>Bonjour, je m'appelle <span class=\"font-weight-bold\">Dimitri Sandron</span>. Je suis <a>développeur Full Stack</a></p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>"
            ],
        );
        foreach ($data as $key => $d){
            DB::table('site_infos')->insert([$key => $d]);
        }
    }
}
