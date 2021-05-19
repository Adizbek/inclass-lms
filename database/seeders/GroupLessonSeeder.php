<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class GroupLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = Lesson::all();

        $groups = Group::all();

        foreach ($groups as $group) {
            $group->lessons()->sync(
                $lessons->random(min(2, $lessons->count()))->pluck('id')
            );
        }
    }
}
