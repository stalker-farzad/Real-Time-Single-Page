<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration{
  
    public function up(){
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->timestamps();
        });
    }

   
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('replies');
        Schema::enableForeignKeyConstraints();
    }
}
