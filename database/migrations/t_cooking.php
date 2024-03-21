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
        Schema::create('t_cooking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 50);
            $table->bigInteger('ingredient_id_1');
            $table->bigInteger('ingredient_id_2')->nullable();
            $table->bigInteger('ingredient_id_3')->nullable();
            $table->bigInteger('user_id');
            $table->tinyInteger('is_release')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_cooking');
    }
};
