<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2022_08_07_075957_create_review_ratings_table.php
            $table->foreignId('comment_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('food_id');
            $table->integer('star_rating')->default(5);
=======
            $table->string('name');
>>>>>>> 61d8407d107bfc50a0cb0b1883525fae18c599a0:database/migrations/2022_08_02_074544_create_categories_table.php
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
        Schema::dropIfExists('categories');
    }
};
