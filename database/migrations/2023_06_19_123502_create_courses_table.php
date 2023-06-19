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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->dateTime('start');
            $table->string('ages', 64);
            $table->integer('duration');
            $table->string('description', 1024);
            $table->enum('level', ['beginner', 'intermediate', 'advanced']);
            $table->enum('status',['unavailable','open','full','closed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
