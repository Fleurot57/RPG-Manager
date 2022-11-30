<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

<<<<<<< HEAD
=======
use App\Models\Characters;
>>>>>>> d243ce5ef4b6d3b01000f27eed6e689e46cd24c8
use App\Models\groups;
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
<<<<<<< HEAD
    
        groups::factory()->count(10)->create();
=======
        Characters::factory()->count(10)->create();
>>>>>>> d243ce5ef4b6d3b01000f27eed6e689e46cd24c8

    }
}
