<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('group_lessons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('lesson_id');

            $table->unique(['group_id', 'lesson_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_lessons');
    }
}
