<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('value');
            $table->string('icon');
            $table->timestamps();
        });

        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('image');
            $table->string('since');
            $table->timestamps();
        });

        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('icon');
            $table->string('projects');
            $table->string('revenue');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('sector');
            $table->string('founded');
            $table->string('stake');
            $table->timestamps();
        });

        Schema::create('impact_stats', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('description');
            $table->string('icon');
            $table->timestamps();
        });

        Schema::create('timeline_items', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('news_items', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->date('published_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stats');
        Schema::dropIfExists('directors');
        Schema::dropIfExists('businesses');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('impact_stats');
        Schema::dropIfExists('timeline_items');
        Schema::dropIfExists('news_items');
    }
};
