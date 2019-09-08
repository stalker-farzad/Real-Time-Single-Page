<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

      $users = [
          ['name' =>'Farzad' ,'email'=>'Farzad@gmail.com','password'=>bcrypt('123456')],
          ['name' =>'Sara' ,'email'=>'Sara@gmail.com','password'=>bcrypt('123456')],
          ['name' =>'Abbas' ,'email'=>'Abbas@gmail.com','password'=>bcrypt('123456')],
      ];

      $row = 0;
      foreach ($users as $user) {
          DB::table('users')->insert($user);
          $row++;
      }



      $questions = [
          ['title' => 'برنامه ریزی لاراول', 'slug' => 'برنامه ریزی لاراول', 'body' => 'ساختاربندی دیتابیس لاراول' ,'category_id'=>'1','user_id'=>'1'],
          ['title' => 'برنامه ریزی جاوا اسکریپت چطوری است', 'slug' => 'برنامه ریزی جاوا اسکریپت', 'body' => 'ساختاربندی دیتابیس جاوا اسکریپت' ,'category_id'=>'2','user_id'=>'1'],
          ['title' => 'برنامه ریزی آنگولار', 'slug' => 'برنامه ریزی آنگولار', 'body' => 'ساختاربندی دیتابیس آنکولار' ,'category_id'=>'2','user_id'=>'2'],
      ];

      $row = 0;
      foreach ($questions as $question) {
          DB::table('questions')->insert($question);
          $row++;
      }


      $replies = [
          ['body' =>'بله ساختار لاراول عالی بود ' ,'question_id'=>'1','user_id'=>'2'],
          ['body' => 'ساختاربندی دیتابیس جاوا اسکریپت' ,'question_id'=>'2','user_id'=>'1'],
          ['body' => 'ساختاربندی دیتابیس آنکولار' ,'question_id'=>'1','user_id'=>'1'],
      ];

      $row = 0;
      foreach ($replies as $replie) {
          DB::table('replies')->insert($replie);
          $row++;
      }


      $categories = [
          ['name' =>'لاراول' ,'slug'=>'لاراول'],
          ['name' => 'جاوا اسکریپت' ,'slug'=>'جاوا اسکریپت'],
          ['name' => 'آنگولار' ,'slug'=>'آنگولار'],
      ];

      $row = 0;
      foreach ($categories as $category) {
          DB::table('categories')->insert($category);
          $row++;
      }




      $likes = [
          ['reply_id' =>'1' ,'user_id'=>'2'],
          ['reply_id' =>'2' ,'user_id'=>'1'],
          ['reply_id' =>'1' ,'user_id'=>'3'],
          ['reply_id' =>'3' ,'user_id'=>'1'],
      ];

      $row = 0;
      foreach ($likes as $like) {
          DB::table('likes')->insert($like);
          $row++;
      }
    }
}
