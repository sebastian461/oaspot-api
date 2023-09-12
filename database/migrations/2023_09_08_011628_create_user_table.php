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
    Schema::create('user', function (Blueprint $table) {
      $table->string('email')->primary();
      $table->string('person_cedula', 20);
      $table->foreign('person_cedula')->references('person_cedula')->on('person')->onUpdate('cascade')->onDelete('cascade');
      $table->string('rol_name', 20);
      $table->foreign('rol_name')->references('rol_name')->on('rol')->onDelete('cascade');
      $table->string('password');
      $table->timestamp('email_verified_at')->nullable();
      $table->rememberToken();
      $table->boolean('user_delete');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user');
  }
};
