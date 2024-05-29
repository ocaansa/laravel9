<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
{
Schema::table('employees', function (Blueprint $table) {
$table->string('original_filename')->after('position_id')->nullable();
$table->string('encrypted_filename')->after('original_filename')->nullable();
});
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
        $table->dropColumn('encrypted_filename');
        $table->dropColumn('original_filename');
        });
        }
};
