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
        Schema::create('user_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key linking to 'users'
            $table->string('billing_address')->nullable(); // Billing address
            $table->string('billing_city')->nullable(); // Billing city
            $table->string('billing_country')->nullable(); // Billing country
            $table->string('billing_zip_code')->nullable(); // Billing ZIP code
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_fields');
    }
};
