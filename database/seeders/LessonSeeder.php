<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = ['C++ programming', "RDBMS", "Web development"];


        foreach ($lessons as $lesson) {
            Lesson::create([
                'name' => $lesson
            ]);
        }
    }
}
