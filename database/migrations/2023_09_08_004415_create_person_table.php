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
    Schema::create('person', function (Blueprint $table) {
      $table->string('person_cedula', 20)->primary();
      $table->string('person_name', 100);
      $table->string('person_lastname', 100);
      $table->string('person_phone', 20);
      $table->char('city_id', 7);
      $table->foreign('city_id')->references('city_id')->on('city')->onDelete('cascade');
      $table->string('person_address', 200);
      $table->boolean('person_delete');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('person');
  }
};
