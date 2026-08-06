<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextImageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'header' => 'About Us',
                'slug' => 'about-us',
                'text' => 'Animate Solutions is a digital consultancy agency that is responsible for providing excellent Enterprise Resource Planning (ERP) solutions in Nigeria and beyond. We specialize in Business Process Automation and Support - using software solutions such as Microsoft Dynamics 365 Business Central, Ezee Frontdesk, Ezee Burrp, Soft4 Real Estate, etc. The aim and nature of you do will determine the tools and technologies to be used in facilitating the growth of your business.',
                'image' => 'text-image-sections/samson.jpg',
                'image_position' => 'right',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'header' => 'Delivering Tailored Business Solutions',
                'slug' => 'tailored-business-solutions',
                'text' => 'At Animate Solutions, we understand that every business has unique processes and challenges. Our team works closely with clients to analyze their operations, identify inefficiencies, and implement customized ERP and digital transformation solutions that improve productivity, streamline workflows, and support sustainable growth. From implementation and integration to training and ongoing support, we are committed to helping organizations maximize the value of their technology investments.',
                'image' => 'text-image-sections/charlesdeluvio.jpg',
                'image_position' => 'left',
                'sort_order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($sections as $section) {
            DB::table('text_image_sections')->updateOrInsert(
                ['slug' => $section['slug']],
                $section
            );
        }
    }
}
