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
        Schema::create('government_organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gov_org_name');
            $table->string('organization_category');
            $table->string('number_of_employee');
            $table->string('related_ministry');
            $table->string('types_of_services_provide');
            $table->string('districts_of_operations');
            $table->string('phone_number');
            $table->string('email');
            $table->string('name_of_the_head');
            $table->string('designation');
            $table->string('cdio_name');
            $table->string('cdio_email');
            $table->string('cdio_contact_no');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('government_organization');
    }
};
