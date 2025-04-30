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
        DB::statement("ALTER TABLE courses MODIFY COLUMN status ENUM('unavailable','open','full','closed','locked') NOT NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //  This is a destructive operation, so we need to be careful.
        DB::statement("ALTER TABLE courses MODIFY COLUMN status ENUM('unavailable','open','full','closed') NOT NULL");
    }
};
