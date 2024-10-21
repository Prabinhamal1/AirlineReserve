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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');      // Full Name field
            $table->string('email')->unique(); // Email Id field, unique index
            $table->string('phone')->nullable(); // Phone field, optional
            $table->string('address')->nullable(); // Address field, optional
            $table->string('password');   // Password field
            $table->tinyInteger('is_admin')->default(0); // is_admin field, tinyint(1), default 0
            $table->timestamp('email_verified_at')->nullable(); // Optional timestamp for email verification
            $table->rememberToken(); // Token for session persistence
            $table->timestamps();    // created_at and updated_at timestamps
            $table->softDeletes();   // deleted_at timestamp for soft deletes
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
