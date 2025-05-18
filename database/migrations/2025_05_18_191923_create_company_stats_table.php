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
        Schema::create('company_stats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('num_exits');
            $table->string('num_investments');
            $table->string('num_new_followers');
            $table->string('capital_change_percentage');
            $table->string('exits_change_percentage');
            $table->string('last_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_stats');
    }
};
