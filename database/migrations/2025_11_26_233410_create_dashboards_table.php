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
        Schema::create('dashboards', function (Blueprint $table) {
            // 1. Custom Primary Key (Log_ID)
            $table->id('Log_ID');

            // 2. Foreign Key (Admin_ID)
            // We link this to the 'users' table because that is where Admins "live".
            $table->foreignId('Admin_ID')
                ->constrained('users') // Points to users.id
                ->onDelete('cascade');

            // 3. Stats Columns
            $table->integer('Total_Subjects')->default(0);
            $table->integer('Total_Views')->default(0);
            $table->integer('Unique_Viewers')->default(0);

            $table->json('Chart_Data')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
