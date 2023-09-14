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
    Schema::create('document', function (Blueprint $table) {
      $table->bigIncrements('document_id');
      $table->unsignedBigInteger('application_id');
      $table->foreign('application_id')->references('application_id')->on('application')->onUpdate('cascade')->onDelete('cascade');
      $table->string('document_name');
      $table->string('document_address');
      $table->boolean('document_delete');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('document');
  }
};
