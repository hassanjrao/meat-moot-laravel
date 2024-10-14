<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            $table->string('hero_title');
            $table->string('hero_bg_image');

            $table->text('description');
            $table->string('image');

            $table->string('history_heading');
            $table->text('history_description');

            $table->json('about_images');

            $table->string('atmosphere_heading');
            $table->text('atmosphere_description');
            $table->string('atmosphere_bg_image');

            $table->json('recommendated_by_images');

            $table->json('celebrate_images');

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
        Schema::dropIfExists('about_pages');
    }
}
