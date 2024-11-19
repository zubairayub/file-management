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
        Schema::table('files', function (Blueprint $table) {
            $table->foreignId('subfolder_id')
                ->nullable()
                ->constrained('sub_folder') // Referencing the `subfolder` table
                ->onDelete('cascade')
                ->after('folder_id'); // Add the column after `folder_id`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table) {
            //
        });
    }
};
