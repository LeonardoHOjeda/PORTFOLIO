<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::create([
            'name' => 'PHP',
            'icon' => 'fab fa-php'
        ]);

        Technology::create([
            'name' => 'JavaScript',
            'icon' => 'fab fa-js'
        ]);

        Technology::create([
            'name' => 'Python',
            'icon' => 'fab fa-python'
        ]);

        Technology::create([
            'name' => 'Java',
            'icon' => 'fab fa-java'
        ]);

        Technology::create([
            'name' => 'C#',
            'icon' => 'fas fa-code'
        ]);

        Technology::create([
            'name' => 'C++',
            'icon' => 'fas fa-code'
        ]);
    }
}
