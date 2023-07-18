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
            'gov_org_name' => 'Sri Lanka Institute of Local Government',
        ]);

        DB::table('govorganizationnames')->insert([
            'gov_org_name' => 'Management Development Training Unit - North Province',
        ]);
    }
}
