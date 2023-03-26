<?php

namespace AlexisVS\MultipassTestingModule\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testing_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('string')->nullable();
            $table->integer('integer')->nullable();
            $table->float('float')->nullable();
            $table->json('json')->nullable();
            $table->date('date')->nullable();
            $table->string('additional_string_1')->nullable();
            $table->string('additional_string_2')->nullable();
            $table->string('additional_string_3')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testing_modules');
    }
};
