<?php

namespace Database\Seeders;

use App\Models\Workspace;
use Illuminate\Database\Seeder;

class WorkspaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workspaces = [
            [
                'name' => 'Hot Desk',
                'slug' => 'hot-desk',
                'description' => 'Flexible workspace for those who value freedom and variety.',
                'image' => 'assets/img/Co-working_space/1.jpg',
                'price_per_day' => 25.00,
                'price_per_week' => 100.00,
                'price_per_month' => 350.00,
                'capacity' => 1,
                'amenities' => [
                    'Access 8am - 6pm, Mon-Fri',
                    'High-speed internet',
                    'Printing facilities',
                    'Complimentary refreshments'
                ],
                'is_available' => true
            ],
            [
                'name' => 'Dedicated Desk',
                'slug' => 'dedicated-desk',
                'description' => 'Your own personal workspace in our collaborative environment.',
                'image' => 'assets/img/Co-working_space/2.jpg',
                'price_per_day' => 35.00,
                'price_per_week' => 150.00,
                'price_per_month' => 500.00,
                'capacity' => 1,
                'amenities' => [
                    '24/7 access',
                    'Personal storage space',
                    'Meeting room access',
                    'Mail handling'
                ],
                'is_available' => true
            ],
            [
                'name' => 'Private Office',
                'slug' => 'private-office',
                'description' => 'A fully furnished private office for teams that need their own space.',
                'image' => 'assets/img/Co-working_space/3.jpg',
                'price_per_day' => 100.00,
                'price_per_week' => 450.00,
                'price_per_month' => 1500.00,
                'capacity' => 4,
                'amenities' => [
                    'Lockable office',
                    '24/7 access',
                    'Meeting room credits',
                    'Custom branding options',
                    'Dedicated phone line'
                ],
                'is_available' => true
            ]
        ];

        foreach ($workspaces as $workspace) {
            Workspace::create($workspace);
        }
    }
}
