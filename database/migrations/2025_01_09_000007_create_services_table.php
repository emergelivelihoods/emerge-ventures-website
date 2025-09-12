<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->enum('pricing_type', ['fixed', 'hourly', 'custom'])->default('fixed');
            $table->json('features')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('featured')->default(false);
            $table->integer('delivery_time_days')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};