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
        Schema::create('airlines', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing primary key
            $table->string('name', 125)->collation('utf8_unicode_ci'); // Name field, varchar(125) with utf8 collation
            $table->string('code', 125)->collation('utf8_unicode_ci'); // Code field, varchar(125) with utf8 collation
            $table->timestamp('created_at')->nullable(); // Created at timestamp, nullable
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
