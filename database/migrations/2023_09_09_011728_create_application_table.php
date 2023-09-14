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
    Schema::create('application', function (Blueprint $table) {
      $table->bigIncrements('application_id');
      $table->unsignedBigInteger('parking_id');
      $table->foreign('parking_id')->references('parking_id')->on('parking')->onUpdate('cascade')->onDelete('cascade');
      $table->enum('application_status', ['pending', 'success', 'approved']);
      $table->boolean('application_delete');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('application');
  }
};
