<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    public function up()
    {
       /* Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
        */
        // Example migration file
Schema::create('todos', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained(); // This line adds the user_id column
    $table->string('title');
    $table->text('description')->nullable();
    $table->boolean('completed')->default(false);
    // Add other columns as needed
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('todos');
    }
}

