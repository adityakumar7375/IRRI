<?php

// database/migrations/{timestamp}_create_states_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();  // This creates an auto-incrementing primary key (id)
            $table->string('state');  // This is the 'state' field
            $table->timestamps();  // This automatically creates 'created_at' and 'updated_at' fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
