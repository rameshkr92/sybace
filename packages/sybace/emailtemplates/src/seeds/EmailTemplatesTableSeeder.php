<?php
namespace Sybace\Countries\Seeds;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Countries
        \DB::table('email_templates')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'active'=> 1,
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
        ]);

        \DB::table('countries_trans')->insert([
            'name' => 'المملكة العربية السعودية',
            'country_id' => 1,
            'lang'=> 'ar',
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
        ]);

        // Areas
        \DB::table('areas')->insert([
            'country_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'active'=> 1,
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
        ]);

        \DB::table('areas_trans')->insert([
            'name' => 'الاحساء',
            'area_id' => 1,
            'lang'=> 'ar',
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d'),
        ]);



    }
}
