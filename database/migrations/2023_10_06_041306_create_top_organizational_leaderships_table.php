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
        Schema::create('top_organizational_leaderships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt1');
            $table->string('mgt2');
            $table->string('mgt3');
            $table->string('mgt4');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_organizational_leaderships');
    }
};
