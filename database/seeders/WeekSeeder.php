<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('weeks')->insert([
            'name' => 'Week 1',
            'start_at' => '2024-08-28 00:00:00',
            'is_active' => true,
            'max_picks' => 5,
            'payout' => 40000,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 2',
            'start_at' => '2024-09-04 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 3',
            'start_at' => '2024-09-11 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 4',
            'start_at' => '2024-09-18 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 5',
            'start_at' => '2024-09-25 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 6',
            'start_at' => '2024-10-02 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 7',
            'start_at' => '2024-10-09 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 8',
            'start_at' => '2024-10-16 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 9',
            'start_at' => '2024-10-23 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 10',
            'start_at' => '2024-10-30 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 11',
            'start_at' => '2024-11-06 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 12',
            'start_at' => '2024-11-13 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 13',
            'start_at' => '2024-11-20 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 14',
            'start_at' => '2024-11-27 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 15',
            'start_at' => '2024-12-04 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 16',
            'start_at' => '2024-12-11 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 17',
            'start_at' => '2024-12-18 00:00:00',
            'is_active' => false,
            'max_picks' => 5,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('weeks')->insert([
            'name' => 'Week 18',
            'start_at' => '2024-12-25 00:00:00',
            'is_active' => false,
            'max_picks' => 10,
            'payout' => 0,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
