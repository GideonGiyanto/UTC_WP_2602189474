<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::all();

        Writer::create([
            'profile_pict' => "img/1.jpeg",
            'name' => fake()->name(),
            'job' => 'Spesialis Interactive Mulltimedia'
        ]);

        Writer::create([
            'profile_pict' => "img/2.jpeg",
            'name' => fake()->name(),
            'job' => 'Spesialis Software Engineering'
        ]);
    }
}
