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
        Schema::create('govorganizationdetails', function (Blueprint $table) {
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
            $table->string('head_email');
            $table->string('designation');
            $table->string('types_of_service');
            $table->string('cdio_name');
            $table->string('cdio_email');
            $table->string('cdio_contact_no');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('relatedministry_id')->constrained('relatedministries');
            $table->foreignId('organizationcategory_id')->constrained('organizationcategories');
            $table->foreignId('govorganizationname_id')->constrained('govorganizationnames');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govorganizationdetail');
    }
};
