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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // File name
            $table->string('path');  // File storage path
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who uploaded the file
            $table->foreignId('folder_id')->nullable()->constrained()->onDelete('cascade'); // Folder if file is in one
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
