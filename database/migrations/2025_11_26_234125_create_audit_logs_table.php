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
        Schema::create('audit_logs', function (Blueprint $table) {
            // 1. Custom Primary Key (Log_ID)
            $table->id('Log_ID');

            // 2. Foreign Key (Admin_ID)
            // Links to the 'users' table (where admins live)
            $table->foreignId('Admin_ID')
                ->constrained('users')
                ->onDelete('cascade');

            // 3. The Action Description
            $table->text('Action'); // e.g., "Deleted Course ID 5"

            // 4. Timestamp
            // Laravel's timestamps() automatically creates 'created_at'
            // which serves as your "Timestamp" column.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
