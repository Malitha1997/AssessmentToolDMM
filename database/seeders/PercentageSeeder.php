<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PercentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('percentages')->insert([
            'govorganizationdetail_id'=> 1,
            'customer'=>'60%',
            'strategy'=>'45%',
            'technology'=>'40%',
            'operation'=>'75%',
            'culture'=>'89%'
        ]);
    }
}
