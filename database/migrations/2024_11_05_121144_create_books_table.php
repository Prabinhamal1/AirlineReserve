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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('flight_id'); // Foreign key to the flights table
            $table->string('name'); // Passenger's full name
            $table->string('from'); // Origin location
            $table->string('to'); // Destination location
            $table->date('departure_date'); // Departure date
            $table->integer('departure_hour'); // Departure hour
            $table->integer('departure_minute');
            $table->string('departure_ampm'); // Departure minute
            $table->date('arrival_date'); // Departure date
            $table->integer('arrival_hour'); // Departure hour
            $table->integer('arrival_minute'); // Departure minute
             
            $table->string('arrival_ampm'); // AM/PM for departure time
            $table->string('airline'); // Airline name
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint linking the flight_id to the flights table
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
