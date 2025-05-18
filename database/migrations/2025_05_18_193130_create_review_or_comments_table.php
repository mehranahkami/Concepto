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
        Schema::create('review_or_comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_id');
            $table->string('user_id');
            $table->string('subject');
            $table->string('content');
            $table->string('submit_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_or_comments');
    }
};
