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
   Schema::create('profiles', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('age');
    $table->text('bio');

    $table->unsignedInteger('user_id')->unique();

    $table->foreign('user_id')
          ->references('id')
          ->on('users');

    $table->timestamps();
});
}

public function down(): void
{
    Schema::dropIfExists('profiles');
}
};
