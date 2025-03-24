<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\City;

class CountriesAndCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country1 = Country::create(['name' => 'country1']);
        $country2 = Country::create(['name' => 'country2']);
        $country3 = Country::create(['name' => 'country3']);
        
        City::create(['name' => 'city11', 'population' => 532431, 'country_id' => $country1->id]);
        City::create(['name' => 'city12', 'population' => 343919, 'country_id' => $country1->id]);
        City::create(['name' => 'city13', 'population' => 132781, 'country_id' => $country1->id]);
        
        City::create(['name' => 'city21', 'population' => 843819, 'country_id' => $country2->id]);
        City::create(['name' => 'city22', 'population' => 232971, 'country_id' => $country2->id]);
        City::create(['name' => 'city23', 'population' => 432917, 'country_id' => $country2->id]);
        
        City::create(['name' => 'city31', 'population' => 1532411, 'country_id' => $country3->id]);
        City::create(['name' => 'city32', 'population' => 743819, 'country_id' => $country3->id]);
        City::create(['name' => 'city33', 'population' => 3532431, 'country_id' => $country3->id]);
    }
}
