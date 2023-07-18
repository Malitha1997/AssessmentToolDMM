<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RelatedministrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relatedministries')->insert([
            'related_ministry' => "President's office",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Prime Minister's office",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Defence",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Finance, Economic Stabilization and National Policies",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Ports, Shipping and Aviation",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Foreign Affairs",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Public Administration, Home Affairs, Provincial Councils and Local Government",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Education",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Transport and Highways",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Mass Media",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Health",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Agriculture",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Wildlife and Forest Resources Conservation",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Justice, Prison Affairs and Constitutional Reforms",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Tourism and Lands",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Plantation Industries",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Industries",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Urban Development and Housing",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Buddhasasana, Religious and Cultural Affairs",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Power and Energy",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Environment",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Irrigation",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Sports & Youth Affairs",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Labour and Foreign Employment",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Public Security",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Trade, Commerce and Food Security",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Women, Child Affairs and Social Empowerment",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Technology",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Investment Promotions",
        ]);

        DB::table('relatedministries')->insert([
            'related_ministry' => "Ministry of Water Supply and Estate Infrastructure Development",
        ]);
    }
}
