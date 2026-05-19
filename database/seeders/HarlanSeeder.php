<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HarlanSeeder extends Seeder
{
    public function run(): void
    {
        // Stats
        DB::table('stats')->insert([
            ['label' => 'Years Building', 'value' => '48+', 'icon' => 'fas fa-chart-line'],
            ['label' => 'Projects Delivered', 'value' => '$3.2B', 'icon' => 'fas fa-building'],
            ['label' => 'Workforce', 'value' => '12,000+', 'icon' => 'fas fa-users'],
            ['label' => 'Countries Active', 'value' => '17', 'icon' => 'fas fa-globe'],
        ]);

        // Directors
        DB::table('directors')->insert([
            ['name' => 'Robert Harlan', 'role' => 'Chairman', 'image' => 'assets/images/robert.png', 'since' => '2006'],
            ['name' => 'Jane Lee', 'role' => 'Chief Executive Officer', 'image' => 'assets/images/jane.png', 'since' => '2013'],
            ['name' => 'Michael Doel', 'role' => 'Chief Operating Officer', 'image' => 'assets/images/michael.png', 'since' => '2016'],
        ]);

        // Businesses
        DB::table('businesses')->insert([
            [
                'title' => 'CIVIL INFRASTRUCTURE',
                'description' => 'Highways, bridges, tunnels, and large-scale transport corridors.',
                'icon' => 'fas fa-bridge',
                'image' => 'assets/images/business_civil.png',
                'projects' => '340',
                'revenue' => '$1.1B',
                'order' => 1
            ],
            [
                'title' => 'BUILDING & REAL ESTATE',
                'description' => 'Commercial, residential, and mixed-use developments.',
                'icon' => 'fas fa-building',
                'image' => 'assets/images/business_building.png',
                'projects' => '280',
                'revenue' => '$920M',
                'order' => 2
            ],
            [
                'title' => 'ENERGY & RESOURCES',
                'description' => 'Power generation, renewables, and natural resources.',
                'icon' => 'fas fa-bolt',
                'image' => 'assets/images/business_energy.png',
                'projects' => '210',
                'revenue' => '$780M',
                'order' => 3
            ],
            [
                'title' => 'INDUSTRIAL SOLUTIONS',
                'description' => 'Industrial plants, facilities, and process infrastructure.',
                'icon' => 'fas fa-industry',
                'image' => 'assets/images/business_industrial.png',
                'projects' => '160',
                'revenue' => '$610M',
                'order' => 4
            ],
            [
                'title' => 'MARITIME & PORTS',
                'description' => 'Ports, harbors, marine terminals, and offshore structures.',
                'icon' => 'fas fa-ship',
                'image' => 'assets/images/business_maritime.png',
                'projects' => '90',
                'revenue' => '$430M',
                'order' => 5
            ],
            [
                'title' => 'DIGITAL & INNOVATION',
                'description' => 'Digital engineering, smart infrastructure, and technology.',
                'icon' => 'fas fa-microchip',
                'image' => 'assets/images/business_digital.png',
                'projects' => '70',
                'revenue' => '$290M',
                'order' => 6
            ],
        ]);

        // Companies
        DB::table('companies')->insert([
            ['name' => 'Harlan Civil GmbH', 'image' => 'assets/images/company_civil.png', 'country' => 'Germany', 'sector' => 'Civil', 'founded' => '1976', 'stake' => '100%'],
            ['name' => 'Okafor Construction Ltd', 'image' => 'assets/images/company_okafor.png', 'country' => 'Nigeria', 'sector' => 'Building', 'founded' => '1998', 'stake' => '74%'],
            ['name' => 'Gulf Structures LLC', 'image' => 'assets/images/company_gulf.png', 'country' => 'UAE', 'sector' => 'Energy', 'founded' => '2005', 'stake' => '100%'],
            ['name' => 'Meridian Ports Co.', 'image' => 'assets/images/company_meridian.png', 'country' => 'Singapore', 'sector' => 'Maritime', 'founded' => '2009', 'stake' => '60%'],
            ['name' => 'Harlan Digital Solutions', 'image' => 'assets/images/company_digital.png', 'country' => 'USA', 'sector' => 'Digital', 'founded' => '2017', 'stake' => '80%'],
        ]);

        // Impact Stats
        DB::table('impact_stats')->insert([
            ['value' => '1.4M', 'description' => 'Tonnes CO2 avoided since 2018', 'icon' => 'fas fa-leaf'],
            ['value' => '38%', 'description' => 'Renewable energy in operations', 'icon' => 'fas fa-sun'],
            ['value' => '99,200', 'description' => 'Local jobs created in communities', 'icon' => 'fas fa-users'],
            ['value' => '$84M', 'description' => 'Community Investment (2015-2024)', 'icon' => 'fas fa-heart'],
            ['value' => '0.31', 'description' => 'LTIFR - Industry-leading safety rate', 'icon' => 'fas fa-shield-alt'],
            ['value' => '2,100+', 'description' => 'Workers trained annually', 'icon' => 'fas fa-graduation-cap'],
        ]);

        // Timeline Items
        DB::table('timeline_items')->insert([
            ['year' => '1976', 'title' => 'FOUNDATION', 'description' => 'Robert Harlan Sr. founds Harlan Civil in Hamburg with 12 employees and a single road contract.', 'category' => 'FOUNDATION'],
            ['year' => '1985', 'title' => 'GOING GLOBAL', 'description' => 'Expanded operations to West Africa and the Middle East.', 'category' => 'GLOBAL'],
            ['year' => '2000', 'title' => 'DIVERSIFICATION', 'description' => 'Entered energy, industrial, and maritime sectors.', 'category' => 'DIVERSIFICATION'],
            ['year' => '2015', 'title' => 'INNOVATION LEADER', 'description' => 'Invested in digital construction and sustainable technologies.', 'category' => 'INNOVATION'],
            ['year' => '2024', 'title' => 'FUTURE READY', 'description' => 'Operating in 17 countries with 140+ live projects.', 'category' => 'FUTURE'],
        ]);

        // News Items
        DB::table('news_items')->insert([
            [
                'tag' => 'Press Release',
                'title' => 'Harlan Group Reports Record Growth in Infrastructure Projects',
                'description' => 'Strong performance across all markets with a focus on sustainable development.',
                'image' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=800&q=80',
                'published_at' => '2024-05-14'
            ],
            [
                'tag' => 'Report',
                'title' => 'Sustainability Report 2024 Now Available',
                'description' => 'Highlights of our progress towards net-zero and community impact.',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80',
                'published_at' => '2024-04-02'
            ],
            [
                'tag' => 'Project Update',
                'title' => 'Major Contract Awarded for Renewable Energy Project',
                'description' => 'Expanding our footprint in the renewable energy sector in UAE.',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
                'published_at' => '2024-03-15'
            ],
        ]);

        // Settings
        DB::table('settings')->insert([
            ['key' => 'site_name', 'value' => 'Harlan Group', 'group' => 'general'],
            ['key' => 'hero_title', 'value' => 'BUILT TO LAST.', 'group' => 'hero'],
            ['key' => 'hero_subtitle', 'value' => 'A global construction and infrastructure group operating across civil, energy, maritime, building, industrial, and digital sectors in 17 countries.', 'group' => 'hero'],
            ['key' => 'hero_bg', 'value' => 'assets/images/hero_bg.png', 'group' => 'hero'],
            ['key' => 'board_bg', 'value' => 'assets/images/hero_board.png', 'group' => 'hero'],
            ['key' => 'businesses_bg', 'value' => 'assets/images/hero_businesses.png', 'group' => 'hero'],
            ['key' => 'companies_bg', 'value' => 'assets/images/hero_companies.png', 'group' => 'hero'],
            ['key' => 'timeline_bg', 'value' => 'assets/images/hero_timeline.png', 'group' => 'hero'],
            ['key' => 'media_bg', 'value' => 'assets/images/hero_media.png', 'group' => 'hero'],
            ['key' => 'hero_stats_value', 'value' => '140+', 'group' => 'hero'],
            ['key' => 'hero_stats_label', 'value' => 'LIVE PROJECTS', 'group' => 'hero'],
            ['key' => 'impact_bg', 'value' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1400&q=80', 'group' => 'impact'],
            ['key' => 'cta_title', 'value' => 'LET\'S BUILD SOMETHING GREAT TOGETHER', 'group' => 'cta'],
            ['key' => 'cta_subtitle', 'value' => 'We welcome enquiries from project owners, joint venture partners, investors, and prospective clients worldwide.', 'group' => 'cta'],
            ['key' => 'cta_image', 'value' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1400&q=80', 'group' => 'cta'],
            ['key' => 'footer_about', 'value' => 'A global construction and infrastructure group operating across civil, energy, maritime, building, industrial, and digital sectors in 17 countries.', 'group' => 'footer'],
            ['key' => 'contact_address', 'value' => 'Harlan Tower, Ballindamm 17 20095 Hamburg, Germany', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '+49 40 6000 2200', 'group' => 'contact'],
            ['key' => 'contact_email', 'value' => 'info@harlangroup.com', 'group' => 'contact'],
        ]);
    }
}
