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
        Schema::create('preliminary_assessment_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('report_file');
            $table->string('description');
            $table->foreignId('preliminary_assessment_result_id')->constrained('preliminary_assessment_results');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_assessment_report');
    }
};
