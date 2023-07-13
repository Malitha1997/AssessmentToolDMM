<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovorganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('government_organizations')->insert([
            'user_id'=> 3,
            'gov_org_name' => 'Information and Communication Technology Agency',
            'organization_category' => 'Category A',
            'number_of_employee' => '150',
            'related_ministry' => 'Ministry A',
            'types_of_services_provide' => 'Service A',
            'districts_of_operations' => 'Districts A,B,C',
            'phone_number' => '0111234567',
            'availablity_of_IT_unit' => 'yes',
            'name_of_the_head' => 'Mr.ABC',
            'designation' => 'Head',
            'cdio_name' => 'Mr.DEF',
            'cdio_email' => 'cdio@info.lk',
            'cdio_contact_no' => '0711237895',
        ]);
    }
}
