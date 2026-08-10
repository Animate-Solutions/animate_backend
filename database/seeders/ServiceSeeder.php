<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([
            [
                'title' => 'Implementation Services',
                'slug' => 'implementation-services',
                'icon' => 'wrench',
                'description' => 'We have the expertise to deploy security technologies effectively – and the time and resources to do it – is never a challenge. Our Implementation Services helps you determine the mix of security solutions for your business and ensures they are properly integrated.',
                'link_label' => null,
                'link_href' => '/services',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Support Services',
                'slug' => 'support-services',
                'icon' => 'lifebuoy',
                'description' => 'We guarantee extensive experience ensuring your peace of mind. Our Support Services is grounded in exceptional client service, with our knowledgeable expertise and cutting edge technology you are free to focus on what you do best.',
                'link_label' => 'Open Support Portal',
                'link_href' => 'https://animatesupport.base44.app/',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Business Process Automation',
                'slug' => 'business-process-automation',
                'icon' => 'workflow',
                'description' => 'We are specialists in delivering technology solutions to meet the needs of our clients. Our Consulting experience provides practical, cost-effective innovative change, insights and knowledge to help you organize and maintain an effective optimal model for your business growth and flexibility.',
                'link_label' => null,
                'link_href' => '/services',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Procurement Services',
                'slug' => 'procurement-services',
                'icon' => 'shoppingcart',
                'description' => 'Procuring the right IT hardware, software and licenses can be an incredibly stressful experience, especially when it goes wrong. We provide our customers with a completely transparent, vendor-neutral approach to IT procurement.',
                'link_label' => null,
                'link_href' => '/services',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ]);
    }
}