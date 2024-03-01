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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->date('date_submission');
            $table->string('type');
            $table->string('category');
            $table->string('status');
            $table->string('file_letter');
            $table->string('supporting_document');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('letter_lecturer', function (Blueprint $table) {
            $table->unsignedBigInteger('letter_id');
            $table->string('lecturer_id');
            $table->foreign('letter_id')->references('id')->on('letters')->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
        Schema::dropIfExists('letter_lecturer');
    }
};
