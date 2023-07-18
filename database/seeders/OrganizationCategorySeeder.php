<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizationcategories')->insert([
            'org_category' => 'Ministry',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Statutary Body',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Department',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'District Secretariat',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Provincial Councils',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Local Authority',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Divisional Secretariat',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Provincial Ministry',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Provincial Department',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Municipal Council',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Urban Council',
        ]);

        DB::table('organizationcategories')->insert([
            'org_category' => 'Pradeshiya Sabha',
        ]);

    }
}
