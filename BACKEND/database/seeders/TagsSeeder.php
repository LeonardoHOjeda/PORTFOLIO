<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Backend',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Frontend',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Base de Datos',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Testing',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Móvil',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Seguridad',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Nuble',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'IoT',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Web',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Desktop',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Otro',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Microservicios',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Kubernetes',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Docker',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'SQL',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'JavaScript',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'PHP',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'React',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Angular',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Vue',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Node.js',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Express',
            'created_at' => now()
        ]);

        Tag::create([
            'name' => 'Laravel',
            'created_at' => now()
        ]);
    }
}
