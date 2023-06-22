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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number_of_applicants');
            $table->string('max_number_of_applicants');
            $table->text('description');

            $table->timestamps();
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name_surname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('date');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses');

            $table->integer('status', 0);  // -1 0 1

            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name_surname');
            $table->string('email');
            $table->string('comment');

            $table->integer('status');  // -1 0 1

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('contacts');
    }
};

