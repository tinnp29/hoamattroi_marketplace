<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatConversationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_conversation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id');
            $table->bigInteger('receiver_id');
            $table->bigInteger('last_sender_id'); // who sended last
            $table->string('last_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_conversation');
    }
}
