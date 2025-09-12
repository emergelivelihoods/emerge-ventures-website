<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\DigitalSkill;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Entrepreneur;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        // Create sample categories
        $categories = [
            ['name' => 'Electronics', 'slug' => 'electronics', 'description' => 'Electronic devices and gadgets'],
            ['name' => 'Books', 'slug' => 'books', 'description' => 'Educational and reference books'],
            ['name' => 'Clothing', 'slug' => 'clothing', 'description' => 'Apparel and accessories'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create sample products
        $products = [
            [
                'name' => 'Laptop Computer',
                'slug' => 'laptop-computer',
                'description' => 'High-performance laptop for business and personal use',
                'short_description' => 'Powerful laptop with latest specs',
                'price' => 999.99,
                'stock_quantity' => 25,
                'sku' => 'LAP001',
                'category_id' => 1,
                'status' => 'active',
                'featured' => true,
            ],
            [
                'name' => 'Business Strategy Book',
                'slug' => 'business-strategy-book',
                'description' => 'Comprehensive guide to modern business strategies',
                'short_description' => 'Essential business strategy guide',
                'price' => 29.99,
                'stock_quantity' => 100,
                'sku' => 'BOOK001',
                'category_id' => 2,
                'status' => 'active',
                'featured' => false,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Create sample digital skills
        $digitalSkills = [
            [
                'title' => 'Web Development Fundamentals',
                'slug' => 'web-development-fundamentals',
                'description' => 'Learn the basics of HTML, CSS, and JavaScript',
                'short_description' => 'Master web development basics',
                'price' => 199.99,
                'duration_hours' => 40,
                'level' => 'beginner',
                'is_active' => true,
                'featured' => true,
                'max_participants' => 20,
            ],
            [
                'title' => 'Digital Marketing Mastery',
                'slug' => 'digital-marketing-mastery',
                'description' => 'Complete guide to digital marketing strategies',
                'short_description' => 'Master digital marketing',
                'price' => 299.99,
                'duration_hours' => 60,
                'level' => 'intermediate',
                'is_active' => true,
                'featured' => true,
                'max_participants' => 15,
            ],
        ];

        foreach ($digitalSkills as $skill) {
            DigitalSkill::create($skill);
        }

        // Create sample services
        $services = [
            [
                'name' => 'Business Consultation',
                'slug' => 'business-consultation',
                'description' => 'Professional business consultation services',
                'short_description' => 'Expert business advice',
                'price' => 150.00,
                'pricing_type' => 'hourly',
                'is_active' => true,
                'featured' => true,
                'delivery_time_days' => 1,
            ],
            [
                'name' => 'Website Development',
                'slug' => 'website-development',
                'description' => 'Custom website development services',
                'short_description' => 'Professional web development',
                'price' => 2500.00,
                'pricing_type' => 'fixed',
                'is_active' => true,
                'featured' => true,
                'delivery_time_days' => 30,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Create sample team members
        $teamMembers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'position' => 'CEO & Founder',
                'bio' => 'Experienced entrepreneur with 15+ years in business development',
                'experience_years' => 15,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'position' => 'CTO',
                'bio' => 'Technology leader with expertise in software development',
                'experience_years' => 12,
                'is_active' => true,
                'sort_order' => 2,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }

        // Entrepreneurs are seeded by EntrepreneurSeeder
    }
}