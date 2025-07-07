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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('header');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->string('requirement_one');
            $table->string('requirement_two')->nullable();
            $table->string('preferred_one')->nullable();
            $table->string("working_condition_one");
            $table->string("working_condition_two")->nullable();
            $table->string("working_condition_three")->nullable();
            $table->string("benefit_one");
            $table->string("benefit_two")->nullable();
            $table->string("benefit_three")->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_valid')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
