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
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key to the user table
            $table->unsignedBigInteger('flight_id'); // Foreign key to the flight table
            $table->string('seat_number', 125)->collation('utf8_unicode_ci'); // Seat number
            $table->tinyInteger('status')->default(0); // Ticket status: 0: pending, 1: accepted, 2: canceled
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at for soft deletes
            
            // Indexes
            $table->index('user_id'); // Index for user_id
            $table->index('flight_id'); // Index for flight_id
            
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
