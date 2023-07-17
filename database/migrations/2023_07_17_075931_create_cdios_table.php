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
        Schema::create('cdios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cdio_name');
            $table->string('cdio_email');
            $table->string('cdio_contact_number');
            $table->foreignId('gov_organization_detail_id')->constrained('gov_organization_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdios');
    }
};
