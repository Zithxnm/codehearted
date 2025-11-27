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
        Schema::create('communities', function (Blueprint $table) {
            $table->id('Community_ID'); // Custom PK from ERD

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // Parent Post (for replies)
            $table->foreignId('Parent_ID')
                ->nullable()
                ->constrained('communities', 'Community_ID')
                ->onDelete('cascade');

            $table->string('Title')->nullable();
            $table->text('Content');
            $table->string('Category')->nullable();
            $table->integer('Likes')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
