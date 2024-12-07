<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Crea la columna 'id' como PRIMARY KEY
            $table->string('name'); // Crea la columna 'name' de tipo varchar
            $table->text('description'); // Crea la columna 'description' de tipo text
            $table->string('location'); // Crea la columna 'location' de tipo varchar
            $table->dateTime('date'); // Crea la columna 'date' de tipo datetime
            $table->binary('logo')->nullable(); // Crea la columna 'logo' de tipo blob, nullable
            $table->string('status')->nullable(); // Crea la columna 'status' de tipo varchar, nullable
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Referencia al usuario que crea el evento
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
