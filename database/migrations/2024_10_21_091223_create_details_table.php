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
            $table->string('course');
            $table->string('address');
            $table->date('birthday');
            $table->integer('age');
            $table->string('status');
            $table->string('sex');
            $table->string('nationality');
            $table->string('elem');
            $table->string('elemAcadYear');
            $table->string('jhs');
            $table->string('jhsAcadYear');
            $table->string('shs');
            $table->string('shsAcadYear');
            $table->string('college');
            $table->string('collegeAcadYear');
        });

        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detailID')->constrained('details')->cascadeOnDelete();
            $table->string('hobby');
        });

        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detailID')->constrained('details')->cascadeOnDelete();
            $table->string('fbLink');
            $table->string('igLink');
            $table->string('githubLink');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
        Schema::dropIfExists('hobbies');
        Schema::dropIfExists('links');
    }
};
