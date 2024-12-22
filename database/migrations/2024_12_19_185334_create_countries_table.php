<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Country name column
            $table->string('status'); // Status column (you can define it as string, enum, etc.)
            $table->boolean('is_status')->default(true); // Boolean column for the status flag
            $table->timestamps(); // Automatically adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
