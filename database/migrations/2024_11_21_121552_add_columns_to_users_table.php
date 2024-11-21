<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding the new fields
            $table->unsignedBigInteger('package_id')->nullable(); // Link to the packages table
            $table->decimal('quota_used', 10, 2)->default(0); // Store quota used (assuming it's in KB)
            $table->string('prefix', 10)->nullable(); // Prefix like Mr, Ms
            $table->string('last_name')->nullable(); // Last Name
            $table->string('phone_number')->nullable(); // Phone Number

            // If you want to create a foreign key constraint for package_id
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping the fields
            $table->dropColumn(['package_id', 'quota_used', 'prefix', 'last_name', 'phone_number']);

            // Dropping the foreign key constraint if it exists
            $table->dropForeign(['package_id']);
        });
    }
}
