<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupLessonTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('group_lesson_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('group_lesson_id');
            $table->unsignedBigInteger('teacher_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_lesson_teachers');
    }
}
