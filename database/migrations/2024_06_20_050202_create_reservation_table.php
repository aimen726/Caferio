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
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) { // Plural table name for consistency
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('person')->nullable(); // Changed to integer
            $table->date('date')->nullable(); // Changed to date type
            $table->text('message')->nullable(); // Changed to text type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation'); // Plural table name for consistency
    }
};
