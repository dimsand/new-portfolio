<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TechnoTypesTableSeeder::class);
        $this->call(TechnosTableSeeder::class);
        $this->call(SiteInfosTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
    }
}
