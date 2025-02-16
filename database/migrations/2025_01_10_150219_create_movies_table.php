<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->text('description');
            $table->year('year');
            $table->string('rated');
            $table->string('imdbID')->unique();
            $table->decimal('imdbRating',3,1)->nullable();
            $table->enum('type', ['movie','TV_Show','Anime']);
            $table->string('director');
            $table->string('writer');
            $table->string('actors');
            $table->date('release_date')->nullable();
            $table->unsignedSmallInteger('duration')->nullable();
            $table->string('poster');
            $table->string('trailer')->nullable();
            $table->timestamps();

            $table->index('title');
            $table->index('genre');
            $table->index('type');
            $table->index('year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
