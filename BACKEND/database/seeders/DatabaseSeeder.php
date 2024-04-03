<?php

namespace Database\Seeders;

use App\Models\Seeder as SeederModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      if (!SeederModel::where('name', TagsSeeder::class)->exists()) {
        $this->call(TagsSeeder::class);
        SeederModel::create(['name' => TagsSeeder::class]);
      }
      if (!SeederModel::where('name', TechnologySeeder::class)->exists()){
        $this->call(TechnologySeeder::class);
        SeederModel::create(['name' => TechnologySeeder::class]);
      }
    }
}
