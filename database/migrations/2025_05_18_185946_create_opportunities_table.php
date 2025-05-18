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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Title');
            $table->string('Description');
            $table->string('CompanyId');
            $table->string('Required_Skills');
            $table->string('Location');
            $table->string('EmploymentType');//full-time,part-time,freelance
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
