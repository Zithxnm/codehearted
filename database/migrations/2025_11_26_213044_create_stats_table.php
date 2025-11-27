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
        Schema::create('stats', function (Blueprint $table) {
            // 1. Stats_ID (Primary Key)
            $table->id('Stats_ID');

            // 2. id (Foreign Key) linked to Users
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // 3. The Stats Columns
            $table->integer('Achievements')->default(0);   // Count of achievements
            $table->integer('Quizzes')->default(0);        // Count of quizzes taken/passed
            $table->string('Course_Badge')->default(0);    // Name or path of badge
            $table->integer('Daily_Streak')->default(0);   // Streak count

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
