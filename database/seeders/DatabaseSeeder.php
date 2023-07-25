<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::create([
            'name' => 'younes safouat',
            'facebook' => 'https://web.facebook.com/yonese.safouat',
            'tweet' => 'https://twitter.com/YoSafouat',
            'linkden' => 'https://twitter.com/YoSafouat',
            'email' => 'yonlol77@gmail.com',
            'password' => 'Yon987654321',
            'package'=> 4
        ]);
         \App\Models\User::factory(10)->create();
        Provider::factory(10)->create();
        Course::factory(10)->create();


    }
}
