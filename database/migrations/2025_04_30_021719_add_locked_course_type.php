<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
        //  This is a destructive operation. If any courses have the 'locked' status
        //  when this migration is rolled back, those courses will either:
        //  1. Cause an error during migration, or
        //  2. Have their status silently changed to a default value
        //  Consider manually updating locked courses before rolling back.
        DB::statement("ALTER TABLE courses MODIFY COLUMN status ENUM('unavailable','open','full','closed') NOT NULL");
    }
};
