<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Driver;
use App\Models\Race;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        $users = User::factory(2)->create() ; 

        $drivers = Driver::factory(40)->create() ; 

        Race::factory(100)->create()->each(function($race) use ($drivers){
            $race->driver()->associate(Driver::inRandomOrder()->first()) ; 
            $race->save() ; 
        }) ; 
    }
}
