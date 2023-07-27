<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'govorganizationdetail_id'=> 1,
            'citizen_engagement'=>'50%',
            'citizen_experience'=>'25%',
            'citizen_experience_strategy'=>'75%',
            'citizen_insights'=>'40%',
            'citizen_trust'=>'60%'
        ]);
    }
}
