<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $writers = Writer::all();
        for($i = 1; $i <= 10; $i++){
            Subject::create([
                'image' => 'img/'.random_int(1,8).'.jpeg',
                'title' => fake()->sentence(),
                'date' => fake()->date(),
                'writer_id' => $writers->random()->id,
                'description' => fake()->paragraph(),
                'category_id' => $categories->random()->id
            ]);
        }
    }
}
