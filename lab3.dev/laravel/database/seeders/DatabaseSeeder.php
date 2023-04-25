<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Manufacturer;
use App\Models\Carmodel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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
        $france->manufacturers()->save($renault);

        #approach #2 - use "create"  shortcut of collection
        $france->manufacturers()->create(['name' => 'Peugeot']);

        #approach #3 - calling "associate" on sub-object
        $germany = Country::where('name', 'Germany')->first();
        $audi = new Manufacturer();
        $audi->name = 'Audi';
        $audi->country()->associate($germany);
        $audi->save();

        // Task #1
        Country::create(['name' => 'Spain', 'code' => 'ES']);
        Country::create(['name' => 'Japan', 'code' => 'JP']);

        $spain = Country::where('name', 'Spain')->first();
        $seat = new Manufacturer();
        $seat->name = 'Seat';
        $spain->manufacturers()->save($seat);

        $japan = Country::where('name', 'Japan')->first();
        $japan->manufacturers()->create(['name'=>'Toyota']);

        $germany->manufacturers()->create(['name'=>'Volkswagen']);

        $volkswagen = Manufacturer::where('name', 'Volkswagen')->first();
        $volkswagen-> carmodels()->createMany([
            ['name' => 'Passat'],
            ['name' => 'Golf'],
            ['name' => 'Multivan']
        ]);

        $audi -> carmodels() -> createMany([
            ['name' => 'Passat'],
            ['name' => 'A4'],
            ['name' => 'A6'],
            ['name' => 'Q3'],
            ['name' => 'Q4'],
            ['name' => 'Q5']
        ]);

        $seat -> carmodels() -> createMany([
            ['name' => 'Toledo'],
            ['name' => 'Ibiza']
        ]);
    }
}
