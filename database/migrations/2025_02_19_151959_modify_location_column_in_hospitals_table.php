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
    Schema::table('hospitals', function (Blueprint $table) {
        $table->text('location')->change(); // Change to TEXT type
    });
}

public function down()
{
    Schema::table('hospitals', function (Blueprint $table) {
        $table->string('location', 255)->change(); // Revert back if needed
    });
}
};
