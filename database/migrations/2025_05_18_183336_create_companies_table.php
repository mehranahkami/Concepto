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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_type');// private,governmental,startup,etc..
            $table->string('company_website');
            $table->string('company_description');
            $table->string('company_logo');
            $table->string('contact_info');
            $table->string('employees_count');
            $table->string('industry');
            $table->string('banner_image');
            $table->string('founded_year');
            $table->string('registration_number');
            $table->string('capital');//meghdar sarmaye
            $table->string('Status');
            $table->string('location');
            $table->string('social_links');
            $table->string('phone_support');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
