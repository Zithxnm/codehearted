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
        Schema::create('profiles', function (Blueprint $table) {
            // 1. Profile_ID (Primary Key)
            $table->id('Profile_ID');

            // 2. id (Foreign Key)
            // In Laravel, we typically call this 'user_id' to avoid confusion,
            // but it links to the 'id' column on the 'users' table.
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // 3. Other Columns
            $table->string('Display_Name')->nullable();
            $table->string('Title')->nullable();       // e.g., "Lead Developer"
            $table->string('Avatar')->nullable();      // Path to image
            $table->string('Banner')->nullable();      // Path to image
            $table->string('Theme')->default('light'); // e.g., 'dark', 'light'

            // 4. Join_Date
            // You can use 'timestamp' or 'date'. 'useCurrent()' sets it automatically.
            $table->timestamp('Join_Date')->useCurrent();

            $table->timestamps(); // Adds created_at and updated_at standard columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
