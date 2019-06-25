<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Dimitri Sandron",
            'email' => 'dimitri.sandron@outlook.fr',
            'password' => '$2y$10$esOoL4yaqvD9WtKp9s6IPeyTlNk983H9MkKYADVDDGdLJH3bq3zS6', //testtest
        ]);
    }
}
