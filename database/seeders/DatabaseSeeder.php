<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
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
         User::factory(1)->create();

         Group::factory(2)->create();

         $this->call(LessonSeeder::class);
         $this->call(GroupLessonSeeder::class);
    }
}
