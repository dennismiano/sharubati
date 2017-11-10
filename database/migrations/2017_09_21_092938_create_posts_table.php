<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		
		Schema::create('file_types', function (Blueprint $table) {
            $table->increments('id');
			$table->string("name");
			$table->integer('type')->unsigned();
            $table->timestamps();
        });
		Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
			//$table->integer("file_type_id")->unsigned();
			//$table->foreign("file_type_id")->references("id")->on("file_types");
			$table->text('file_name');
			//$table->integer("admin_id")->unsigned();
			//$table->foreign("admin_id")->references("id")->on("admins");
		    $table->timestamps();
        });
		DB::statement("ALTER TABLE files ADD files MEDIUMBLOB");
		
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->string("title");
			$table->text("body");
			$table->integer("file_id")->unsigned()->nullable();
			$table->string("name");
			$table->foreign("file_id")->references("id")->on("files");
			$table->timestamps();
			
            
        });
		Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("post_id")->unsigned()->nullable();
			$table->foreign("post_id")->references("id")->on("posts")->onDelete('cascade');
			$table->text("body");
			$table->text("name");
			$table->text("email");
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
		Schema::dropIfExists('comments');
    }
}
