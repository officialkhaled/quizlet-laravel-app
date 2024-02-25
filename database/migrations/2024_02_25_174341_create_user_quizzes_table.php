<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_quizzes', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('exam_id');
            $table->string('std_status');
            $table->string('exam_joined');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quizzes');
    }
};
