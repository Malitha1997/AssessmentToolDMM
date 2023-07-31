<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('strategies')->insert([
            'govorganizationdetail_id'=> 1,
            'brand_management'=> '50',
            'ecosystem_management'=> '27',
            'finance'=> '48',
            'market_intelligence'=> '87',
            'strategic_management'=> '65',
            'buisiness_assuarance'=> '70',
            'policy'=> '32',
            'invention'=> '79'

        ]);
    }
}
