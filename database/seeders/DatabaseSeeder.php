<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Laravel, Javascript',
            'company' => 'Acme corp',
            'Location' => 'Boston MA',
            'email' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
            ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
             accusamus laudantium cumque sint velit veniam quidem!'
        ]);


        Listing::create([
            'title' => 'Full Stack Developer',
            'tags' => 'Laravel, Backend, Php',
            'company' => 'Stark Company',
            'Location' => 'New York MA',
            'email' => 'https://www.stark.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
            ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
             accusamus laudantium cumque sint velit veniam quidem!'
        ]);
        


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
