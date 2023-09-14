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
    Schema::create('image', function (Blueprint $table) {
      $table->bigIncrements('image_id');
      $table->string('image_name');
      $table->unsignedBigInteger('parking_id');
      $table->foreign('parking_id')->references('parking_id')->on('parking');
      $table->string('image_address');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('image');
  }
};
