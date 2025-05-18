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
        Schema::create('company_followers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('CompanyID');
            $table->string('user_id');
            $table->string('followed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_followers');
    }
};
