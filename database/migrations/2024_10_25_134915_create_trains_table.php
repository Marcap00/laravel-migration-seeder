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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('train_code')->nullable(false)->unique();
            $table->string('company')->nullable(false);
            $table->string('departure_station')->nullable(false);
            $table->string('arrival_station')->nullable(false);
            $table->date('departure_date')->nullable(false);
            $table->date('arrival_date')->nullable(false);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('number_of_carriages')->nullable(false)->unsigned();
            $table->boolean('on_time')->nullable(false)->default(true);
            $table->boolean('deleted')->nullable(false)->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
