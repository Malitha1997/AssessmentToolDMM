<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('operations')->insert([
            'govorganizationdetail_id'=> 1,
            'agile_change_management'=>'25',
            'integrated_service_management'=>'80',
            'real_time_insights'=>'13',
            'smart_process_management'=>'30'
        ]);
    }
}
