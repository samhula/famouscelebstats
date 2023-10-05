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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('category');
            $table->string('sub_category');
            $table->string('slug');
            $table->string('img_url');
            $table->string('img_credit');
            $table->string('full_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('profession')->nullable();
            $table->string('nationality')->nullable();
            $table->string('net_worth')->nullable();
            $table->string('height')->nullable();
            $table->longText('content');
            $table->string('home_articles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
