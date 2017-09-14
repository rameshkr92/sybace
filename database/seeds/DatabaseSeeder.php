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
//    	$this->call(sybace\Users\Seeds\RolesTableSeeder::class);
//        $this->call(sybace\Users\Seeds\UsersTableSeeder::class);
//        $this->call(sybace\Countries\Seeds\CountriesTableSeeder::class);
//        $this->call(sybace\Settings\Seeds\SettingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
//        $this->call(CountriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
