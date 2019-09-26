<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration{
   
    public function up(){
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->text('body');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

   

    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('questions');
        Schema::enableForeignKeyConstraints();
    }
}
