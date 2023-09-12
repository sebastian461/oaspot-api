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
        Schema::create('parking', function (Blueprint $table) {
            $table->bigIncrements('parking_id');
            $table->string('parking_name', 100);
            $table->char('city_id', 7);
            $table->foreign('city_id')->references('city_id')->on('city')->onDelete('cascade');;
            $table->string('parking_address', 250);
            $table->text('parking_description');
            $table->bigInteger('parking_places');
            $table->float('parking_price', 8, 2);
            $table->boolean('parking_delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking');
    }
};
