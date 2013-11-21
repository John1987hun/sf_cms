<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('photos', function ($table) {

            $table->increments('id');
            $table->string('file_name', 255);
            $table->string('title', 255);
            $table->string('path', 255);
            $table->integer('file_size');
            $table->integer('photo_gallery_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('photos');
    }
}