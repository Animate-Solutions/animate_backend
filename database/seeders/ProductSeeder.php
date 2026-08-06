<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Dynamics 365 Business Central',
                'slug' => 'dynamics-365-bc',
                'description' => 'Unify your business from data to people to processes.',
                'image' => '/assets/images/product_images/microsoft-dynamics.png',
                'features' => [
                    'Financial Management & AI Cash Flow',
                    'Project & Capacity Planning',
                ],
                'video' => 'https://youtu.be/j8xMfffsXZw',
                'order' => 1,
            ],
            [
                'title' => 'ERPNext',
                'slug' => 'erpnext',
                'description' => 'An agile, open-source ERP system that covers accounting, inventory, CRM, HR, and production in one unified platform without subscription lock-ins.',
                'image' => '/assets/images/product_images/ERPnext.png',
                'features' => [
                    'Accounting & Financial Reporting',
                    'Manufacturing & MRP (BOM)',
                    'Multi-Warehouse Inventory Control',
                    'HR & Payroll Automation',
                    'Customer & Supplier Portals',
                ],
                'video' => null,
                'order' => 2,
            ],
            [
                'title' => 'eZee FrontDesk/Absolute',
                'slug' => 'ezee-frontdesk',
                'description' => 'eZee FrontDesk is designed to accommodate the needs of hotels, motels, resorts, clubs, hostels, apartments, B&Bs, and other hospitality businesses.',
                'image' => '/assets/images/product_images/ezeefront.png',
                'features' => [
                    'Cloud PMS & Front Desk',
                    'Direct Booking Engine',
                    'Global Channel Manager',
                    'Hotel Website Builder',
                    'Third-Party Hardware Interfaces',
                ],
                'video' => 'https://youtu.be/uuTU7IjNYew',
                'order' => 3,
            ],
            [
                'title' => 'Microsoft Cloud & Volume Licensing',
                'slug' => 'microsoft-licensing',
                'description' => 'Flexible, scalable Microsoft licensing solutions, including CSP and Enterprise Agreements that keep your cloud software, infrastructure, and tools compliant.',
                'image' => '/assets/images/product_images/Microsoftlic.png',
                'features' => [
                    'Microsoft 365 & Office 365 Subscriptions',
                    'Cloud Solution Provider (CSP) Managed Billing',
                    'Azure Consumption & Hybrid Cloud Licensing',
                    'Volume Licensing & Enterprise Agreements (EA)',
                    'License Optimization & Compliance Audits',
                ],
                'video' => null,
                'order' => 4,
            ],
            [
                'title' => 'eZee BurrP!/Optimus',
                'slug' => 'ezee-burrp',
                'description' => 'eZee BurrP! is a desktop-based restaurant POS solution that helps restaurants improve service speed, streamline operations, and increase overall efficiency.',
                'image' => '/assets/images/product_images/ezeeburrp.png',
                'features' => [
                    'Restaurant POS & Kitchen Display System (KDS)',
                    'Online Delivery & Aggregator Sync',
                    'Recipe Costing & Stock Management',
                    'Multi-Chain Restaurant Solution',
                ],
                'video' => 'https://youtu.be/KIPrp_6Jpw0',
                'order' => 5,
            ],
            [
                'title' => 'Tally9 ERP',
                'slug' => 'tally9',
                'description' => 'Tally9 ERP is a reliable accounting and inventory management solution that adapts to changing business needs while keeping your data secure.',
                'image' => '/assets/images/product_images/tally9.jpg',
                'features' => [
                    'Invoicing & Financial Accounting',
                    'Taxation & e-Invoicing Compliance',
                    'Multi-Godown Inventory Management',
                    'Payroll & Statutory Processing',
                    'Cost Center & Branch Accounting',
                ],
                'video' => 'https://youtu.be/c_D2m01hDCs',
                'order' => 6,
            ],
            [
                'title' => 'Zeta ERP',
                'slug' => 'zeta-erp',
                'description' => 'Zeta ERP offers the freedom of choice, ease of integration, high performance, and reliability that forward-thinking companies rely on to increase profitability and seize the competitive advantage.',
                'image' => '/assets/images/product_images/zetaerp.jpg',
                'features' => [
                    'Financial Operations',
                    'Fixed Asset Management',
                    'Point of Sale (PoS)',
                    'Document Management',
                    'Human Resource Management Solution (HRMS)',
                ],
                'video' => 'https://youtu.be/d_7Wx_pIAog',
                'order' => 7,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}