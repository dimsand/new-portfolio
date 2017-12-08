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
            'password' => '$2y$10$tmuaCLAmiiEJ4ZJOh54g6uznBiWbM7cCKprOh5jUyhR6JjYv4e3zO',
        ]);
    }
}
