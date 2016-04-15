<?php
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;
  class CreateComments extends Migration {
    public function up()
    {
      Schema::create('comments', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('article_id');
        $table->text('content');
        $table->string('user');
        $table->timestamps();
      });
    }
    public function down()
    {
      Schema::drop('comments');
    }
  }