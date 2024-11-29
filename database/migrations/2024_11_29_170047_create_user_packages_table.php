<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPackagesTable extends Migration
{
    public function up()
    {
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('package_id')->constrained()->onDelete('cascade'); // Foreign key to packages table
            $table->enum('package_type', ['one_time', 'monthly']); // Enum for package type (one_time or monthly)
            $table->date('expiry_date'); // Expiry date of the package
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
}

