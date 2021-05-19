<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMembersTable extends Migration
{
    public function up()
    {
        Schema::create('chat_members', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('chat_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('is_admin');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_members');
    }
}
