<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            $table->string('hero_title');
            $table->string('hero_bg_video');

            $table->string('concept_heading');
            $table->string('concept_subheading');
            $table->text('concept_description');
            $table->string('concept_image');

            $table->text('ceo_message');
            $table->string('ceo_location');


            $table->text('connect_heading');
            $table->text('connect_subheading');
            $table->string('connect_bg_image');
            $table->string('connect_message');


            $table->string('celebrate_heading');
            $table->string('celebrate_subheading');
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
        Schema::dropIfExists('home_pages');
    }
}
