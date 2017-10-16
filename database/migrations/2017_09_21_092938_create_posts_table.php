<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('file_types', function (Blueprint $table) {
            $table->increments('id');
			$table->string("type");
            $table->timestamps();
        });
		Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("file_type_id")->unsigned();
			$table->foreign("file_type_id")->references("id")->on("file_types");
			$table->text('file_name');
			$table->integer("user_id");
			$table->foreign("user_id")->references("id")->on("users");
		    $table->timestamps();
        });
		
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->string("title");
			$table->text("body");
			$table->integer("file_id")->unsigned();
			$table->string("name");
			$table->foreign("file_id")->references("id")->on("files");
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
        Schema::dropIfExists('posts');
		Schema::dropIfExists('file_types');
		Schema::dropIfExists('files');
    }
}
