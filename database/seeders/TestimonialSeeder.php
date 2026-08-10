<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::insert([
            [
                'name' => 'Adaeze Okonkwo',
                'role' => 'Finance Director, Portside Logistics',
                'comment' => 'Animate Solutions rebuilt our entire month-end close process. What used to take two weeks now takes three days.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Emeka Chukwu',
                'role' => 'Operations Lead, Delta Hospitality Group',
                'comment' => 'The eZee FrontDesk rollout was smooth from day one. Their team stayed with us through training until every front desk agent was confident.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Fatima Bello',
                'role' => 'CFO, Northbridge Manufacturing',
                'comment' => 'We evaluated three ERP consultants before choosing Animate. Their implementation plan was the only one that actually matched how our team works.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Tunde Adebayo',
                'role' => 'IT Manager, Coastal Retail Group',
                'comment' => 'Support response time genuinely changed how we plan our week. Issues that used to sit for days now get resolved same-day.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Ngozi Eze',
                'role' => 'HR Director, Summit Energy',
                'comment' => 'The HRMS migration could have been a disaster given our data mess. Their team caught issues we did not even know we had.',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ]);
    }
}