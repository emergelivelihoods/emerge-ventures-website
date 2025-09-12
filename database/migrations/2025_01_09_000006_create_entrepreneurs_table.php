<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('business_name');
            $table->text('business_description');
            $table->text('business_preview')->nullable(); // Short preview for cards
            $table->string('industry');
            $table->string('location');
            $table->string('business_address')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_hours')->nullable();
            $table->string('website')->nullable();
            $table->json('social_media')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('business_logo')->nullable();
            $table->text('bio')->nullable();
            $table->text('overview')->nullable(); // Detailed overview for profile page
            $table->string('role')->nullable(); // e.g., "Founder", "CEO"
            $table->year('founded_year')->nullable();
            $table->string('business_size')->nullable();
            $table->json('skills')->nullable();
            $table->json('achievements')->nullable();
            $table->json('milestones')->nullable(); // Business milestones with dates
            $table->json('partners')->nullable(); // Business partners
            $table->string('five_year_plan')->nullable();
            $table->string('value_proposition')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->boolean('featured')->default(false);
            $table->date('joined_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entrepreneurs');
    }
};