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
        Schema::dropColumns("events", ['has_registration']);
        Schema::table("events", function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Course::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns("events", ['course_id']);
        Schema::table("events", function (Blueprint $table) {
            $table->boolean('has_registration')->default(false);
        });
    }
};
