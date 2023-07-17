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
        Schema::create('gov_organization_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gov_org_address');
            $table->string('gov_org_email');
            $table->string('number_of_employee');
            $table->string('districts_of_operations');
            $table->string('phone_number');
            $table->string('availablity_of_IT_unit');
            $table->string('name_of_the_head');
            $table->string('contact_number_of_the_head');
            $table->string('email_of_the_head');
            $table->string('designation');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('related_ministry_id')->constrained('related_ministries');
            $table->foreignId('organization_category_id')->constrained('organization_categories');
            $table->foreignId('types_of_service_id')->constrained('types_of_services');
            $table->foreignId('gov_organization_name_id')->constrained('gov_organization_names');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gov_organization_detail');
    }
};
