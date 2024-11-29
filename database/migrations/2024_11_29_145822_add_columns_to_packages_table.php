<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->text('services')->nullable()->after('price'); // Comma-separated services
            $table->text('features')->nullable()->after('services'); // Features list
            $table->integer('validity')->nullable()->after('features'); // Validity in days
            $table->text('desc')->nullable()->after('validity'); // Package description
        });
    }

    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn(['services', 'features', 'validity', 'desc']);
        });
    }
};

