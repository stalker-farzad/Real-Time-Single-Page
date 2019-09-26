<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration{
    
    public function up(){
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reply_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

   
    
    public function down(){
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('likes');
        Schema::enableForeignKeyConstraints();
    }
}
