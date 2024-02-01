<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Country::create(['name' => 'Spain']);
        Country::create(['name' => 'France']);
        City::create(['country_id' => 1 , 'name' => 'Barcelone']);
        City::create(['country_id' => 1 , 'name' => 'Madrid']);
        City::create(['country_id' => 1 , 'name' => 'Bilbao']);
        City::create(['country_id' => 2 , 'name' => 'Paris']);
        City::create(['country_id' => 2 , 'name' => 'Lyon']);
        City::create(['country_id' => 2 , 'name' => 'Lille']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);

    }
}
