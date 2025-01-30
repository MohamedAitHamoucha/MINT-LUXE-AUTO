<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->decimal('price', 15, 2);
            $table->integer('year');
            $table->string('type');
            $table->string('sector');
            $table->string('mileage');
            $table->integer('doors');
            $table->string('origin');
            $table->boolean('first_hand');
            $table->string('fiscal_power');
            $table->string('condition');
            $table->string('transmission')->default('Automatique');
            $table->string('fuel_type')->default('Essence');
            $table->text('description');
            $table->string('slug')->unique();
            $table->json('images');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}; 