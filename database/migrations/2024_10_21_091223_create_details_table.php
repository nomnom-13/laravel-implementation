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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->string('birthday');
            $table->integer('age');
            $table->string('status');
            $table->string('sex');
            $table->string('nationality');
            $table->string('elem');
            $table->string('jhs');
            $table->string('shs');
            $table->string('college');
            $table->string('hobby_1');
            $table->string('hobby_2');
            $table->string('hobby_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
