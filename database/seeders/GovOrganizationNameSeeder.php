<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovOrganizationNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of Pensions',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Export Development Board',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => "Government Analyst's Department",
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Import & Export Control Department',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Irrigation Department',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Sri Lanka Standards Institution',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Sri Lanka Customs',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of Inland Revenue',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => "Registrar General's Department",
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of Imports & Exports Control',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of the Registrar of Companies',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Excise Department',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Colombo Municipal Council',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of Motor Traffic',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Ministry of Health - Food Control Unit',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Ministry of Finance, Economic Stabilization and National Policy',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Sri Lanka Ports Authority',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Ministry of Foreign Affairs',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => "President's Office",
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Department of Agriculture',
        ]);

    }
}
