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
        Schema::create('participant_subjects', function (Blueprint $table) {
            $table->id();

            // Link User (Participant) to Subject
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // Link to Subjects table
            // Note: Ensure your 'subjects' table exists and uses 'Subject_id' as PK
            $table->foreignId('Subject_ID')
                ->constrained('subjects', 'Subject_id')
                ->onDelete('cascade');

            $table->string('Case_Type'); // e.g., 'Enrolled'

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_subjects');
    }
};
