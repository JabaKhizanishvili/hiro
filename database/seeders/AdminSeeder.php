<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class AdminSeeder extends Seeder
{

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin',
             'password' => 'admin@admin',
             'type' => '1',
             'status' => '1',
         ]);
    }

}
