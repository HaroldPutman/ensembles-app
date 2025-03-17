<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->text('question')->nullable();
        });
        Schema::table('registrations', function (Blueprint $table) {
            $table->text('answer')->nullable();
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('question');
        });
        Schema::table('regiustrations', function (Blueprint $table) {
            $table->dropColumn('answer');
        });
    }
};
