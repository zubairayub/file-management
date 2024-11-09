<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sub_folder', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users
            $table->unsignedBigInteger('parent_folder_id')->nullable(); // Foreign key to folders table
            $table->unsignedBigInteger('parent_id')->nullable(); // Self-referencing column for nesting subfolders
            $table->string('path')->nullable();
            $table->timestamps();

            // Foreign key linking to folders table for parent folders
            $table->foreign('parent_folder_id')->references('id')->on('folders')->onDelete('cascade');
            // Self-referencing foreign key for recursive subfolders
            $table->foreign('parent_id')->references('id')->on('sub_folder')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_folder');
    }
};
