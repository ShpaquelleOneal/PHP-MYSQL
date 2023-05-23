<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Manufacturer;
use App\Models\Carmodel;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $faker = Faker::create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Country::create(['name' => 'Germany', 'code'=>'DE']);
        Country::create(['name' => 'Italy', 'code'=>'IT']);
        Country::create(['name' => 'France', 'code'=>'FR']);
        

        #approach #1 - create instance of manufacturer, call save on collection
        $france = Country::where('name', 'France')->first();
        $renault = new Manufacturer();
        $renault->name = 'Renault';
        $renault->founded = 1898;
        $renault->website = "https://www.renaultgroup.com/en/our-company/heritage/the-beginning/";
        $france->manufacturers()->save($renault);

        #approach #2 - use "create"  shortcut of collection
        $france->manufacturers()->create([
            'name' => 'Peugeot',
            'founded' => 1896,
            'website' => 'https://www.peugeot.com/en/'
        ]);

        #approach #3 - calling "associate" on sub-object
        $germany = Country::where('name', 'Germany')->first();
        $audi = new Manufacturer();
        $audi->name = 'Audi';
        $audi->founded = 1909;
        $audi->website = "https://www.audi.com/en.html";
        $audi->country()->associate($germany);
        $audi->save();

        // Task #1
        Country::create(['name' => 'Spain', 'code' => 'ES']);
        Country::create(['name' => 'Japan', 'code' => 'JP']);

        $spain = Country::where('name', 'Spain')->first();
        $seat = new Manufacturer();
        $seat->name = 'Seat';
        $seat->founded = 1950;
        $seat->website = "https://www.seat.com/";
        $spain->manufacturers()->save($seat);

        $japan = Country::where('name', 'Japan')->first();
        $japan->manufacturers()->create([
            'name'=>'Toyota', 
            'founded'=>1937, 
            'website'=>'https://global.toyota/en/'
        ]);

        $germany->manufacturers()->create([
            'name'=>'Volkswagen', 
            'founded'=>1937, 
            'website'=>'https://www.vw.com/en.html']);

        $volkswagen = Manufacturer::where('name', 'Volkswagen')->first();
        $volkswagen-> carmodels()->createMany([
            ['name' => 'Passat', 
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Golf', 
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Multivan', 
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
        ]);

        $audi -> carmodels() -> createMany([
            ['name' => 'S8',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'A4',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'A6',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Q3', 
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Q4',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Q5',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
        ]);

        $seat -> carmodels() -> createMany([
            ['name' => 'Toledo',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
            ['name' => 'Ibiza',
            'production_started' => $faker->numberBetween(1990, 2021), 
            'min_price' => $faker->randomFloat(2, 10000, 50000)],
        ]);
    }
}
