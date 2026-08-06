<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [

            [
                'title' => 'ERP Readiness Workshop',
                'slug' => 'erp-readiness-workshop',
                'description' => 'A hands-on session for finance and ops leads to assess whether their business is ready for a full ERP rollout.',
                'start_date' => now()->toDateString(),
                'end_date' => null,
                'time' => '10:00:00',
                'badge_color' => 'blue',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title' => 'Dynamics 365 Product Demo Week',
                'slug' => 'dynamics-365-product-demo-week',
                'description' => 'Live walkthroughs of Dynamics 365 Business Central for teams evaluating a switch from legacy accounting software.',
                'start_date' => '2026-08-22',
                'end_date' => '2026-08-28',
                'time' => '14:00:00',
                'badge_color' => 'pink',
                'sort_order' => 2,
                'is_active' => true,
            ],

        ];

        foreach ($events as $event) {
            DB::table('events')->updateOrInsert(
                ['slug' => $event['slug']],
                $event
            );
        }
    }
}