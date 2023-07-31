<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            'govorganizationdetail_id'=> 1,
            'emerging_technology'=> '87',
            'data_management'=>'13',
            'delivery_governance'=>'25',
            'connectivity'=>'50',
            'security'=>'25',
            'technology_architecture'=> '80',
            'data_governance'=>'13',
            'data_engineering'=>'20',
            'interoperbility'=>'50',
            'application_for_users'=>'50'
        ]);
    }
}
