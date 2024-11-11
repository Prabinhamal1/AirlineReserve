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
        Schema::table('flights', function (Blueprint $table) {
            $table->integer("arrival_hour")->nullable();
            $table->integer("arrival_min")->nullable();
            $table->string("arrival_ampm")->nullable();
            $table->integer("departure_hour")->nullable();
            $table->integer("departure_min")->nullable();
            $table->string("departure_ampm")->nullable();
            $table->integer("booked_seats")->nullable();
            $table->integer("remain_seats")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->dropColumn("arrival_hour");
            $table->dropColumn("arrival_min");
            $table->dropColumn("arrival_ampm");
            $table->dropColumn("departure_hour");
            $table->dropColumn("departure_min");
            $table->dropColumn("departure_ampm");
            $table->dropColumn("booked_seats");
            $table->dropColumn("remain_seats");
    });
}
};
