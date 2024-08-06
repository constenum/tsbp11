<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-08-31 19:00:00',
            'home_team_id' => '114',
            'home_spread' => '-36',
            'home_score' => '56',
            'away_team_id' => '49',
            'away_spread' => '36',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:03',
            'updated_at' => '2023-08-30 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-08-31 19:30:00',
            'home_team_id' => '116',
            'home_spread' => '15',
            'home_score' => '14',
            'away_team_id' => '73',
            'away_spread' => '-15',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:03',
            'updated_at' => '2023-08-30 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-08-31 20:00:00',
            'home_team_id' => '121',
            'home_spread' => '-4',
            'home_score' => '24',
            'away_team_id' => '30',
            'away_spread' => '4',
            'away_score' => '11',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:03',
            'updated_at' => '2023-08-30 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-08-31 20:00:00',
            'home_team_id' => '65',
            'home_spread' => '-7',
            'home_score' => '13',
            'away_team_id' => '69',
            'away_spread' => '7',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:03',
            'updated_at' => '2023-08-30 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-01 19:00:00',
            'home_team_id' => '62',
            'home_spread' => '-14',
            'home_score' => '31',
            'away_team_id' => '19',
            'away_spread' => '14',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-01 19:00:00',
            'home_team_id' => '60',
            'home_spread' => '-17',
            'home_score' => '38',
            'away_team_id' => '61',
            'away_spread' => '17',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-01 19:30:00',
            'home_team_id' => '37',
            'home_spread' => '8',
            'home_score' => '34',
            'away_team_id' => '55',
            'away_spread' => '-8',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-01 23:00:00',
            'home_team_id' => '38',
            'home_spread' => '4',
            'home_score' => '24',
            'away_team_id' => '100',
            'away_spread' => '-4',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '81',
            'home_spread' => '-35',
            'home_score' => '73',
            'away_team_id' => '8',
            'away_spread' => '35',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '50',
            'home_spread' => '-26',
            'home_score' => '44',
            'away_team_id' => '11',
            'away_spread' => '26',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '14',
            'home_spread' => '-8',
            'home_score' => '24',
            'away_team_id' => '76',
            'away_spread' => '8',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '51',
            'home_spread' => '-10',
            'home_score' => '34',
            'away_team_id' => '15',
            'away_spread' => '10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '102',
            'home_spread' => '-20',
            'home_score' => '42',
            'away_team_id' => '24',
            'away_spread' => '20',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '63',
            'home_spread' => '-36',
            'home_score' => '30',
            'away_team_id' => '27',
            'away_spread' => '36',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '89',
            'home_spread' => '-4',
            'home_score' => '35',
            'away_team_id' => '33',
            'away_spread' => '4',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '42',
            'home_spread' => '-24',
            'home_score' => '24',
            'away_team_id' => '120',
            'away_spread' => '24',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:00:00',
            'home_team_id' => '95',
            'home_spread' => '-20',
            'home_score' => '38',
            'away_team_id' => '53',
            'away_spread' => '20',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 12:01:00',
            'home_team_id' => '104',
            'home_spread' => '-27',
            'home_score' => '49',
            'away_team_id' => '125',
            'away_spread' => '27',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:04',
            'updated_at' => '2023-08-30 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 14:00:00',
            'home_team_id' => '103',
            'home_spread' => '-10',
            'home_score' => '24',
            'away_team_id' => '2',
            'away_spread' => '10',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:30:00',
            'home_team_id' => '128',
            'home_spread' => '-14',
            'home_score' => '56',
            'away_team_id' => '13',
            'away_spread' => '14',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:30:00',
            'home_team_id' => '133',
            'home_spread' => '-28',
            'home_score' => '38',
            'away_team_id' => '16',
            'away_spread' => '28',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:30:00',
            'home_team_id' => '106',
            'home_spread' => '-35',
            'home_score' => '37',
            'away_team_id' => '90',
            'away_spread' => '35',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:30:00',
            'home_team_id' => '131',
            'home_spread' => '-11',
            'home_score' => '41',
            'away_team_id' => '98',
            'away_spread' => '11',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:31:00',
            'home_team_id' => '10',
            'home_spread' => '-35',
            'home_score' => '59',
            'away_team_id' => '117',
            'away_spread' => '35',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 15:31:00',
            'home_team_id' => '41',
            'home_spread' => '31',
            'home_score' => '3',
            'away_team_id' => '80',
            'away_spread' => '-31',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 16:00:00',
            'home_team_id' => '75',
            'home_spread' => '7',
            'home_score' => '21',
            'away_team_id' => '18',
            'away_spread' => '-7',
            'away_score' => '58',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 18:30:00',
            'home_team_id' => '119',
            'home_spread' => '-38',
            'home_score' => '66',
            'away_team_id' => '70',
            'away_spread' => '38',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:00:00',
            'home_team_id' => '54',
            'home_spread' => '10',
            'home_score' => '17',
            'away_team_id' => '9',
            'away_spread' => '-10',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:00:00',
            'home_team_id' => '12',
            'home_spread' => '-28',
            'home_score' => '31',
            'away_team_id' => '107',
            'away_spread' => '28',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:00:00',
            'home_team_id' => '25',
            'home_spread' => '12',
            'home_score' => '24',
            'away_team_id' => '129',
            'away_spread' => '-12',
            'away_score' => '50',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:00:00',
            'home_team_id' => '39',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '123',
            'away_spread' => '-3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:01:00',
            'home_team_id' => '105',
            'home_spread' => '-38',
            'home_score' => '52',
            'away_team_id' => '71',
            'away_spread' => '38',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:30:00',
            'home_team_id' => '40',
            'home_spread' => '-10',
            'home_score' => '30',
            'away_team_id' => '109',
            'away_spread' => '10',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:30:00',
            'home_team_id' => '87',
            'home_spread' => '-20',
            'home_score' => '38',
            'away_team_id' => '130',
            'away_spread' => '20',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:05',
            'updated_at' => '2023-08-30 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:30:00',
            'home_team_id' => '134',
            'home_spread' => '15',
            'home_score' => '35',
            'away_team_id' => '108',
            'away_spread' => '-15',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:30:41',
            'home_team_id' => '74',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '97',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 19:31:00',
            'home_team_id' => '3',
            'home_spread' => '-39',
            'home_score' => '56',
            'away_team_id' => '64',
            'away_spread' => '39',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 20:00:00',
            'home_team_id' => '126',
            'home_spread' => '-16',
            'home_score' => '36',
            'away_team_id' => '83',
            'away_spread' => '16',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 20:00:00',
            'home_team_id' => '111',
            'home_spread' => '-6',
            'home_score' => '37',
            'away_team_id' => '96',
            'away_spread' => '6',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-02 22:30:00',
            'home_team_id' => '115',
            'home_spread' => '-15',
            'home_score' => '27',
            'away_team_id' => '23',
            'away_spread' => '15',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-03 12:00:00',
            'home_team_id' => '91',
            'home_spread' => '-7',
            'home_score' => '24',
            'away_team_id' => '77',
            'away_spread' => '7',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-03 15:30:00',
            'home_team_id' => '94',
            'home_spread' => '17',
            'home_score' => '17',
            'away_team_id' => '86',
            'away_spread' => '-17',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-03 19:30:41',
            'home_team_id' => '32',
            'home_spread' => '3',
            'home_score' => '45',
            'away_team_id' => '56',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '1',
            'start_at' => '2023-09-04 20:00:00',
            'home_team_id' => '26',
            'home_spread' => '14',
            'home_score' => '28',
            'away_team_id' => '22',
            'away_spread' => '-14',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-08-30 11:00:06',
            'updated_at' => '2023-08-30 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-08 19:29:00',
            'home_team_id' => '46',
            'home_spread' => '-3',
            'home_score' => '34',
            'away_team_id' => '40',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:03',
            'updated_at' => '2023-09-06 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 10:59:00',
            'home_team_id' => '127',
            'home_spread' => '-10',
            'home_score' => '36',
            'away_team_id' => '124',
            'away_spread' => '10',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:03',
            'updated_at' => '2023-09-06 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '34',
            'home_spread' => '-42',
            'home_score' => '45',
            'away_team_id' => '11',
            'away_spread' => '42',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:03',
            'updated_at' => '2023-09-06 11:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '12',
            'home_spread' => '8',
            'home_score' => '13',
            'away_team_id' => '121',
            'away_spread' => '-8',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '24',
            'home_spread' => '-3',
            'home_score' => '36',
            'away_team_id' => '69',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '125',
            'home_spread' => '6',
            'home_score' => '35',
            'away_team_id' => '45',
            'away_spread' => '-6',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '47',
            'home_spread' => '-17',
            'home_score' => '42',
            'away_team_id' => '110',
            'away_spread' => '17',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '73',
            'home_spread' => '8',
            'home_score' => '24',
            'away_team_id' => '78',
            'away_spread' => '-8',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 11:59:00',
            'home_team_id' => '126',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '89',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:29:00',
            'home_team_id' => '43',
            'home_spread' => '4',
            'home_score' => '13',
            'away_team_id' => '42',
            'away_spread' => '-4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:29:00',
            'home_team_id' => '60',
            'home_spread' => '5',
            'home_score' => '48',
            'away_team_id' => '105',
            'away_spread' => '-5',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:04',
            'updated_at' => '2023-09-06 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:29:00',
            'home_team_id' => '63',
            'home_spread' => '-36',
            'home_score' => '35',
            'away_team_id' => '118',
            'away_spread' => '36',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:29:00',
            'home_team_id' => '111',
            'home_spread' => '8',
            'home_score' => '20',
            'away_team_id' => '84',
            'away_spread' => '-8',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:29:00',
            'home_team_id' => '101',
            'home_spread' => '-24',
            'home_score' => '48',
            'away_team_id' => '132',
            'away_spread' => '24',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:30:00',
            'home_team_id' => '117',
            'home_spread' => '7',
            'home_score' => '28',
            'away_team_id' => '61',
            'away_spread' => '-7',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 15:30:00',
            'home_team_id' => '123',
            'home_spread' => '-12',
            'home_score' => '20',
            'away_team_id' => '107',
            'away_spread' => '12',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 16:00:00',
            'home_team_id' => '7',
            'home_spread' => '-37',
            'home_score' => '28',
            'away_team_id' => '49',
            'away_spread' => '37',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 16:00:00',
            'home_team_id' => '27',
            'home_spread' => '4',
            'home_score' => '13',
            'away_team_id' => '57',
            'away_spread' => '-4',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 16:59:00',
            'home_team_id' => '128',
            'home_spread' => '-34',
            'home_score' => '43',
            'away_team_id' => '112',
            'away_spread' => '34',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 17:14:00',
            'home_team_id' => '74',
            'home_spread' => '-18',
            'home_score' => '40',
            'away_team_id' => '4',
            'away_spread' => '18',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:05',
            'updated_at' => '2023-09-06 11:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 17:59:00',
            'home_team_id' => '81',
            'home_spread' => '-16',
            'home_score' => '28',
            'away_team_id' => '95',
            'away_spread' => '16',
            'away_score' => '11',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:00:00',
            'home_team_id' => '29',
            'home_spread' => '-4',
            'home_score' => '10',
            'away_team_id' => '79',
            'away_spread' => '4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:00:00',
            'home_team_id' => '35',
            'home_spread' => '-7',
            'home_score' => '49',
            'away_team_id' => '113',
            'away_spread' => '7',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:00:00',
            'home_team_id' => '51',
            'home_spread' => '-10',
            'home_score' => '33',
            'away_team_id' => '72',
            'away_spread' => '10',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:00:00',
            'home_team_id' => '83',
            'home_spread' => '7',
            'home_score' => '38',
            'away_team_id' => '52',
            'away_spread' => '-7',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:29:00',
            'home_team_id' => '88',
            'home_spread' => '-7',
            'home_score' => '21',
            'away_team_id' => '21',
            'away_spread' => '7',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:30:00',
            'home_team_id' => '31',
            'home_spread' => '13',
            'home_score' => '46',
            'away_team_id' => '75',
            'away_spread' => '-13',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:59:00',
            'home_team_id' => '3',
            'home_spread' => '-7',
            'home_score' => '24',
            'away_team_id' => '106',
            'away_spread' => '7',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:59:00',
            'home_team_id' => '13',
            'home_spread' => '4',
            'home_score' => '16',
            'away_team_id' => '114',
            'away_spread' => '-4',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 18:59:00',
            'home_team_id' => '108',
            'home_spread' => '7',
            'home_score' => '30',
            'away_team_id' => '85',
            'away_spread' => '-7',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:00:00',
            'home_team_id' => '8',
            'home_spread' => '22',
            'home_score' => '3',
            'away_team_id' => '59',
            'away_spread' => '-22',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:00:00',
            'home_team_id' => '36',
            'home_spread' => '-3',
            'home_score' => '35',
            'away_team_id' => '116',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:00:00',
            'home_team_id' => '90',
            'home_spread' => '10',
            'home_score' => '43',
            'away_team_id' => '39',
            'away_spread' => '-10',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:06',
            'updated_at' => '2023-09-06 11:00:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:00:00',
            'home_team_id' => '67',
            'home_spread' => '-21',
            'home_score' => '23',
            'away_team_id' => '64',
            'away_spread' => '21',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:29:00',
            'home_team_id' => '66',
            'home_spread' => '-9',
            'home_score' => '31',
            'away_team_id' => '6',
            'away_spread' => '9',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:29:00',
            'home_team_id' => '58',
            'home_spread' => '-24',
            'home_score' => '38',
            'away_team_id' => '20',
            'away_spread' => '24',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:29:00',
            'home_team_id' => '129',
            'home_spread' => '7',
            'home_score' => '31',
            'away_team_id' => '133',
            'away_spread' => '-7',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:30:00',
            'home_team_id' => '65',
            'home_spread' => '-21',
            'home_score' => '25',
            'away_team_id' => '28',
            'away_spread' => '21',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 19:30:00',
            'home_team_id' => '93',
            'home_spread' => '15',
            'home_score' => '10',
            'away_team_id' => '115',
            'away_spread' => '-15',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 20:30:00',
            'home_team_id' => '32',
            'home_spread' => '-31',
            'home_score' => '66',
            'away_team_id' => '99',
            'away_spread' => '31',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 22:29:00',
            'home_team_id' => '5',
            'home_spread' => '4',
            'home_score' => '27',
            'away_team_id' => '82',
            'away_spread' => '-4',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 22:29:00',
            'home_team_id' => '18',
            'home_spread' => '7',
            'home_score' => '10',
            'away_team_id' => '10',
            'away_spread' => '-7',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-09 22:29:00',
            'home_team_id' => '119',
            'home_spread' => '-29',
            'home_score' => '56',
            'away_team_id' => '100',
            'away_spread' => '29',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:07',
            'updated_at' => '2023-09-06 11:00:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-07 20:20:00',
            'home_team_id' => '150',
            'home_spread' => '-5',
            'home_score' => '20',
            'away_team_id' => '145',
            'away_spread' => '5',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:08',
            'updated_at' => '2023-09-06 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '166',
            'home_spread' => '-7',
            'home_score' => '20',
            'away_team_id' => '135',
            'away_spread' => '7',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:08',
            'updated_at' => '2023-09-06 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '136',
            'home_spread' => '-4',
            'home_score' => '24',
            'away_team_id' => '139',
            'away_spread' => '4',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:08',
            'updated_at' => '2023-09-06 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '137',
            'home_spread' => '-10',
            'home_score' => '25',
            'away_team_id' => '147',
            'away_spread' => '10',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:08',
            'updated_at' => '2023-09-06 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '142',
            'home_spread' => '3',
            'home_score' => '24',
            'away_team_id' => '141',
            'away_spread' => '-3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:08',
            'updated_at' => '2023-09-06 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '148',
            'home_spread' => '6',
            'home_score' => '21',
            'away_team_id' => '149',
            'away_spread' => '-6',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '155',
            'home_spread' => '-6',
            'home_score' => '17',
            'away_team_id' => '164',
            'away_spread' => '6',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '157',
            'home_spread' => '-3',
            'home_score' => '16',
            'away_team_id' => '165',
            'away_spread' => '3',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 13:00:00',
            'home_team_id' => '161',
            'home_spread' => '3',
            'home_score' => '7',
            'away_team_id' => '162',
            'away_spread' => '-3',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 16:25:00',
            'home_team_id' => '140',
            'home_spread' => '-1',
            'home_score' => '20',
            'away_team_id' => '146',
            'away_spread' => '1',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 16:25:00',
            'home_team_id' => '144',
            'home_spread' => '-4',
            'home_score' => '16',
            'away_team_id' => '151',
            'away_spread' => '4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 16:25:00',
            'home_team_id' => '152',
            'home_spread' => '-3',
            'home_score' => '34',
            'away_team_id' => '154',
            'away_spread' => '3',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 16:25:00',
            'home_team_id' => '163',
            'home_spread' => '-5',
            'home_score' => '13',
            'away_team_id' => '153',
            'away_spread' => '5',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 16:25:00',
            'home_team_id' => '156',
            'home_spread' => '4',
            'home_score' => '20',
            'away_team_id' => '160',
            'away_spread' => '-4',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-10 20:20:00',
            'home_team_id' => '158',
            'home_spread' => '4',
            'home_score' => '0',
            'away_team_id' => '143',
            'away_spread' => '-4',
            'away_score' => '40',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:09',
            'updated_at' => '2023-09-06 11:00:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '2',
            'start_at' => '2023-09-11 20:15:00',
            'home_team_id' => '159',
            'home_spread' => '3',
            'home_score' => '22',
            'away_team_id' => '138',
            'away_spread' => '-3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-06 11:00:10',
            'updated_at' => '2023-09-06 11:00:10',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-14 19:30:00',
            'home_team_id' => '59',
            'home_spread' => '-15',
            'home_score' => '28',
            'away_team_id' => '68',
            'away_spread' => '15',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-13 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-15 19:00:00',
            'home_team_id' => '123',
            'home_spread' => '-8',
            'home_score' => '29',
            'away_team_id' => '9',
            'away_spread' => '8',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-13 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-15 19:00:00',
            'home_team_id' => '58',
            'home_spread' => '-15',
            'home_score' => '42',
            'away_team_id' => '125',
            'away_spread' => '15',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-13 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-15 20:00:00',
            'home_team_id' => '1',
            'home_spread' => '-10',
            'home_score' => '39',
            'away_team_id' => '120',
            'away_spread' => '10',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-13 11:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '14',
            'home_spread' => '27',
            'home_score' => '29',
            'away_team_id' => '32',
            'away_spread' => '-27',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '16',
            'home_spread' => '4',
            'home_score' => '27',
            'away_team_id' => '51',
            'away_spread' => '-4',
            'away_score' => '55',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:40:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '133',
            'home_spread' => '-19',
            'home_score' => '35',
            'away_team_id' => '35',
            'away_spread' => '19',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:20:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '40',
            'home_spread' => '15',
            'home_score' => '13',
            'away_team_id' => '87',
            'away_spread' => '-15',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '41',
            'home_spread' => '11',
            'home_score' => '14',
            'away_team_id' => '55',
            'away_spread' => '-11',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '79',
            'home_spread' => '4',
            'home_score' => '10',
            'away_team_id' => '43',
            'away_spread' => '-4',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '67',
            'home_spread' => '6',
            'home_score' => '30',
            'away_team_id' => '47',
            'away_spread' => '-6',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:04',
            'updated_at' => '2023-09-16 15:35:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '66',
            'home_spread' => '10',
            'home_score' => '14',
            'away_team_id' => '56',
            'away_spread' => '-10',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 15:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 12:00:00',
            'home_team_id' => '83',
            'home_spread' => '14',
            'home_score' => '24',
            'away_team_id' => '127',
            'away_spread' => '-14',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 15:40:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 14:00:00',
            'home_team_id' => '28',
            'home_spread' => '-8',
            'home_score' => '19',
            'away_team_id' => '117',
            'away_spread' => '8',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 17:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 14:30:00',
            'home_team_id' => '78',
            'home_spread' => '-34',
            'home_score' => '41',
            'away_team_id' => '19',
            'away_spread' => '34',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 18:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '98',
            'home_spread' => '33',
            'home_score' => '3',
            'away_team_id' => '3',
            'away_spread' => '-33',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 20:00:12',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '4',
            'home_spread' => '-9',
            'home_score' => '43',
            'away_team_id' => '27',
            'away_spread' => '9',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 18:55:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '26',
            'home_spread' => '-18',
            'home_score' => '38',
            'away_team_id' => '77',
            'away_spread' => '18',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 18:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '116',
            'home_spread' => '-8',
            'home_score' => '17',
            'away_team_id' => '31',
            'away_spread' => '8',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 19:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '34',
            'home_spread' => '-28',
            'home_score' => '24',
            'away_team_id' => '97',
            'away_spread' => '28',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 18:55:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '42',
            'home_spread' => '-29',
            'home_score' => '41',
            'away_team_id' => '132',
            'away_spread' => '29',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 19:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '74',
            'home_spread' => '-7',
            'home_score' => '31',
            'away_team_id' => '65',
            'away_spread' => '7',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:05',
            'updated_at' => '2023-09-16 18:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '112',
            'home_spread' => '29',
            'home_score' => '17',
            'away_team_id' => '81',
            'away_spread' => '-29',
            'away_score' => '66',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 19:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '86',
            'home_spread' => '-19',
            'home_score' => '26',
            'away_team_id' => '93',
            'away_spread' => '19',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 18:45:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 15:30:00',
            'home_team_id' => '91',
            'home_spread' => '-7',
            'home_score' => '35',
            'away_team_id' => '126',
            'away_spread' => '7',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 19:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 16:00:00',
            'home_team_id' => '80',
            'home_spread' => '-28',
            'home_score' => '63',
            'away_team_id' => '131',
            'away_spread' => '28',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 19:30:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 16:00:00',
            'home_team_id' => '99',
            'home_spread' => '13',
            'home_score' => '3',
            'away_team_id' => '111',
            'away_spread' => '-13',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 19:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 16:00:00',
            'home_team_id' => '105',
            'home_spread' => '-36',
            'home_score' => '47',
            'away_team_id' => '54',
            'away_spread' => '36',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-17 22:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 17:00:00',
            'home_team_id' => '62',
            'home_spread' => '17',
            'home_score' => '7',
            'away_team_id' => '128',
            'away_spread' => '-17',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 20:45:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 18:00:00',
            'home_team_id' => '20',
            'home_spread' => '8',
            'home_score' => '25',
            'away_team_id' => '36',
            'away_spread' => '-8',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 21:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '21',
            'home_spread' => '-14',
            'home_score' => '24',
            'away_team_id' => '61',
            'away_spread' => '14',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 22:55:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '30',
            'home_spread' => '7',
            'home_score' => '29',
            'away_team_id' => '104',
            'away_spread' => '-7',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 22:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '110',
            'home_spread' => '-3',
            'home_score' => '14',
            'away_team_id' => '45',
            'away_spread' => '3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 22:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '113',
            'home_spread' => '-2',
            'home_score' => '21',
            'away_team_id' => '52',
            'away_spread' => '2',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-17 00:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '53',
            'home_spread' => '-5',
            'home_score' => '37',
            'away_team_id' => '75',
            'away_spread' => '5',
            'away_score' => '40',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 22:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '69',
            'home_spread' => '-11',
            'home_score' => '35',
            'away_team_id' => '76',
            'away_spread' => '11',
            'away_score' => '11',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:06',
            'updated_at' => '2023-09-16 22:35:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '82',
            'home_spread' => '-7',
            'home_score' => '7',
            'away_team_id' => '96',
            'away_spread' => '7',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 22:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '109',
            'home_spread' => '-8',
            'home_score' => '21',
            'away_team_id' => '94',
            'away_spread' => '8',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 22:25:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:00:00',
            'home_team_id' => '118',
            'home_spread' => '5',
            'home_score' => '40',
            'away_team_id' => '124',
            'away_spread' => '-5',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 22:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '50',
            'home_spread' => '-25',
            'home_score' => '35',
            'away_team_id' => '2',
            'away_spread' => '25',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 22:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '7',
            'home_spread' => '-8',
            'home_score' => '31',
            'away_team_id' => '17',
            'away_spread' => '8',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '63',
            'home_spread' => '-40',
            'home_score' => '31',
            'away_team_id' => '15',
            'away_spread' => '40',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 22:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '84',
            'home_spread' => '-19',
            'home_score' => '48',
            'away_team_id' => '37',
            'away_spread' => '19',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '130',
            'home_spread' => '2',
            'home_score' => '17',
            'away_team_id' => '88',
            'away_spread' => '-2',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 19:30:00',
            'home_team_id' => '89',
            'home_spread' => '3',
            'home_score' => '20',
            'away_team_id' => '101',
            'away_spread' => '-3',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 20:00:00',
            'home_team_id' => '22',
            'home_spread' => '-24',
            'home_score' => '48',
            'away_team_id' => '29',
            'away_spread' => '24',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 20:00:00',
            'home_team_id' => '85',
            'home_spread' => '-38',
            'home_score' => '55',
            'away_team_id' => '38',
            'away_spread' => '38',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 20:00:00',
            'home_team_id' => '39',
            'home_spread' => '8',
            'home_score' => '13',
            'away_team_id' => '102',
            'away_spread' => '-8',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 20:00:00',
            'home_team_id' => '71',
            'home_spread' => '-1',
            'home_score' => '17',
            'away_team_id' => '72',
            'away_spread' => '1',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:07',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 20:00:00',
            'home_team_id' => '106',
            'home_spread' => '-29',
            'home_score' => '31',
            'away_team_id' => '134',
            'away_spread' => '29',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-16 23:30:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 22:00:00',
            'home_team_id' => '24',
            'home_spread' => '-23',
            'home_score' => '43',
            'away_team_id' => '25',
            'away_spread' => '23',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-17 02:30:09',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 22:30:00',
            'home_team_id' => '5',
            'home_spread' => '3',
            'home_score' => '0',
            'away_team_id' => '33',
            'away_spread' => '-3',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-17 02:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 22:30:00',
            'home_team_id' => '70',
            'home_spread' => '29',
            'home_score' => '24',
            'away_team_id' => '46',
            'away_spread' => '-29',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-17 01:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-16 23:00:00',
            'home_team_id' => '6',
            'home_spread' => '-17',
            'home_score' => '31',
            'away_team_id' => '122',
            'away_spread' => '17',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-17 02:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-14 20:16:00',
            'home_team_id' => '160',
            'home_spread' => '-7',
            'home_score' => '34',
            'away_team_id' => '155',
            'away_spread' => '7',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:08',
            'updated_at' => '2023-09-13 11:00:08',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:00:00',
            'home_team_id' => '138',
            'home_spread' => '-9',
            'home_score' => '38',
            'away_team_id' => '151',
            'away_spread' => '9',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 15:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '136',
            'home_spread' => '2',
            'home_score' => '25',
            'away_team_id' => '146',
            'away_spread' => '-2',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '141',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '137',
            'away_spread' => '3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '164',
            'home_spread' => '-3',
            'home_score' => '27',
            'away_team_id' => '140',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '145',
            'home_spread' => '-6',
            'home_score' => '31',
            'away_team_id' => '163',
            'away_spread' => '6',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '2',
            'home_score' => '20',
            'away_team_id' => '148',
            'away_spread' => '-2',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:10:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '149',
            'home_spread' => '3',
            'home_score' => '9',
            'away_team_id' => '150',
            'away_spread' => '-3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 13:01:00',
            'home_team_id' => '165',
            'home_spread' => '3',
            'home_score' => '27',
            'away_team_id' => '152',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 16:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 16:06:00',
            'home_team_id' => '135',
            'home_spread' => '6',
            'home_score' => '28',
            'away_team_id' => '158',
            'away_spread' => '-6',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 19:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 16:06:00',
            'home_team_id' => '153',
            'home_spread' => '9',
            'home_score' => '23',
            'away_team_id' => '162',
            'away_spread' => '-9',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 19:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 16:26:00',
            'home_team_id' => '143',
            'home_spread' => '-9',
            'home_score' => '30',
            'away_team_id' => '159',
            'away_spread' => '9',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 19:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 16:26:00',
            'home_team_id' => '144',
            'home_spread' => '-4',
            'home_score' => '33',
            'away_team_id' => '166',
            'away_spread' => '4',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 19:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-17 20:21:00',
            'home_team_id' => '156',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '154',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-17 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-18 19:16:00',
            'home_team_id' => '139',
            'home_spread' => '4',
            'home_score' => '17',
            'away_team_id' => '157',
            'away_spread' => '-4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-18 22:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '3',
            'start_at' => '2023-09-18 20:16:00',
            'home_team_id' => '161',
            'home_spread' => '3',
            'home_score' => '26',
            'away_team_id' => '142',
            'away_spread' => '-3',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-13 11:00:09',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-21 19:30:00',
            'home_team_id' => '23',
            'home_spread' => '-6',
            'home_score' => '17',
            'away_team_id' => '36',
            'away_spread' => '6',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-21 23:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-22 19:00:00',
            'home_team_id' => '89',
            'home_spread' => '6',
            'home_score' => '17',
            'away_team_id' => '133',
            'away_spread' => '-6',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-22 22:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-22 19:30:00',
            'home_team_id' => '125',
            'home_spread' => '10',
            'home_score' => '21',
            'away_team_id' => '73',
            'away_spread' => '-10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-23 18:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-22 22:30:00',
            'home_team_id' => '94',
            'home_spread' => '4',
            'home_score' => '20',
            'away_team_id' => '1',
            'away_spread' => '-4',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-23 01:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-22 22:30:00',
            'home_team_id' => '93',
            'home_spread' => '7',
            'home_score' => '31',
            'away_team_id' => '13',
            'away_spread' => '-7',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-23 01:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '101',
            'home_spread' => '-14',
            'home_score' => '29',
            'away_team_id' => '9',
            'away_spread' => '14',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:03',
            'updated_at' => '2023-09-23 15:15:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '105',
            'home_spread' => '-8',
            'home_score' => '27',
            'away_team_id' => '10',
            'away_spread' => '8',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:40:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '21',
            'home_spread' => '15',
            'home_score' => '6',
            'away_team_id' => '81',
            'away_spread' => '-15',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '22',
            'home_spread' => '3',
            'home_score' => '24',
            'away_team_id' => '32',
            'away_spread' => '-3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:40:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '124',
            'home_spread' => '14',
            'home_score' => '28',
            'away_team_id' => '50',
            'away_spread' => '-14',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '57',
            'home_spread' => '-5',
            'home_score' => '24',
            'away_team_id' => '126',
            'away_spread' => '5',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '63',
            'home_spread' => '-24',
            'home_score' => '31',
            'away_team_id' => '91',
            'away_spread' => '24',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 14:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '76',
            'home_spread' => '-4',
            'home_score' => '14',
            'away_team_id' => '112',
            'away_spread' => '4',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:20:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '102',
            'home_spread' => '-7',
            'home_score' => '34',
            'away_team_id' => '95',
            'away_spread' => '7',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:15:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 12:00:00',
            'home_team_id' => '110',
            'home_spread' => '-4',
            'home_score' => '27',
            'away_team_id' => '131',
            'away_spread' => '4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 15:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 13:30:00',
            'home_team_id' => '109',
            'home_spread' => '-21',
            'home_score' => '49',
            'away_team_id' => '132',
            'away_spread' => '21',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 17:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 14:00:00',
            'home_team_id' => '11',
            'home_spread' => '7',
            'home_score' => '3',
            'away_team_id' => '35',
            'away_spread' => '-7',
            'away_score' => '40',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 17:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '3',
            'home_spread' => '-7',
            'home_score' => '24',
            'away_team_id' => '84',
            'away_spread' => '7',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '46',
            'home_spread' => '-9',
            'home_score' => '38',
            'away_team_id' => '17',
            'away_spread' => '9',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 18:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '55',
            'home_spread' => '-14',
            'home_score' => '56',
            'away_team_id' => '14',
            'away_spread' => '14',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '15',
            'home_spread' => '14',
            'home_score' => '7',
            'away_team_id' => '79',
            'away_spread' => '-14',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 18:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '85',
            'home_spread' => '-21',
            'home_score' => '42',
            'away_team_id' => '24',
            'away_spread' => '21',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:04',
            'updated_at' => '2023-09-23 19:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '116',
            'home_spread' => '22',
            'home_score' => '7',
            'away_team_id' => '26',
            'away_spread' => '-22',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 18:50:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '40',
            'home_spread' => '-15',
            'home_score' => '23',
            'away_team_id' => '29',
            'away_spread' => '15',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '69',
            'home_spread' => '-20',
            'home_score' => '28',
            'away_team_id' => '53',
            'away_spread' => '20',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '62',
            'home_spread' => '8',
            'home_score' => '9',
            'away_team_id' => '58',
            'away_spread' => '-8',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '103',
            'home_spread' => '24',
            'home_score' => '7',
            'away_team_id' => '60',
            'away_spread' => '-24',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 23:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '117',
            'home_spread' => '-4',
            'home_score' => '31',
            'away_team_id' => '71',
            'away_spread' => '4',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 18:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '130',
            'home_spread' => '7',
            'home_score' => '20',
            'away_team_id' => '108',
            'away_spread' => '-7',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:10:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 15:30:00',
            'home_team_id' => '121',
            'home_spread' => '-4',
            'home_score' => '14',
            'away_team_id' => '115',
            'away_spread' => '4',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 18:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 16:00:00',
            'home_team_id' => '43',
            'home_spread' => '-4',
            'home_score' => '34',
            'away_team_id' => '82',
            'away_spread' => '4',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:35:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 16:00:00',
            'home_team_id' => '98',
            'home_spread' => '3',
            'home_score' => '42',
            'away_team_id' => '90',
            'away_spread' => '-3',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 16:00:00',
            'home_team_id' => '104',
            'home_spread' => '-21',
            'home_score' => '45',
            'away_team_id' => '123',
            'away_spread' => '21',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 19:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 17:00:00',
            'home_team_id' => '96',
            'home_spread' => '-15',
            'home_score' => '30',
            'away_team_id' => '19',
            'away_spread' => '15',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 20:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 18:30:00',
            'home_team_id' => '31',
            'home_spread' => '11',
            'home_score' => '6',
            'away_team_id' => '51',
            'away_spread' => '-11',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 21:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 18:30:00',
            'home_team_id' => '127',
            'home_spread' => '-4',
            'home_score' => '16',
            'away_team_id' => '37',
            'away_spread' => '4',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '134',
            'home_spread' => '-3',
            'home_score' => '22',
            'away_team_id' => '4',
            'away_spread' => '3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '100',
            'home_spread' => '13',
            'home_score' => '20',
            'away_team_id' => '6',
            'away_spread' => '-13',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '56',
            'home_spread' => '-18',
            'home_score' => '34',
            'away_team_id' => '7',
            'away_spread' => '18',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '30',
            'home_spread' => '-28',
            'home_score' => '22',
            'away_team_id' => '20',
            'away_spread' => '28',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '64',
            'home_spread' => '-3',
            'home_score' => '23',
            'away_team_id' => '25',
            'away_spread' => '3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:25:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '107',
            'home_spread' => '-17',
            'home_score' => '35',
            'away_team_id' => '70',
            'away_spread' => '17',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:00:00',
            'home_team_id' => '129',
            'home_spread' => '3',
            'home_score' => '38',
            'away_team_id' => '86',
            'away_spread' => '-3',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '41',
            'home_spread' => '-16',
            'home_score' => '29',
            'away_team_id' => '2',
            'away_spread' => '16',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 23:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '12',
            'home_spread' => '15',
            'home_score' => '6',
            'away_team_id' => '106',
            'away_spread' => '-15',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:05',
            'updated_at' => '2023-09-23 22:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '34',
            'home_spread' => '-42',
            'home_score' => '49',
            'away_team_id' => '113',
            'away_spread' => '42',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '87',
            'home_spread' => '-15',
            'home_score' => '31',
            'away_team_id' => '42',
            'away_spread' => '15',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 22:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '67',
            'home_spread' => '-6',
            'home_score' => '34',
            'away_team_id' => '59',
            'away_spread' => '6',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '77',
            'home_spread' => '12',
            'home_score' => '37',
            'away_team_id' => '65',
            'away_spread' => '-12',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '97',
            'home_spread' => '-7',
            'home_score' => '37',
            'away_team_id' => '66',
            'away_spread' => '7',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 19:30:00',
            'home_team_id' => '78',
            'home_spread' => '4',
            'home_score' => '14',
            'away_team_id' => '80',
            'away_spread' => '-4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 22:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 20:00:00',
            'home_team_id' => '120',
            'home_spread' => '7',
            'home_score' => '38',
            'away_team_id' => '45',
            'away_spread' => '-7',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 20:00:00',
            'home_team_id' => '47',
            'home_spread' => '-5',
            'home_score' => '44',
            'away_team_id' => '114',
            'away_spread' => '5',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 20:00:00',
            'home_team_id' => '88',
            'home_spread' => '8',
            'home_score' => '24',
            'away_team_id' => '74',
            'away_spread' => '-8',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-23 23:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 21:00:00',
            'home_team_id' => '122',
            'home_spread' => '3',
            'home_score' => '28',
            'away_team_id' => '118',
            'away_spread' => '-3',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 00:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 22:30:00',
            'home_team_id' => '5',
            'home_spread' => '36',
            'home_score' => '28',
            'away_team_id' => '119',
            'away_spread' => '-36',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 02:15:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 22:30:00',
            'home_team_id' => '128',
            'home_spread' => '-21',
            'home_score' => '59',
            'away_team_id' => '18',
            'away_spread' => '21',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 02:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-23 22:30:00',
            'home_team_id' => '33',
            'home_spread' => '-28',
            'home_score' => '53',
            'away_team_id' => '49',
            'away_spread' => '28',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 01:35:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-21 20:15:00',
            'home_team_id' => '162',
            'home_spread' => '-10',
            'home_score' => '30',
            'away_team_id' => '158',
            'away_spread' => '10',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-21 23:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '145',
            'home_spread' => '-3',
            'home_score' => '20',
            'away_team_id' => '136',
            'away_spread' => '3',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 15:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '137',
            'home_spread' => '-8',
            'home_score' => '19',
            'away_team_id' => '148',
            'away_spread' => '8',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 16:30:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '166',
            'home_spread' => '7',
            'home_score' => '3',
            'away_team_id' => '138',
            'away_spread' => '-7',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:06',
            'updated_at' => '2023-09-24 15:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '154',
            'home_spread' => '-6',
            'home_score' => '70',
            'away_team_id' => '144',
            'away_spread' => '6',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '146',
            'home_spread' => '-2',
            'home_score' => '18',
            'away_team_id' => '157',
            'away_spread' => '2',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '149',
            'home_spread' => '-9',
            'home_score' => '17',
            'away_team_id' => '147',
            'away_spread' => '9',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 16:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '155',
            'home_spread' => '-1',
            'home_score' => '24',
            'away_team_id' => '152',
            'away_spread' => '1',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:00:00',
            'home_team_id' => '159',
            'home_spread' => '3',
            'home_score' => '10',
            'away_team_id' => '156',
            'away_spread' => '-3',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 13:01:00',
            'home_team_id' => '142',
            'home_spread' => '-3',
            'home_score' => '27',
            'away_team_id' => '165',
            'away_spread' => '3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 15:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 16:05:00',
            'home_team_id' => '163',
            'home_spread' => '-6',
            'home_score' => '37',
            'away_team_id' => '139',
            'away_spread' => '6',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 19:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 16:25:00',
            'home_team_id' => '135',
            'home_spread' => '13',
            'home_score' => '28',
            'away_team_id' => '143',
            'away_spread' => '-13',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 19:23:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 16:25:00',
            'home_team_id' => '150',
            'home_spread' => '-13',
            'home_score' => '41',
            'away_team_id' => '140',
            'away_spread' => '13',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 19:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-24 20:20:00',
            'home_team_id' => '151',
            'home_spread' => '-3',
            'home_score' => '18',
            'away_team_id' => '161',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-24 23:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-25 19:15:00',
            'home_team_id' => '164',
            'home_spread' => '6',
            'home_score' => '11',
            'away_team_id' => '160',
            'away_spread' => '-6',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-25 22:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '4',
            'start_at' => '2023-09-25 20:15:00',
            'home_team_id' => '141',
            'home_spread' => '-2',
            'home_score' => '19',
            'away_team_id' => '153',
            'away_spread' => '2',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-20 11:00:07',
            'updated_at' => '2023-09-25 23:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-28 19:30:00',
            'home_team_id' => '131',
            'home_spread' => '-6',
            'home_score' => '31',
            'away_team_id' => '64',
            'away_spread' => '6',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:03',
            'updated_at' => '2023-09-28 23:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-28 19:30:00',
            'home_team_id' => '112',
            'home_spread' => '-3',
            'home_score' => '48',
            'away_team_id' => '103',
            'away_spread' => '3',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:03',
            'updated_at' => '2023-09-28 23:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-29 21:00:00',
            'home_team_id' => '122',
            'home_spread' => '-1',
            'home_score' => '10',
            'away_team_id' => '53',
            'away_spread' => '1',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 00:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-29 21:00:00',
            'home_team_id' => '86',
            'home_spread' => '-3',
            'home_score' => '21',
            'away_team_id' => '121',
            'away_spread' => '3',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 00:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-29 22:15:00',
            'home_team_id' => '17',
            'home_spread' => '3',
            'home_score' => '35',
            'away_team_id' => '21',
            'away_spread' => '-3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 01:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '2',
            'home_spread' => '-3',
            'home_score' => '10',
            'away_team_id' => '16',
            'away_spread' => '3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '7',
            'home_spread' => '7',
            'home_score' => '22',
            'away_team_id' => '105',
            'away_spread' => '-7',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '101',
            'home_spread' => '7',
            'home_score' => '14',
            'away_team_id' => '22',
            'away_spread' => '-7',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:31:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '24',
            'home_spread' => '23',
            'home_score' => '41',
            'away_team_id' => '119',
            'away_spread' => '-23',
            'away_score' => '48',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '50',
            'home_spread' => '-1',
            'home_score' => '33',
            'away_team_id' => '30',
            'away_spread' => '1',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:15:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '45',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '96',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:47:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '77',
            'home_spread' => '28',
            'home_score' => '13',
            'away_team_id' => '87',
            'away_spread' => '-28',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '111',
            'home_spread' => '-21',
            'home_score' => '35',
            'away_team_id' => '113',
            'away_spread' => '21',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 12:00:00',
            'home_team_id' => '116',
            'home_spread' => '7',
            'home_score' => '33',
            'away_team_id' => '120',
            'away_spread' => '-7',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 15:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 13:30:00',
            'home_team_id' => '19',
            'home_spread' => '-8',
            'home_score' => '26',
            'away_team_id' => '28',
            'away_spread' => '8',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 16:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 14:00:00',
            'home_team_id' => '14',
            'home_spread' => '-3',
            'home_score' => '27',
            'away_team_id' => '125',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 17:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 14:30:00',
            'home_team_id' => '49',
            'home_spread' => '15',
            'home_score' => '3',
            'away_team_id' => '61',
            'away_spread' => '-15',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 17:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:00:00',
            'home_team_id' => '18',
            'home_spread' => '-12',
            'home_score' => '24',
            'away_team_id' => '5',
            'away_spread' => '12',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 18:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '117',
            'home_spread' => '-1',
            'home_score' => '28',
            'away_team_id' => '8',
            'away_spread' => '1',
            'away_score' => '52',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:04',
            'updated_at' => '2023-09-30 18:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '10',
            'home_spread' => '16',
            'home_score' => '20',
            'away_team_id' => '34',
            'away_spread' => '-16',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '132',
            'home_spread' => '-1',
            'home_score' => '42',
            'away_team_id' => '11',
            'away_spread' => '1',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '114',
            'home_spread' => '-12',
            'home_score' => '35',
            'away_team_id' => '12',
            'away_spread' => '12',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '37',
            'home_spread' => '-22',
            'home_score' => '27',
            'away_team_id' => '15',
            'away_spread' => '22',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '108',
            'home_spread' => '-8',
            'home_score' => '49',
            'away_team_id' => '39',
            'away_spread' => '8',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '89',
            'home_spread' => '-1',
            'home_score' => '44',
            'away_team_id' => '40',
            'away_spread' => '1',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '58',
            'home_spread' => '-14',
            'home_score' => '44',
            'away_team_id' => '41',
            'away_spread' => '14',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '106',
            'home_spread' => '-17',
            'home_score' => '40',
            'away_team_id' => '46',
            'away_spread' => '17',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:47:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '57',
            'home_spread' => '-14',
            'home_score' => '41',
            'away_team_id' => '83',
            'away_spread' => '14',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '69',
            'home_spread' => '18',
            'home_score' => '7',
            'away_team_id' => '63',
            'away_spread' => '-18',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '68',
            'home_spread' => '-4',
            'home_score' => '30',
            'away_team_id' => '98',
            'away_spread' => '4',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 18:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 15:30:00',
            'home_team_id' => '109',
            'home_spread' => '-13',
            'home_score' => '35',
            'away_team_id' => '76',
            'away_spread' => '13',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:01:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 16:00:00',
            'home_team_id' => '59',
            'home_spread' => '-4',
            'home_score' => '35',
            'away_team_id' => '13',
            'away_spread' => '4',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 16:00:00',
            'home_team_id' => '124',
            'home_spread' => '14',
            'home_score' => '21',
            'away_team_id' => '67',
            'away_spread' => '-14',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 16:00:00',
            'home_team_id' => '134',
            'home_spread' => '-14',
            'home_score' => '35',
            'away_team_id' => '71',
            'away_spread' => '14',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 19:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 18:00:00',
            'home_team_id' => '84',
            'home_spread' => '3',
            'home_score' => '55',
            'away_team_id' => '56',
            'away_spread' => '-3',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 21:51:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 18:30:00',
            'home_team_id' => '100',
            'home_spread' => '28',
            'home_score' => '6',
            'away_team_id' => '85',
            'away_spread' => '-28',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:05',
            'updated_at' => '2023-09-30 21:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:00:00',
            'home_team_id' => '35',
            'home_spread' => '-6',
            'home_score' => '38',
            'away_team_id' => '23',
            'away_spread' => '6',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 22:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:00:00',
            'home_team_id' => '90',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '27',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 22:44:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:00:00',
            'home_team_id' => '36',
            'home_spread' => '-1',
            'home_score' => '7',
            'away_team_id' => '110',
            'away_spread' => '1',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 22:07:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:00:00',
            'home_team_id' => '81',
            'home_spread' => '-19',
            'home_score' => '50',
            'away_team_id' => '43',
            'away_spread' => '19',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 22:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:30:00',
            'home_team_id' => '95',
            'home_spread' => '-24',
            'home_score' => '34',
            'away_team_id' => '20',
            'away_spread' => '24',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:30:00',
            'home_team_id' => '26',
            'home_spread' => '6',
            'home_score' => '14',
            'away_team_id' => '78',
            'away_spread' => '-6',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:30:00',
            'home_team_id' => '42',
            'home_spread' => '-12',
            'home_score' => '26',
            'away_team_id' => '62',
            'away_spread' => '12',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 19:30:00',
            'home_team_id' => '104',
            'home_spread' => '-12',
            'home_score' => '41',
            'away_team_id' => '97',
            'away_spread' => '12',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 20:00:00',
            'home_team_id' => '1',
            'home_spread' => '-10',
            'home_score' => '49',
            'away_team_id' => '93',
            'away_spread' => '10',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 22:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 20:00:00',
            'home_team_id' => '126',
            'home_spread' => '3',
            'home_score' => '38',
            'away_team_id' => '88',
            'away_spread' => '-3',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:28:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 20:00:00',
            'home_team_id' => '102',
            'home_spread' => '-12',
            'home_score' => '21',
            'away_team_id' => '130',
            'away_spread' => '12',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-09-30 23:49:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 21:00:00',
            'home_team_id' => '66',
            'home_spread' => '16',
            'home_score' => '17',
            'away_team_id' => '3',
            'away_spread' => '-16',
            'away_score' => '40',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-10-01 00:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 22:00:00',
            'home_team_id' => '6',
            'home_spread' => '19',
            'home_score' => '24',
            'away_team_id' => '128',
            'away_spread' => '-19',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-10-01 01:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-30 22:30:00',
            'home_team_id' => '33',
            'home_spread' => '-25',
            'home_score' => '27',
            'away_team_id' => '70',
            'away_spread' => '25',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:06',
            'updated_at' => '2023-10-01 02:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-09-28 20:15:00',
            'home_team_id' => '146',
            'home_spread' => '2',
            'home_score' => '20',
            'away_team_id' => '145',
            'away_spread' => '-2',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-09-28 23:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 09:30:00',
            'home_team_id' => '149',
            'home_spread' => '-3',
            'home_score' => '23',
            'away_team_id' => '136',
            'away_spread' => '3',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 12:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:00:00',
            'home_team_id' => '142',
            'home_spread' => '-2',
            'home_score' => '3',
            'away_team_id' => '137',
            'away_spread' => '2',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:00:00',
            'home_team_id' => '138',
            'home_spread' => '-3',
            'home_score' => '48',
            'away_team_id' => '154',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '139',
            'home_spread' => '4',
            'home_score' => '13',
            'away_team_id' => '155',
            'away_spread' => '-4',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 15:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '140',
            'home_spread' => '4',
            'home_score' => '28',
            'away_team_id' => '144',
            'away_spread' => '-4',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 15:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '165',
            'home_spread' => '3',
            'home_score' => '27',
            'away_team_id' => '141',
            'away_spread' => '-3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 15:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '3',
            'home_score' => '30',
            'away_team_id' => '161',
            'away_spread' => '-3',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '148',
            'home_spread' => '-1',
            'home_score' => '23',
            'away_team_id' => '153',
            'away_spread' => '1',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '157',
            'home_spread' => '-3',
            'home_score' => '9',
            'away_team_id' => '164',
            'away_spread' => '3',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 13:01:00',
            'home_team_id' => '160',
            'home_spread' => '-8',
            'home_score' => '34',
            'away_team_id' => '166',
            'away_spread' => '8',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 16:06:00',
            'home_team_id' => '152',
            'home_spread' => '-5',
            'home_score' => '24',
            'away_team_id' => '151',
            'away_spread' => '5',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 19:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 16:25:00',
            'home_team_id' => '162',
            'home_spread' => '-14',
            'home_score' => '35',
            'away_team_id' => '135',
            'away_spread' => '14',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 19:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 16:25:00',
            'home_team_id' => '143',
            'home_spread' => '-7',
            'home_score' => '38',
            'away_team_id' => '156',
            'away_spread' => '7',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 19:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-01 20:20:00',
            'home_team_id' => '159',
            'home_spread' => '10',
            'home_score' => '20',
            'away_team_id' => '150',
            'away_spread' => '-10',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-01 23:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '5',
            'start_at' => '2023-10-02 20:15:00',
            'home_team_id' => '158',
            'home_spread' => '-1',
            'home_score' => '3',
            'away_team_id' => '163',
            'away_spread' => '1',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-09-27 11:00:07',
            'updated_at' => '2023-10-02 23:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-04 21:00:00',
            'home_team_id' => '72',
            'home_spread' => '-6',
            'home_score' => '34',
            'away_team_id' => '31',
            'away_spread' => '6',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:03',
            'updated_at' => '2023-10-05 00:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-05 20:00:00',
            'home_team_id' => '53',
            'home_spread' => '7',
            'home_score' => '28',
            'away_team_id' => '131',
            'away_spread' => '-7',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-05 23:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-06 19:30:00',
            'home_team_id' => '82',
            'home_spread' => '12',
            'home_score' => '29',
            'away_team_id' => '47',
            'away_spread' => '-12',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-06 23:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-06 20:00:00',
            'home_team_id' => '40',
            'home_spread' => '-3',
            'home_score' => '7',
            'away_team_id' => '69',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-06 23:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '9',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '14',
            'away_spread' => '3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:10:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '67',
            'home_spread' => '7',
            'home_score' => '39',
            'away_team_id' => '56',
            'away_spread' => '-7',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '80',
            'home_spread' => '-19',
            'home_score' => '37',
            'away_team_id' => '58',
            'away_spread' => '19',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '66',
            'home_spread' => '-20',
            'home_score' => '41',
            'away_team_id' => '132',
            'away_spread' => '20',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '106',
            'home_spread' => '-6',
            'home_score' => '30',
            'away_team_id' => '81',
            'away_spread' => '6',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '133',
            'home_spread' => '-14',
            'home_score' => '24',
            'away_team_id' => '91',
            'away_spread' => '14',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 12:00:00',
            'home_team_id' => '117',
            'home_spread' => '20',
            'home_score' => '24',
            'away_team_id' => '109',
            'away_spread' => '-20',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 15:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 14:00:00',
            'home_team_id' => '16',
            'home_spread' => '4',
            'home_score' => '37',
            'away_team_id' => '19',
            'away_spread' => '-4',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 17:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 14:00:00',
            'home_team_id' => '103',
            'home_spread' => '14',
            'home_score' => '34',
            'away_team_id' => '123',
            'away_spread' => '-14',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 17:44:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:00:00',
            'home_team_id' => '115',
            'home_spread' => '-4',
            'home_score' => '25',
            'away_team_id' => '129',
            'away_spread' => '4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 18:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '2',
            'home_spread' => '7',
            'home_score' => '14',
            'away_team_id' => '76',
            'away_spread' => '-7',
            'away_score' => '55',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 18:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '105',
            'home_spread' => '3',
            'home_score' => '20',
            'away_team_id' => '3',
            'away_spread' => '-3',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 18:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '28',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '11',
            'away_spread' => '3',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 18:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '61',
            'home_spread' => '-10',
            'home_score' => '27',
            'away_team_id' => '15',
            'away_spread' => '10',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:04',
            'updated_at' => '2023-10-07 18:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '22',
            'home_spread' => '-21',
            'home_score' => '17',
            'away_team_id' => '127',
            'away_spread' => '21',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 18:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '32',
            'home_spread' => '-24',
            'home_score' => '39',
            'away_team_id' => '126',
            'away_spread' => '24',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 19:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '42',
            'home_spread' => '-2',
            'home_score' => '20',
            'away_team_id' => '89',
            'away_spread' => '2',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 18:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '79',
            'home_spread' => '-26',
            'home_score' => '42',
            'away_team_id' => '49',
            'away_spread' => '26',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 18:38:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '68',
            'home_spread' => '-6',
            'home_score' => '27',
            'away_team_id' => '75',
            'away_spread' => '6',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 18:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 15:30:00',
            'home_team_id' => '74',
            'home_spread' => '-8',
            'home_score' => '40',
            'away_team_id' => '101',
            'away_spread' => '8',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 18:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 16:00:00',
            'home_team_id' => '110',
            'home_spread' => '-16',
            'home_score' => '37',
            'away_team_id' => '8',
            'away_spread' => '16',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 19:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 16:00:00',
            'home_team_id' => '30',
            'home_spread' => '-18',
            'home_score' => '38',
            'away_team_id' => '124',
            'away_spread' => '18',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 19:19:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 16:00:00',
            'home_team_id' => '46',
            'home_spread' => '-2',
            'home_score' => '51',
            'away_team_id' => '114',
            'away_spread' => '2',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 19:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 16:00:00',
            'home_team_id' => '113',
            'home_spread' => '4',
            'home_score' => '56',
            'away_team_id' => '98',
            'away_spread' => '-4',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 20:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 17:00:00',
            'home_team_id' => '90',
            'home_spread' => '-9',
            'home_score' => '31',
            'away_team_id' => '116',
            'away_spread' => '9',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 20:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 18:00:00',
            'home_team_id' => '29',
            'home_spread' => '-4',
            'home_score' => '20',
            'away_team_id' => '112',
            'away_spread' => '4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 21:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 18:30:00',
            'home_team_id' => '5',
            'home_spread' => '5',
            'home_score' => '24',
            'away_team_id' => '24',
            'away_spread' => '-5',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 22:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 19:00:00',
            'home_team_id' => '34',
            'home_spread' => '-15',
            'home_score' => '51',
            'away_team_id' => '50',
            'away_spread' => '15',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 22:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 19:30:00',
            'home_team_id' => '84',
            'home_spread' => '-11',
            'home_score' => '27',
            'away_team_id' => '7',
            'away_spread' => '11',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 22:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 19:30:00',
            'home_team_id' => '55',
            'home_spread' => '7',
            'home_score' => '33',
            'away_team_id' => '78',
            'away_spread' => '-7',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 23:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 19:30:00',
            'home_team_id' => '65',
            'home_spread' => '20',
            'home_score' => '10',
            'away_team_id' => '63',
            'away_spread' => '-20',
            'away_score' => '52',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 22:46:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 20:00:00',
            'home_team_id' => '12',
            'home_spread' => '1',
            'home_score' => '14',
            'away_team_id' => '108',
            'away_spread' => '-1',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 23:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 20:00:00',
            'home_team_id' => '13',
            'home_spread' => '-9',
            'home_score' => '35',
            'away_team_id' => '94',
            'away_spread' => '9',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 23:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 20:00:00',
            'home_team_id' => '120',
            'home_spread' => '3',
            'home_score' => '44',
            'away_team_id' => '25',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:05',
            'updated_at' => '2023-10-07 23:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 20:00:00',
            'home_team_id' => '134',
            'home_spread' => '7',
            'home_score' => '24',
            'away_team_id' => '33',
            'away_spread' => '-7',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-07 23:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 20:00:00',
            'home_team_id' => '43',
            'home_spread' => '7',
            'home_score' => '27',
            'away_team_id' => '102',
            'away_spread' => '-7',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-07 23:10:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 22:00:00',
            'home_team_id' => '18',
            'home_spread' => '10',
            'home_score' => '40',
            'away_team_id' => '86',
            'away_spread' => '-10',
            'away_score' => '52',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 01:20:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-07 22:30:00',
            'home_team_id' => '119',
            'home_spread' => '-22',
            'home_score' => '43',
            'away_team_id' => '6',
            'away_spread' => '22',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 02:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-05 20:15:00',
            'home_team_id' => '166',
            'home_spread' => '-6',
            'home_score' => '20',
            'away_team_id' => '140',
            'away_spread' => '6',
            'away_score' => '40',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-05 23:24:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 09:30:00',
            'home_team_id' => '138',
            'home_spread' => '-6',
            'home_score' => '20',
            'away_team_id' => '149',
            'away_spread' => '6',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 12:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '136',
            'home_spread' => '-2',
            'home_score' => '21',
            'away_team_id' => '147',
            'away_spread' => '2',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '161',
            'home_spread' => '4',
            'home_score' => '17',
            'away_team_id' => '137',
            'away_spread' => '-4',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '145',
            'home_spread' => '-10',
            'home_score' => '42',
            'away_team_id' => '139',
            'away_spread' => '10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 16:11:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '148',
            'home_spread' => '2',
            'home_score' => '23',
            'away_team_id' => '165',
            'away_spread' => '-2',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 15:55:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '154',
            'home_spread' => '-11',
            'home_score' => '31',
            'away_team_id' => '158',
            'away_spread' => '11',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:06',
            'updated_at' => '2023-10-08 16:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 13:00:00',
            'home_team_id' => '156',
            'home_spread' => '1',
            'home_score' => '0',
            'away_team_id' => '157',
            'away_spread' => '-1',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 15:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 16:05:00',
            'home_team_id' => '135',
            'home_spread' => '3',
            'home_score' => '20',
            'away_team_id' => '141',
            'away_spread' => '-3',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 19:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 16:05:00',
            'home_team_id' => '153',
            'home_spread' => '5',
            'home_score' => '14',
            'away_team_id' => '160',
            'away_spread' => '-5',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 19:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 16:26:00',
            'home_team_id' => '144',
            'home_spread' => '-1',
            'home_score' => '21',
            'away_team_id' => '159',
            'away_spread' => '1',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 19:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 16:26:00',
            'home_team_id' => '155',
            'home_spread' => '5',
            'home_score' => '20',
            'away_team_id' => '150',
            'away_spread' => '-5',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 19:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-08 20:20:00',
            'home_team_id' => '162',
            'home_spread' => '-4',
            'home_score' => '42',
            'away_team_id' => '143',
            'away_spread' => '4',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '6',
            'start_at' => '2023-10-09 20:17:00',
            'home_team_id' => '151',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '146',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-04 11:00:07',
            'updated_at' => '2023-10-09 23:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-11 19:30:00',
            'home_team_id' => '31',
            'home_spread' => '-3',
            'home_score' => '14',
            'away_team_id' => '122',
            'away_spread' => '3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-11 23:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-12 19:00:00',
            'home_team_id' => '39',
            'home_spread' => '3',
            'home_score' => '41',
            'away_team_id' => '130',
            'away_spread' => '-3',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-12 22:39:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-12 19:30:00',
            'home_team_id' => '27',
            'home_spread' => '13',
            'home_score' => '10',
            'away_team_id' => '95',
            'away_spread' => '-13',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-12 23:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-13 19:00:00',
            'home_team_id' => '59',
            'home_spread' => '5',
            'home_score' => '21',
            'away_team_id' => '111',
            'away_spread' => '-5',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-13 22:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-13 20:00:00',
            'home_team_id' => '120',
            'home_spread' => '6',
            'home_score' => '32',
            'away_team_id' => '33',
            'away_spread' => '-6',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-13 23:44:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-13 22:00:00',
            'home_team_id' => '24',
            'home_spread' => '-11',
            'home_score' => '43',
            'away_team_id' => '100',
            'away_spread' => '11',
            'away_score' => '46',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 02:14:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '3',
            'home_spread' => '-19',
            'home_score' => '24',
            'away_team_id' => '7',
            'away_spread' => '19',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '21',
            'home_spread' => '-5',
            'home_score' => '10',
            'away_team_id' => '43',
            'away_spread' => '5',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '28',
            'home_spread' => '-10',
            'home_score' => '28',
            'away_team_id' => '49',
            'away_spread' => '10',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '32',
            'home_spread' => '-18',
            'home_score' => '41',
            'away_team_id' => '101',
            'away_spread' => '18',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '124',
            'home_spread' => '32',
            'home_score' => '20',
            'away_team_id' => '34',
            'away_spread' => '-32',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '45',
            'home_spread' => '-4',
            'home_score' => '41',
            'away_team_id' => '35',
            'away_spread' => '4',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:20:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '63',
            'home_spread' => '-33',
            'home_score' => '52',
            'away_team_id' => '41',
            'away_spread' => '33',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '91',
            'home_spread' => '-5',
            'home_score' => '27',
            'away_team_id' => '62',
            'away_spread' => '5',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:03',
            'updated_at' => '2023-10-14 15:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '75',
            'home_spread' => '-6',
            'home_score' => '45',
            'away_team_id' => '103',
            'away_spread' => '6',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 12:00:00',
            'home_team_id' => '89',
            'home_spread' => '20',
            'home_score' => '7',
            'away_team_id' => '80',
            'away_spread' => '-20',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 15:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 14:00:00',
            'home_team_id' => '11',
            'home_spread' => '17',
            'home_score' => '6',
            'away_team_id' => '109',
            'away_spread' => '-17',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 17:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 14:00:00',
            'home_team_id' => '20',
            'home_spread' => '4',
            'home_score' => '0',
            'away_team_id' => '68',
            'away_spread' => '-4',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 17:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:00:00',
            'home_team_id' => '121',
            'home_spread' => '-13',
            'home_score' => '34',
            'away_team_id' => '18',
            'away_spread' => '13',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '19',
            'home_spread' => '-11',
            'home_score' => '17',
            'away_team_id' => '2',
            'away_spread' => '11',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '9',
            'home_spread' => '5',
            'home_score' => '0',
            'away_team_id' => '110',
            'away_spread' => '-5',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '102',
            'home_spread' => '-6',
            'home_score' => '44',
            'away_team_id' => '17',
            'away_spread' => '6',
            'away_score' => '11',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '16',
            'home_spread' => '-4',
            'home_score' => '14',
            'away_team_id' => '15',
            'away_spread' => '4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '98',
            'home_spread' => '-3',
            'home_score' => '14',
            'away_team_id' => '29',
            'away_spread' => '3',
            'away_score' => '56',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 19:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '97',
            'home_spread' => '-2',
            'home_score' => '39',
            'away_team_id' => '30',
            'away_spread' => '2',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 19:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '58',
            'home_spread' => '-14',
            'home_score' => '24',
            'away_team_id' => '40',
            'away_spread' => '14',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '82',
            'home_spread' => '4',
            'home_score' => '39',
            'away_team_id' => '46',
            'away_spread' => '-4',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:04',
            'updated_at' => '2023-10-14 18:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '132',
            'home_spread' => '9',
            'home_score' => '21',
            'away_team_id' => '61',
            'away_spread' => '-9',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 18:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '128',
            'home_spread' => '-3',
            'home_score' => '36',
            'away_team_id' => '85',
            'away_spread' => '3',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 19:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '87',
            'home_spread' => '-42',
            'home_score' => '63',
            'away_team_id' => '117',
            'away_spread' => '42',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '104',
            'home_spread' => '-4',
            'home_score' => '20',
            'away_team_id' => '105',
            'away_spread' => '4',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 15:30:00',
            'home_team_id' => '126',
            'home_spread' => '-2',
            'home_score' => '30',
            'away_team_id' => '127',
            'away_spread' => '2',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 19:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 16:00:00',
            'home_team_id' => '133',
            'home_spread' => '-10',
            'home_score' => '6',
            'away_team_id' => '42',
            'away_spread' => '10',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 19:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 16:00:00',
            'home_team_id' => '76',
            'home_spread' => '7',
            'home_score' => '23',
            'away_team_id' => '79',
            'away_spread' => '-7',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 19:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 17:00:00',
            'home_team_id' => '70',
            'home_spread' => '10',
            'home_score' => '27',
            'away_team_id' => '118',
            'away_spread' => '-10',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 20:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 18:00:00',
            'home_team_id' => '71',
            'home_spread' => '9',
            'home_score' => '24',
            'away_team_id' => '94',
            'away_spread' => '-9',
            'away_score' => '52',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 21:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 18:30:00',
            'home_team_id' => '88',
            'home_spread' => '8',
            'home_score' => '38',
            'away_team_id' => '55',
            'away_spread' => '-8',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:00:00',
            'home_team_id' => '1',
            'home_spread' => '-11',
            'home_score' => '34',
            'away_team_id' => '134',
            'away_spread' => '11',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:00:00',
            'home_team_id' => '129',
            'home_spread' => '-8',
            'home_score' => '6',
            'away_team_id' => '6',
            'away_spread' => '8',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:00:00',
            'home_team_id' => '56',
            'home_spread' => '-11',
            'home_score' => '48',
            'away_team_id' => '10',
            'away_spread' => '11',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:31:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:00:00',
            'home_team_id' => '36',
            'home_spread' => '-1',
            'home_score' => '41',
            'away_team_id' => '57',
            'away_spread' => '1',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:00:00',
            'home_team_id' => '108',
            'home_spread' => '-1',
            'home_score' => '21',
            'away_team_id' => '47',
            'away_spread' => '1',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:30:00',
            'home_team_id' => '50',
            'home_spread' => '-3',
            'home_score' => '21',
            'away_team_id' => '67',
            'away_spread' => '3',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:30:00',
            'home_team_id' => '78',
            'home_spread' => '-3',
            'home_score' => '48',
            'away_team_id' => '119',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:05',
            'updated_at' => '2023-10-14 22:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 20:00:00',
            'home_team_id' => '86',
            'home_spread' => '-4',
            'home_score' => '36',
            'away_team_id' => '115',
            'away_spread' => '4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-14 23:31:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 20:00:00',
            'home_team_id' => '123',
            'home_spread' => '-10',
            'home_score' => '41',
            'away_team_id' => '113',
            'away_spread' => '10',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-14 23:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 21:45:00',
            'home_team_id' => '25',
            'home_spread' => '8',
            'home_score' => '31',
            'away_team_id' => '13',
            'away_spread' => '-8',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 01:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-12 20:16:00',
            'home_team_id' => '150',
            'home_spread' => '-10',
            'home_score' => '19',
            'away_team_id' => '144',
            'away_spread' => '10',
            'away_score' => '8',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-12 23:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 09:31:00',
            'home_team_id' => '165',
            'home_spread' => '5',
            'home_score' => '16',
            'away_team_id' => '137',
            'away_spread' => '-5',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 12:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '136',
            'home_spread' => '-2',
            'home_score' => '16',
            'away_team_id' => '166',
            'away_spread' => '2',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 15:57:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '154',
            'home_spread' => '-14',
            'home_score' => '42',
            'away_team_id' => '139',
            'away_spread' => '14',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 16:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '140',
            'home_spread' => '3',
            'home_score' => '13',
            'away_team_id' => '155',
            'away_spread' => '-3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 16:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '141',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '163',
            'away_spread' => '3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 15:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '142',
            'home_spread' => '6',
            'home_score' => '19',
            'away_team_id' => '162',
            'away_spread' => '-6',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '2',
            'home_score' => '20',
            'away_team_id' => '157',
            'away_spread' => '-2',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 16:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 13:01:00',
            'home_team_id' => '149',
            'home_spread' => '-4',
            'home_score' => '37',
            'away_team_id' => '148',
            'away_spread' => '4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 16:02:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 16:05:00',
            'home_team_id' => '151',
            'home_spread' => '-3',
            'home_score' => '21',
            'away_team_id' => '156',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:06',
            'updated_at' => '2023-10-15 19:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 16:26:00',
            'home_team_id' => '153',
            'home_spread' => '-7',
            'home_score' => '26',
            'away_team_id' => '135',
            'away_spread' => '7',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:07',
            'updated_at' => '2023-10-15 19:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 16:26:00',
            'home_team_id' => '164',
            'home_spread' => '4',
            'home_score' => '6',
            'away_team_id' => '145',
            'away_spread' => '-4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:07',
            'updated_at' => '2023-10-15 19:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 16:26:00',
            'home_team_id' => '159',
            'home_spread' => '7',
            'home_score' => '20',
            'away_team_id' => '160',
            'away_spread' => '-7',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:07',
            'updated_at' => '2023-10-15 19:38:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-15 20:21:00',
            'home_team_id' => '138',
            'home_spread' => '-14',
            'home_score' => '14',
            'away_team_id' => '158',
            'away_spread' => '14',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:07',
            'updated_at' => '2023-10-15 23:38:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-16 20:16:00',
            'home_team_id' => '152',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '143',
            'away_spread' => '-3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-11 11:00:07',
            'updated_at' => '2023-10-16 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 19:30:00',
            'home_team_id' => '74',
            'home_spread' => '-3',
            'home_score' => '41',
            'away_team_id' => '60',
            'away_spread' => '3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-14 00:32:08',
            'updated_at' => '2023-10-14 23:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '7',
            'start_at' => '2023-10-14 20:00:00',
            'home_team_id' => '26',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '73',
            'away_spread' => '3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-14 13:52:48',
            'updated_at' => '2023-10-14 23:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-18 21:00:00',
            'home_team_id' => '122',
            'home_spread' => '4',
            'home_score' => '7',
            'away_team_id' => '72',
            'away_spread' => '-4',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-19 00:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-19 19:00:00',
            'home_team_id' => '57',
            'home_spread' => '4',
            'home_score' => '9',
            'away_team_id' => '45',
            'away_spread' => '-4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-19 22:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-19 19:00:00',
            'home_team_id' => '112',
            'home_spread' => '-3',
            'home_score' => '10',
            'away_team_id' => '90',
            'away_spread' => '3',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-19 22:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-20 19:00:00',
            'home_team_id' => '103',
            'home_spread' => '21',
            'home_score' => '0',
            'away_team_id' => '95',
            'away_spread' => '-21',
            'away_score' => '55',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-20 22:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '68',
            'home_spread' => '11',
            'home_score' => '6',
            'away_team_id' => '1',
            'away_spread' => '-11',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '7',
            'home_spread' => '-6',
            'home_score' => '3',
            'away_team_id' => '66',
            'away_spread' => '6',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '21',
            'home_spread' => '-3',
            'home_score' => '29',
            'away_team_id' => '12',
            'away_spread' => '3',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:33:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '37',
            'home_spread' => '-5',
            'home_score' => '23',
            'away_team_id' => '14',
            'away_spread' => '5',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '41',
            'home_spread' => '6',
            'home_score' => '14',
            'away_team_id' => '91',
            'away_spread' => '-6',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '113',
            'home_spread' => '7',
            'home_score' => '21',
            'away_team_id' => '59',
            'away_spread' => '-7',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '79',
            'home_spread' => '-17',
            'home_score' => '20',
            'away_team_id' => '132',
            'away_spread' => '17',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '80',
            'home_spread' => '-4',
            'home_score' => '20',
            'away_team_id' => '87',
            'away_spread' => '4',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 12:00:00',
            'home_team_id' => '81',
            'home_spread' => '-19',
            'home_score' => '31',
            'away_team_id' => '114',
            'away_spread' => '19',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:03',
            'updated_at' => '2023-10-21 15:37:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 14:00:00',
            'home_team_id' => '15',
            'home_spread' => '-8',
            'home_score' => '41',
            'away_team_id' => '2',
            'away_spread' => '8',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 17:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 14:00:00',
            'home_team_id' => '27',
            'home_spread' => '-7',
            'home_score' => '7',
            'away_team_id' => '20',
            'away_spread' => '7',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 17:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '3',
            'home_spread' => '-8',
            'home_score' => '34',
            'away_team_id' => '104',
            'away_spread' => '8',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:08:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '11',
            'home_spread' => '5',
            'home_score' => '24',
            'away_team_id' => '19',
            'away_spread' => '-5',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '49',
            'home_spread' => '7',
            'home_score' => '6',
            'away_team_id' => '16',
            'away_spread' => '-7',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '76',
            'home_spread' => '-12',
            'home_score' => '20',
            'away_team_id' => '28',
            'away_spread' => '12',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '40',
            'home_spread' => '3',
            'home_score' => '21',
            'away_team_id' => '133',
            'away_spread' => '-3',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '42',
            'home_spread' => '-4',
            'home_score' => '10',
            'away_team_id' => '65',
            'away_spread' => '4',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '67',
            'home_spread' => '-7',
            'home_score' => '34',
            'away_team_id' => '97',
            'away_spread' => '7',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:54:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '69',
            'home_spread' => '-11',
            'home_score' => '17',
            'away_team_id' => '77',
            'away_spread' => '11',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:42:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '111',
            'home_spread' => '-20',
            'home_score' => '35',
            'away_team_id' => '75',
            'away_spread' => '20',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '130',
            'home_spread' => '-4',
            'home_score' => '34',
            'away_team_id' => '82',
            'away_spread' => '4',
            'away_score' => '48',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:08:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '85',
            'home_spread' => '-19',
            'home_score' => '38',
            'away_team_id' => '129',
            'away_spread' => '19',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '127',
            'home_spread' => '-1',
            'home_score' => '21',
            'away_team_id' => '88',
            'away_spread' => '1',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 18:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 15:30:00',
            'home_team_id' => '116',
            'home_spread' => '3',
            'home_score' => '21',
            'away_team_id' => '98',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 16:00:00',
            'home_team_id' => '39',
            'home_spread' => '24',
            'home_score' => '24',
            'away_team_id' => '106',
            'away_spread' => '-24',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 16:00:00',
            'home_team_id' => '61',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '109',
            'away_spread' => '-3',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 19:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 18:00:00',
            'home_team_id' => '29',
            'home_spread' => '4',
            'home_score' => '10',
            'away_team_id' => '123',
            'away_spread' => '-4',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 21:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 18:30:00',
            'home_team_id' => '74',
            'home_spread' => '-23',
            'home_score' => '27',
            'away_team_id' => '125',
            'away_spread' => '23',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 22:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '83',
            'home_spread' => '7',
            'home_score' => '28',
            'away_team_id' => '4',
            'away_spread' => '-7',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 22:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '8',
            'home_spread' => '11',
            'home_score' => '17',
            'away_team_id' => '23',
            'away_spread' => '-11',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 22:33:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '10',
            'home_spread' => '7',
            'home_score' => '21',
            'away_team_id' => '84',
            'away_spread' => '-7',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:04',
            'updated_at' => '2023-10-21 22:33:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '17',
            'home_spread' => '5',
            'home_score' => '27',
            'away_team_id' => '108',
            'away_spread' => '-5',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '118',
            'home_spread' => '-8',
            'home_score' => '25',
            'away_team_id' => '25',
            'away_spread' => '8',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '47',
            'home_spread' => '-7',
            'home_score' => '41',
            'away_team_id' => '102',
            'away_spread' => '7',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:00:00',
            'home_team_id' => '94',
            'home_spread' => '-4',
            'home_score' => '42',
            'away_team_id' => '120',
            'away_spread' => '4',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:30:00',
            'home_team_id' => '56',
            'home_spread' => '-30',
            'home_score' => '62',
            'away_team_id' => '9',
            'away_spread' => '30',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:30:00',
            'home_team_id' => '32',
            'home_spread' => '-14',
            'home_score' => '38',
            'away_team_id' => '26',
            'away_spread' => '14',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 23:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 19:30:00',
            'home_team_id' => '62',
            'home_spread' => '25',
            'home_score' => '0',
            'away_team_id' => '63',
            'away_spread' => '-25',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 22:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 20:00:00',
            'home_team_id' => '119',
            'home_spread' => '-7',
            'home_score' => '32',
            'away_team_id' => '121',
            'away_spread' => '7',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-21 23:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 21:00:00',
            'home_team_id' => '93',
            'home_spread' => '-13',
            'home_score' => '0',
            'away_team_id' => '70',
            'away_spread' => '13',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-22 00:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 22:30:00',
            'home_team_id' => '128',
            'home_spread' => '-27',
            'home_score' => '15',
            'away_team_id' => '5',
            'away_spread' => '27',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-22 02:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-21 22:30:00',
            'home_team_id' => '100',
            'home_spread' => '17',
            'home_score' => '7',
            'away_team_id' => '115',
            'away_spread' => '-17',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:05',
            'updated_at' => '2023-10-22 01:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-19 20:16:00',
            'home_team_id' => '157',
            'home_spread' => '-1',
            'home_score' => '24',
            'away_team_id' => '149',
            'away_spread' => '1',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-19 23:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:00:00',
            'home_team_id' => '137',
            'home_spread' => '-3',
            'home_score' => '38',
            'away_team_id' => '145',
            'away_spread' => '3',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:00:00',
            'home_team_id' => '156',
            'home_spread' => '9',
            'home_score' => '29',
            'away_team_id' => '138',
            'away_spread' => '-9',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:00:00',
            'home_team_id' => '158',
            'home_spread' => '2',
            'home_score' => '14',
            'away_team_id' => '166',
            'away_spread' => '-2',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:01:00',
            'home_team_id' => '164',
            'home_spread' => '-3',
            'home_score' => '13',
            'away_team_id' => '136',
            'away_spread' => '3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:01:00',
            'home_team_id' => '140',
            'home_spread' => '3',
            'home_score' => '30',
            'away_team_id' => '151',
            'away_spread' => '-3',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 13:01:00',
            'home_team_id' => '148',
            'home_spread' => '2',
            'home_score' => '38',
            'away_team_id' => '142',
            'away_spread' => '-2',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 16:06:00',
            'home_team_id' => '163',
            'home_spread' => '-8',
            'home_score' => '20',
            'away_team_id' => '135',
            'away_spread' => '8',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 16:06:00',
            'home_team_id' => '153',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '161',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 19:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 16:25:00',
            'home_team_id' => '144',
            'home_spread' => '2',
            'home_score' => '19',
            'away_team_id' => '146',
            'away_spread' => '-2',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 19:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 16:25:00',
            'home_team_id' => '150',
            'home_spread' => '-6',
            'home_score' => '31',
            'away_team_id' => '152',
            'away_spread' => '6',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 19:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-22 20:21:00',
            'home_team_id' => '160',
            'home_spread' => '-2',
            'home_score' => '31',
            'away_team_id' => '154',
            'away_spread' => '2',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '8',
            'start_at' => '2023-10-23 20:15:00',
            'home_team_id' => '155',
            'home_spread' => '7',
            'home_score' => '22',
            'away_team_id' => '162',
            'away_spread' => '-7',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-18 11:00:06',
            'updated_at' => '2023-10-23 23:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-26 19:30:00',
            'home_team_id' => '35',
            'home_spread' => '-2',
            'home_score' => '44',
            'away_team_id' => '36',
            'away_spread' => '2',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-26 23:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-26 19:30:00',
            'home_team_id' => '126',
            'home_spread' => '-3',
            'home_score' => '38',
            'away_team_id' => '101',
            'away_spread' => '3',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-26 22:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-27 19:30:00',
            'home_team_id' => '20',
            'home_spread' => '5',
            'home_score' => '16',
            'away_team_id' => '29',
            'away_spread' => '-5',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-27 23:10:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '9',
            'home_spread' => '-10',
            'home_score' => '14',
            'away_team_id' => '117',
            'away_spread' => '10',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '14',
            'home_spread' => '-14',
            'home_score' => '21',
            'away_team_id' => '116',
            'away_spread' => '14',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '127',
            'home_spread' => '21',
            'home_score' => '16',
            'away_team_id' => '32',
            'away_spread' => '-21',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '47',
            'home_spread' => '-17',
            'home_score' => '41',
            'away_team_id' => '39',
            'away_spread' => '17',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:10:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '87',
            'home_spread' => '-31',
            'home_score' => '33',
            'away_team_id' => '41',
            'away_spread' => '31',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:30:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '46',
            'home_spread' => '10',
            'home_score' => '38',
            'away_team_id' => '81',
            'away_spread' => '-10',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 16:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '77',
            'home_spread' => '14',
            'home_score' => '33',
            'away_team_id' => '58',
            'away_spread' => '-14',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '95',
            'home_spread' => '-21',
            'home_score' => '69',
            'away_team_id' => '112',
            'away_spread' => '21',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '105',
            'home_spread' => '-14',
            'home_score' => '30',
            'away_team_id' => '97',
            'away_spread' => '14',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 12:00:00',
            'home_team_id' => '114',
            'home_spread' => '-7',
            'home_score' => '28',
            'away_team_id' => '130',
            'away_spread' => '7',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 15:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 13:00:00',
            'home_team_id' => '28',
            'home_spread' => '3',
            'home_score' => '21',
            'away_team_id' => '132',
            'away_spread' => '-3',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 16:35:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:00:00',
            'home_team_id' => '75',
            'home_spread' => '8',
            'home_score' => '42',
            'away_team_id' => '59',
            'away_spread' => '-8',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 18:34:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '10',
            'home_spread' => '-7',
            'home_score' => '27',
            'away_team_id' => '66',
            'away_spread' => '7',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 18:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '106',
            'home_spread' => '-18',
            'home_score' => '35',
            'away_team_id' => '17',
            'away_spread' => '18',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 18:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '12',
            'home_spread' => '3',
            'home_score' => '18',
            'away_team_id' => '43',
            'away_spread' => '-3',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 18:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '55',
            'home_spread' => '-4',
            'home_score' => '23',
            'away_team_id' => '26',
            'away_spread' => '4',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '123',
            'home_spread' => '-18',
            'home_score' => '41',
            'away_team_id' => '27',
            'away_spread' => '18',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:03',
            'updated_at' => '2023-10-28 19:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '79',
            'home_spread' => '-7',
            'home_score' => '16',
            'away_team_id' => '61',
            'away_spread' => '7',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 18:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '65',
            'home_spread' => '-7',
            'home_score' => '27',
            'away_team_id' => '62',
            'away_spread' => '7',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '69',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '89',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 19:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '78',
            'home_spread' => '-21',
            'home_score' => '58',
            'away_team_id' => '88',
            'away_spread' => '21',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 18:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:00',
            'home_team_id' => '121',
            'home_spread' => '7',
            'home_score' => '6',
            'away_team_id' => '85',
            'away_spread' => '-7',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 18:32:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 15:30:41',
            'home_team_id' => '30',
            'home_spread' => '15',
            'home_score' => '20',
            'away_team_id' => '34',
            'away_spread' => '-15',
            'away_score' => '43',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 19:01:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 16:00:00',
            'home_team_id' => '18',
            'home_spread' => '11',
            'home_score' => '49',
            'away_team_id' => '119',
            'away_spread' => '-11',
            'away_score' => '50',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 20:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 16:00:00',
            'home_team_id' => '90',
            'home_spread' => '11',
            'home_score' => '28',
            'away_team_id' => '111',
            'away_spread' => '-11',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 19:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 17:30:00',
            'home_team_id' => '13',
            'home_spread' => '-5',
            'home_score' => '32',
            'away_team_id' => '134',
            'away_spread' => '5',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 20:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 18:00:00',
            'home_team_id' => '23',
            'home_spread' => '5',
            'home_score' => '34',
            'away_team_id' => '57',
            'away_spread' => '-5',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 21:19:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:00:00',
            'home_team_id' => '25',
            'home_spread' => '14',
            'home_score' => '13',
            'away_team_id' => '1',
            'away_spread' => '-14',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:00:00',
            'home_team_id' => '50',
            'home_spread' => '4',
            'home_score' => '27',
            'away_team_id' => '104',
            'away_spread' => '-4',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:00:00',
            'home_team_id' => '100',
            'home_spread' => '27',
            'home_score' => '33',
            'away_team_id' => '128',
            'away_spread' => '-27',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:00:00',
            'home_team_id' => '107',
            'home_spread' => '6',
            'home_score' => '13',
            'away_team_id' => '110',
            'away_spread' => '-6',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:30:00',
            'home_team_id' => '115',
            'home_spread' => '-17',
            'home_score' => '28',
            'away_team_id' => '24',
            'away_spread' => '17',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 23:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:30:00',
            'home_team_id' => '133',
            'home_spread' => '15',
            'home_score' => '10',
            'away_team_id' => '80',
            'away_spread' => '-15',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 19:30:00',
            'home_team_id' => '84',
            'home_spread' => '-25',
            'home_score' => '33',
            'away_team_id' => '124',
            'away_spread' => '25',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 22:38:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 20:00:00',
            'home_team_id' => '5',
            'home_spread' => '6',
            'home_score' => '38',
            'away_team_id' => '129',
            'away_spread' => '-6',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 23:39:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 20:00:00',
            'home_team_id' => '82',
            'home_spread' => '-8',
            'home_score' => '45',
            'away_team_id' => '21',
            'away_spread' => '8',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 23:32:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 20:00:00',
            'home_team_id' => '37',
            'home_spread' => '12',
            'home_score' => '46',
            'away_team_id' => '74',
            'away_spread' => '-12',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 23:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 20:00:00',
            'home_team_id' => '45',
            'home_spread' => '-20',
            'home_score' => '30',
            'away_team_id' => '83',
            'away_spread' => '20',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-28 23:49:02',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 22:30:00',
            'home_team_id' => '6',
            'home_spread' => '4',
            'home_score' => '27',
            'away_team_id' => '86',
            'away_spread' => '-4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-29 01:51:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 22:30:00',
            'home_team_id' => '33',
            'home_spread' => '-8',
            'home_score' => '31',
            'away_team_id' => '118',
            'away_spread' => '8',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-29 02:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-28 22:30:00',
            'home_team_id' => '70',
            'home_spread' => '-1',
            'home_score' => '34',
            'away_team_id' => '71',
            'away_spread' => '1',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:04',
            'updated_at' => '2023-10-29 02:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-26 20:15:00',
            'home_team_id' => '138',
            'home_spread' => '-9',
            'home_score' => '24',
            'away_team_id' => '164',
            'away_spread' => '9',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-26 23:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '165',
            'home_spread' => '3',
            'home_score' => '28',
            'away_team_id' => '136',
            'away_spread' => '-3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '139',
            'home_spread' => '3',
            'home_score' => '15',
            'away_team_id' => '147',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '148',
            'home_spread' => '-1',
            'home_score' => '27',
            'away_team_id' => '157',
            'away_spread' => '1',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:17:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '154',
            'home_spread' => '-10',
            'home_score' => '31',
            'away_team_id' => '156',
            'away_spread' => '10',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '158',
            'home_spread' => '3',
            'home_score' => '10',
            'away_team_id' => '159',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:32:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:00:00',
            'home_team_id' => '166',
            'home_spread' => '7',
            'home_score' => '31',
            'away_team_id' => '160',
            'away_spread' => '-7',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:17:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:01:00',
            'home_team_id' => '143',
            'home_spread' => '-7',
            'home_score' => '43',
            'away_team_id' => '153',
            'away_spread' => '7',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:00:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:01:00',
            'home_team_id' => '146',
            'home_spread' => '2',
            'home_score' => '10',
            'away_team_id' => '155',
            'away_spread' => '-2',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 13:01:00',
            'home_team_id' => '161',
            'home_spread' => '3',
            'home_score' => '10',
            'away_team_id' => '149',
            'away_spread' => '-3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 16:17:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 16:06:00',
            'home_team_id' => '163',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '142',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 19:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 16:26:00',
            'home_team_id' => '135',
            'home_spread' => '9',
            'home_score' => '24',
            'away_team_id' => '137',
            'away_spread' => '-9',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 19:36:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 16:26:00',
            'home_team_id' => '162',
            'home_spread' => '-5',
            'home_score' => '17',
            'away_team_id' => '141',
            'away_spread' => '5',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 19:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 16:26:00',
            'home_team_id' => '144',
            'home_spread' => '9',
            'home_score' => '24',
            'away_team_id' => '150',
            'away_spread' => '-9',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 19:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-29 20:21:00',
            'home_team_id' => '152',
            'home_spread' => '-9',
            'home_score' => '30',
            'away_team_id' => '140',
            'away_spread' => '9',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-29 23:19:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '9',
            'start_at' => '2023-10-30 20:15:00',
            'home_team_id' => '145',
            'home_spread' => '-8',
            'home_score' => '26',
            'away_team_id' => '151',
            'away_spread' => '8',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-10-25 11:00:05',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-01 19:00:00',
            'home_team_id' => '15',
            'home_spread' => '-5',
            'home_score' => '24',
            'away_team_id' => '11',
            'away_spread' => '5',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-01 22:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-01 19:30:00',
            'home_team_id' => '2',
            'home_spread' => '-4',
            'home_score' => '31',
            'away_team_id' => '49',
            'away_spread' => '4',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-01 23:01:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-02 19:00:00',
            'home_team_id' => '108',
            'home_spread' => '-3',
            'home_score' => '35',
            'away_team_id' => '102',
            'away_spread' => '3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-02 22:32:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-02 19:30:00',
            'home_team_id' => '26',
            'home_spread' => '-12',
            'home_score' => '24',
            'away_team_id' => '127',
            'away_spread' => '12',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-02 22:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-02 19:30:00',
            'home_team_id' => '110',
            'home_spread' => '-5',
            'home_score' => '28',
            'away_team_id' => '96',
            'away_spread' => '5',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-02 23:01:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-03 19:30:00',
            'home_team_id' => '101',
            'home_spread' => '-2',
            'home_score' => '10',
            'away_team_id' => '14',
            'away_spread' => '2',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:03',
            'updated_at' => '2023-11-03 22:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-03 20:00:00',
            'home_team_id' => '134',
            'home_spread' => '-7',
            'home_score' => '24',
            'away_team_id' => '25',
            'away_spread' => '7',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-03 23:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '30',
            'home_spread' => '-6',
            'home_score' => '36',
            'away_team_id' => '7',
            'away_spread' => '6',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 16:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '22',
            'home_spread' => '3',
            'home_score' => '31',
            'away_team_id' => '78',
            'away_spread' => '-3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '41',
            'home_spread' => '10',
            'home_score' => '20',
            'away_team_id' => '133',
            'away_spread' => '-10',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:30:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '106',
            'home_spread' => '-4',
            'home_score' => '33',
            'away_team_id' => '47',
            'away_spread' => '4',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '62',
            'home_spread' => '3',
            'home_score' => '20',
            'away_team_id' => '69',
            'away_spread' => '-3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '91',
            'home_spread' => '20',
            'home_score' => '16',
            'away_team_id' => '80',
            'away_spread' => '-20',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '84',
            'home_spread' => '-3',
            'home_score' => '38',
            'away_team_id' => '105',
            'away_spread' => '3',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 12:00:00',
            'home_team_id' => '104',
            'home_spread' => '-35',
            'home_score' => '59',
            'away_team_id' => '116',
            'away_spread' => '35',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 15:30:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 14:00:00',
            'home_team_id' => '121',
            'home_spread' => '-11',
            'home_score' => '55',
            'away_team_id' => '5',
            'away_spread' => '11',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 17:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 14:00:00',
            'home_team_id' => '125',
            'home_spread' => '-2',
            'home_score' => '17',
            'away_team_id' => '37',
            'away_spread' => '2',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 17:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 14:00:00',
            'home_team_id' => '103',
            'home_spread' => '7',
            'home_score' => '32',
            'away_team_id' => '68',
            'away_spread' => '-7',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 17:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 14:30:00',
            'home_team_id' => '1',
            'home_spread' => '-18',
            'home_score' => '3',
            'away_team_id' => '9',
            'away_spread' => '18',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 17:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:00:00',
            'home_team_id' => '113',
            'home_spread' => '1',
            'home_score' => '45',
            'away_team_id' => '29',
            'away_spread' => '-1',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 18:38:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:00:00',
            'home_team_id' => '59',
            'home_spread' => '-13',
            'home_score' => '59',
            'away_team_id' => '98',
            'away_spread' => '13',
            'away_score' => '50',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 18:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:00:00',
            'home_team_id' => '75',
            'home_spread' => '8',
            'home_score' => '29',
            'away_team_id' => '123',
            'away_spread' => '-8',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 18:44:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '12',
            'home_spread' => '-4',
            'home_score' => '24',
            'away_team_id' => '39',
            'away_spread' => '4',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '21',
            'home_spread' => '5',
            'home_score' => '26',
            'away_team_id' => '114',
            'away_spread' => '-5',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:04',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '83',
            'home_spread' => '2',
            'home_score' => '24',
            'away_team_id' => '23',
            'away_spread' => '-2',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '27',
            'home_spread' => '18',
            'home_score' => '10',
            'away_team_id' => '111',
            'away_spread' => '-18',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '88',
            'home_spread' => '22',
            'home_score' => '7',
            'away_team_id' => '32',
            'away_spread' => '-22',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '34',
            'home_spread' => '-15',
            'home_score' => '30',
            'away_team_id' => '67',
            'away_spread' => '15',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '36',
            'home_spread' => '6',
            'home_score' => '14',
            'away_team_id' => '45',
            'away_spread' => '-6',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '65',
            'home_spread' => '-2',
            'home_score' => '26',
            'away_team_id' => '40',
            'away_spread' => '2',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '77',
            'home_spread' => '6',
            'home_score' => '7',
            'away_team_id' => '42',
            'away_spread' => '-6',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 18:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '55',
            'home_spread' => '-10',
            'home_score' => '34',
            'away_team_id' => '126',
            'away_spread' => '10',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 18:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '58',
            'home_spread' => '10',
            'home_score' => '15',
            'away_team_id' => '87',
            'away_spread' => '-10',
            'away_score' => '51',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 15:30:00',
            'home_team_id' => '82',
            'home_spread' => '6',
            'home_score' => '27',
            'away_team_id' => '81',
            'away_spread' => '-6',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 16:00:00',
            'home_team_id' => '124',
            'home_spread' => '13',
            'home_score' => '15',
            'away_team_id' => '10',
            'away_spread' => '-13',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:08:07',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 16:00:00',
            'home_team_id' => '112',
            'home_spread' => '-4',
            'home_score' => '26',
            'away_team_id' => '20',
            'away_spread' => '4',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 19:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 17:00:00',
            'home_team_id' => '107',
            'home_spread' => '3',
            'home_score' => '45',
            'away_team_id' => '35',
            'away_spread' => '-3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 20:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 17:30:00',
            'home_team_id' => '85',
            'home_spread' => '-24',
            'home_score' => '63',
            'away_team_id' => '18',
            'away_spread' => '24',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 21:32:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 18:00:00',
            'home_team_id' => '4',
            'home_spread' => '-4',
            'home_score' => '31',
            'away_team_id' => '57',
            'away_spread' => '4',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 21:04:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 18:00:00',
            'home_team_id' => '51',
            'home_spread' => '-17',
            'home_score' => '56',
            'away_team_id' => '53',
            'away_spread' => '17',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 21:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 18:00:00',
            'home_team_id' => '72',
            'home_spread' => '-3',
            'home_score' => '13',
            'away_team_id' => '64',
            'away_spread' => '3',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 21:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 18:00:00',
            'home_team_id' => '71',
            'home_spread' => '10',
            'home_score' => '14',
            'away_team_id' => '118',
            'away_spread' => '-10',
            'away_score' => '56',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 20:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:00:00',
            'home_team_id' => '130',
            'home_spread' => '-10',
            'home_score' => '37',
            'away_team_id' => '17',
            'away_spread' => '10',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 22:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:00:00',
            'home_team_id' => '43',
            'home_spread' => '-3',
            'home_score' => '21',
            'away_team_id' => '46',
            'away_spread' => '3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 22:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:00:00',
            'home_team_id' => '93',
            'home_spread' => '3',
            'home_score' => '24',
            'away_team_id' => '120',
            'away_spread' => '-3',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 22:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:30:00',
            'home_team_id' => '66',
            'home_spread' => '4',
            'home_score' => '3',
            'away_team_id' => '50',
            'away_spread' => '-4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 22:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:30:00',
            'home_team_id' => '63',
            'home_spread' => '-32',
            'home_score' => '41',
            'away_team_id' => '89',
            'away_spread' => '32',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 22:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:30:00',
            'home_team_id' => '90',
            'home_spread' => '13',
            'home_score' => '31',
            'away_team_id' => '95',
            'away_spread' => '-13',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 23:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:30:00',
            'home_team_id' => '119',
            'home_spread' => '4',
            'home_score' => '42',
            'away_team_id' => '128',
            'away_spread' => '-4',
            'away_score' => '52',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:05',
            'updated_at' => '2023-11-04 23:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 19:45:41',
            'home_team_id' => '3',
            'home_spread' => '-3',
            'home_score' => '42',
            'away_team_id' => '56',
            'away_spread' => '3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-04 23:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 21:00:00',
            'home_team_id' => '129',
            'home_spread' => '-13',
            'home_score' => '7',
            'away_team_id' => '100',
            'away_spread' => '13',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 00:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 21:00:00',
            'home_team_id' => '122',
            'home_spread' => '9',
            'home_score' => '13',
            'away_team_id' => '131',
            'away_spread' => '-9',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 00:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 22:00:00',
            'home_team_id' => '33',
            'home_spread' => '-3',
            'home_score' => '37',
            'away_team_id' => '13',
            'away_spread' => '3',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 01:41:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 22:00:00',
            'home_team_id' => '24',
            'home_spread' => '14',
            'home_score' => '19',
            'away_team_id' => '86',
            'away_spread' => '-14',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 01:32:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-04 22:30:00',
            'home_team_id' => '6',
            'home_spread' => '3',
            'home_score' => '27',
            'away_team_id' => '115',
            'away_spread' => '-3',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 01:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-02 20:15:00',
            'home_team_id' => '161',
            'home_spread' => '-3',
            'home_score' => '20',
            'away_team_id' => '165',
            'away_spread' => '3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-02 23:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 09:30:00',
            'home_team_id' => '150',
            'home_spread' => '-3',
            'home_score' => '21',
            'away_team_id' => '154',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 12:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '142',
            'home_spread' => '-8',
            'home_score' => '27',
            'away_team_id' => '135',
            'away_spread' => '8',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:02:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '136',
            'home_spread' => '-5',
            'home_score' => '28',
            'away_team_id' => '155',
            'away_spread' => '5',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:18:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '137',
            'home_spread' => '-6',
            'home_score' => '37',
            'away_team_id' => '163',
            'away_spread' => '6',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:01:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '157',
            'home_spread' => '-8',
            'home_score' => '24',
            'away_team_id' => '140',
            'away_spread' => '8',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '146',
            'home_spread' => '-3',
            'home_score' => '20',
            'away_team_id' => '153',
            'away_spread' => '3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '147',
            'home_spread' => '-3',
            'home_score' => '39',
            'away_team_id' => '164',
            'away_spread' => '3',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 13:00:00',
            'home_team_id' => '156',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '166',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 16:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 16:05:00',
            'home_team_id' => '139',
            'home_spread' => '3',
            'home_score' => '13',
            'away_team_id' => '148',
            'away_spread' => '-3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 19:07:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 16:25:00',
            'home_team_id' => '160',
            'home_spread' => '-3',
            'home_score' => '28',
            'away_team_id' => '143',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 19:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 16:25:00',
            'home_team_id' => '151',
            'home_spread' => '-2',
            'home_score' => '30',
            'away_team_id' => '158',
            'away_spread' => '2',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 19:25:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-05 20:20:00',
            'home_team_id' => '141',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '138',
            'away_spread' => '3',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-05 23:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '10',
            'start_at' => '2023-11-06 20:15:00',
            'home_team_id' => '159',
            'home_spread' => '3',
            'home_score' => '6',
            'away_team_id' => '152',
            'away_spread' => '-3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-01 11:00:06',
            'updated_at' => '2023-11-06 23:18:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-08 19:00:00',
            'home_team_id' => '61',
            'home_spread' => '-17',
            'home_score' => '19',
            'away_team_id' => '2',
            'away_spread' => '17',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-08 22:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-08 19:00:00',
            'home_team_id' => '49',
            'home_spread' => '11',
            'home_score' => '19',
            'away_team_id' => '15',
            'away_spread' => '-11',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-08 22:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-08 19:30:00',
            'home_team_id' => '109',
            'home_spread' => '-19',
            'home_score' => '49',
            'away_team_id' => '28',
            'away_spread' => '19',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-08 22:51:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-09 19:30:00',
            'home_team_id' => '55',
            'home_spread' => '-20',
            'home_score' => '31',
            'away_team_id' => '125',
            'away_spread' => '20',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-09 23:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-10 21:00:00',
            'home_team_id' => '95',
            'home_spread' => '-17',
            'home_score' => '45',
            'away_team_id' => '75',
            'away_spread' => '17',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 00:31:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-10 22:45:00',
            'home_team_id' => '118',
            'home_spread' => '-5',
            'home_score' => '34',
            'away_team_id' => '134',
            'away_spread' => '5',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 01:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 11:00:00',
            'home_team_id' => '111',
            'home_spread' => '-23',
            'home_score' => '24',
            'away_team_id' => '112',
            'away_spread' => '23',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '50',
            'home_spread' => '11',
            'home_score' => '21',
            'away_team_id' => '3',
            'away_spread' => '-11',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '14',
            'home_spread' => '2',
            'home_score' => '22',
            'away_team_id' => '126',
            'away_spread' => '-2',
            'away_score' => '48',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '22',
            'home_spread' => '-14',
            'home_score' => '42',
            'away_team_id' => '37',
            'away_spread' => '14',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '40',
            'home_spread' => '-7',
            'home_score' => '48',
            'away_team_id' => '41',
            'away_spread' => '7',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 16:00:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '46',
            'home_spread' => '-4',
            'home_score' => '13',
            'away_team_id' => '108',
            'away_spread' => '4',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:20:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '69',
            'home_spread' => '3',
            'home_score' => '10',
            'away_team_id' => '58',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '87',
            'home_spread' => '6',
            'home_score' => '15',
            'away_team_id' => '63',
            'away_spread' => '-6',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:04',
            'updated_at' => '2023-11-11 15:16:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '97',
            'home_spread' => '-14',
            'home_score' => '47',
            'away_team_id' => '124',
            'away_spread' => '14',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 15:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 12:00:00',
            'home_team_id' => '98',
            'home_spread' => '-7',
            'home_score' => '27',
            'away_team_id' => '103',
            'away_spread' => '7',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 15:44:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 13:00:00',
            'home_team_id' => '51',
            'home_spread' => '-13',
            'home_score' => '38',
            'away_team_id' => '83',
            'away_spread' => '13',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 16:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 14:00:00',
            'home_team_id' => '36',
            'home_spread' => '-2',
            'home_score' => '14',
            'away_team_id' => '4',
            'away_spread' => '2',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 17:08:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 14:00:00',
            'home_team_id' => '24',
            'home_spread' => '11',
            'home_score' => '31',
            'away_team_id' => '6',
            'away_spread' => '-11',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 17:31:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 14:00:00',
            'home_team_id' => '20',
            'home_spread' => '10',
            'home_score' => '38',
            'away_team_id' => '59',
            'away_spread' => '-10',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 17:48:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 14:00:00',
            'home_team_id' => '45',
            'home_spread' => '-25',
            'home_score' => '44',
            'away_team_id' => '116',
            'away_spread' => '25',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 17:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:00:00',
            'home_team_id' => '120',
            'home_spread' => '-16',
            'home_score' => '41',
            'away_team_id' => '70',
            'away_spread' => '16',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 18:31:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '47',
            'home_spread' => '-21',
            'home_score' => '59',
            'away_team_id' => '12',
            'away_spread' => '21',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 18:33:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '23',
            'home_spread' => '2',
            'home_score' => '31',
            'away_team_id' => '107',
            'away_spread' => '-2',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 19:00:14',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '64',
            'home_spread' => '-11',
            'home_score' => '40',
            'away_team_id' => '31',
            'away_spread' => '11',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 18:33:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '42',
            'home_spread' => '1',
            'home_score' => '22',
            'away_team_id' => '91',
            'away_spread' => '-1',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 18:53:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '89',
            'home_spread' => '1',
            'home_score' => '49',
            'away_team_id' => '65',
            'away_spread' => '-1',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:05',
            'updated_at' => '2023-11-11 19:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '67',
            'home_spread' => '2',
            'home_score' => '36',
            'away_team_id' => '104',
            'away_spread' => '-2',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:54:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '68',
            'home_spread' => '3',
            'home_score' => '31',
            'away_team_id' => '113',
            'away_spread' => '-3',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '131',
            'home_spread' => '-4',
            'home_score' => '29',
            'away_team_id' => '72',
            'away_spread' => '4',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '133',
            'home_spread' => '-10',
            'home_score' => '10',
            'away_team_id' => '77',
            'away_spread' => '10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '114',
            'home_spread' => '3',
            'home_score' => '45',
            'away_team_id' => '82',
            'away_spread' => '-3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '101',
            'home_spread' => '3',
            'home_score' => '28',
            'away_team_id' => '88',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 18:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 15:30:00',
            'home_team_id' => '128',
            'home_spread' => '-10',
            'home_score' => '35',
            'away_team_id' => '121',
            'away_spread' => '10',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 19:05:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 16:00:00',
            'home_team_id' => '7',
            'home_spread' => '-3',
            'home_score' => '10',
            'away_team_id' => '10',
            'away_spread' => '3',
            'away_score' => '48',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 19:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 16:00:00',
            'home_team_id' => '18',
            'home_spread' => '-1',
            'home_score' => '42',
            'away_team_id' => '129',
            'away_spread' => '1',
            'away_score' => '39',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 19:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 16:00:00',
            'home_team_id' => '29',
            'home_spread' => '-8',
            'home_score' => '7',
            'away_team_id' => '27',
            'away_spread' => '8',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 19:18:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 17:00:00',
            'home_team_id' => '96',
            'home_spread' => '-11',
            'home_score' => '21',
            'away_team_id' => '8',
            'away_spread' => '11',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 20:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 17:30:00',
            'home_team_id' => '86',
            'home_spread' => '-21',
            'home_score' => '62',
            'away_team_id' => '100',
            'away_spread' => '21',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 20:53:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '39',
            'home_spread' => '-2',
            'home_score' => '14',
            'away_team_id' => '21',
            'away_spread' => '2',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 22:13:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '25',
            'home_spread' => '-4',
            'home_score' => '22',
            'away_team_id' => '93',
            'away_spread' => '4',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 22:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '56',
            'home_spread' => '-13',
            'home_score' => '52',
            'away_team_id' => '30',
            'away_spread' => '13',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:06',
            'updated_at' => '2023-11-11 23:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '34',
            'home_spread' => '-11',
            'home_score' => '52',
            'away_team_id' => '84',
            'away_spread' => '11',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 22:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '57',
            'home_spread' => '3',
            'home_score' => '38',
            'away_team_id' => '35',
            'away_spread' => '-3',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 22:49:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:00:00',
            'home_team_id' => '81',
            'home_spread' => '-13',
            'home_score' => '59',
            'away_team_id' => '130',
            'away_spread' => '13',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 22:49:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:30:00',
            'home_team_id' => '80',
            'home_spread' => '-31',
            'home_score' => '38',
            'away_team_id' => '62',
            'away_spread' => '31',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 22:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:30:00',
            'home_team_id' => '105',
            'home_spread' => '-18',
            'home_score' => '51',
            'away_team_id' => '66',
            'away_spread' => '18',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 23:01:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:30:00',
            'home_team_id' => '123',
            'home_spread' => '-14',
            'home_score' => '34',
            'away_team_id' => '90',
            'away_spread' => '14',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 23:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 19:30:00',
            'home_team_id' => '102',
            'home_spread' => '10',
            'home_score' => '26',
            'away_team_id' => '106',
            'away_spread' => '-10',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 23:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 20:00:00',
            'home_team_id' => '74',
            'home_spread' => '-14',
            'home_score' => '47',
            'away_team_id' => '26',
            'away_spread' => '14',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-11 23:54:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 21:00:00',
            'home_team_id' => '115',
            'home_spread' => '-17',
            'home_score' => '7',
            'away_team_id' => '5',
            'away_spread' => '17',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-12 00:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 21:00:00',
            'home_team_id' => '13',
            'home_spread' => '-25',
            'home_score' => '42',
            'away_team_id' => '71',
            'away_spread' => '25',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-12 01:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 22:00:00',
            'home_team_id' => '17',
            'home_spread' => '8',
            'home_score' => '13',
            'away_team_id' => '43',
            'away_spread' => '-8',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-12 01:38:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 22:15:00',
            'home_team_id' => '85',
            'home_spread' => '-14',
            'home_score' => '36',
            'away_team_id' => '119',
            'away_spread' => '14',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-12 02:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-11 22:30:00',
            'home_team_id' => '94',
            'home_spread' => '1',
            'home_score' => '42',
            'away_team_id' => '33',
            'away_spread' => '-1',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:07',
            'updated_at' => '2023-11-12 02:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-09 20:15:00',
            'home_team_id' => '140',
            'home_spread' => '-4',
            'home_score' => '16',
            'away_team_id' => '139',
            'away_spread' => '4',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-09 23:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 09:30:00',
            'home_team_id' => '156',
            'home_spread' => '2',
            'home_score' => '6',
            'away_team_id' => '148',
            'away_spread' => '-2',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 12:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '137',
            'home_spread' => '-6',
            'home_score' => '31',
            'away_team_id' => '142',
            'away_spread' => '6',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '141',
            'home_spread' => '-7',
            'home_score' => '27',
            'away_team_id' => '147',
            'away_spread' => '7',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 16:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '161',
            'home_spread' => '-3',
            'home_score' => '23',
            'away_team_id' => '146',
            'away_spread' => '3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 16:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '149',
            'home_spread' => '3',
            'home_score' => '3',
            'away_team_id' => '162',
            'away_spread' => '-3',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 16:02:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '155',
            'home_spread' => '3',
            'home_score' => '27',
            'away_team_id' => '157',
            'away_spread' => '-3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 13:00:00',
            'home_team_id' => '164',
            'home_spread' => '-1',
            'home_score' => '20',
            'away_team_id' => '165',
            'away_spread' => '1',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 15:59:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 16:05:00',
            'home_team_id' => '135',
            'home_spread' => '2',
            'home_score' => '25',
            'away_team_id' => '136',
            'away_spread' => '-2',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 19:08:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 16:05:00',
            'home_team_id' => '152',
            'home_spread' => '3',
            'home_score' => '38',
            'away_team_id' => '145',
            'away_spread' => '-3',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 19:04:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 16:25:00',
            'home_team_id' => '143',
            'home_spread' => '-16',
            'home_score' => '49',
            'away_team_id' => '158',
            'away_spread' => '16',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 19:42:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 16:25:00',
            'home_team_id' => '163',
            'home_spread' => '-6',
            'home_score' => '29',
            'away_team_id' => '166',
            'away_spread' => '6',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:08',
            'updated_at' => '2023-11-12 19:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-12 20:20:00',
            'home_team_id' => '151',
            'home_spread' => '2',
            'home_score' => '16',
            'away_team_id' => '159',
            'away_spread' => '-2',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:09',
            'updated_at' => '2023-11-12 23:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '11',
            'start_at' => '2023-11-13 20:15:00',
            'home_team_id' => '138',
            'home_spread' => '-8',
            'home_score' => '22',
            'away_team_id' => '144',
            'away_spread' => '8',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-08 11:00:09',
            'updated_at' => '2023-11-13 23:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-15 19:00:00',
            'home_team_id' => '61',
            'home_spread' => '-9',
            'home_score' => '23',
            'away_team_id' => '16',
            'away_spread' => '9',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-17 21:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-15 19:00:00',
            'home_team_id' => '79',
            'home_spread' => '-11',
            'home_score' => '34',
            'away_team_id' => '19',
            'away_spread' => '11',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-17 21:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-16 19:00:00',
            'home_team_id' => '88',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '14',
            'away_spread' => '3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-17 21:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-17 21:00:00',
            'home_team_id' => '123',
            'home_spread' => '-16',
            'home_score' => '49',
            'away_team_id' => '98',
            'away_spread' => '16',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-18 00:55:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-17 22:30:00',
            'home_team_id' => '129',
            'home_spread' => '-5',
            'home_score' => '56',
            'away_team_id' => '24',
            'away_spread' => '5',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-18 02:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '9',
            'home_spread' => '5',
            'home_score' => '28',
            'away_team_id' => '23',
            'away_spread' => '-5',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-18 15:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '17',
            'home_spread' => '25',
            'home_score' => '24',
            'away_team_id' => '81',
            'away_spread' => '-25',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-18 15:32:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '68',
            'home_spread' => '-3',
            'home_score' => '10',
            'away_team_id' => '27',
            'away_spread' => '3',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:03',
            'updated_at' => '2023-11-18 15:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '29',
            'home_spread' => '10',
            'home_score' => '8',
            'away_team_id' => '111',
            'away_spread' => '-10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '41',
            'home_spread' => '-4',
            'home_score' => '21',
            'away_team_id' => '62',
            'away_spread' => '4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '58',
            'home_spread' => '20',
            'home_score' => '24',
            'away_team_id' => '63',
            'away_spread' => '-20',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:49:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '59',
            'home_spread' => '9',
            'home_score' => '34',
            'away_team_id' => '95',
            'away_spread' => '-9',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '77',
            'home_spread' => '3',
            'home_score' => '23',
            'away_team_id' => '89',
            'away_spread' => '-3',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 12:00:00',
            'home_team_id' => '87',
            'home_spread' => '-21',
            'home_score' => '27',
            'away_team_id' => '91',
            'away_spread' => '21',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 15:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 13:00:00',
            'home_team_id' => '46',
            'home_spread' => '9',
            'home_score' => '27',
            'away_team_id' => '47',
            'away_spread' => '-9',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 22:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 13:00:00',
            'home_team_id' => '51',
            'home_spread' => '-28',
            'home_score' => '49',
            'away_team_id' => '117',
            'away_spread' => '28',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 16:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:00:00',
            'home_team_id' => '45',
            'home_spread' => '-8',
            'home_score' => '23',
            'away_team_id' => '4',
            'away_spread' => '8',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:00:00',
            'home_team_id' => '11',
            'home_spread' => '-12',
            'home_score' => '34',
            'away_team_id' => '49',
            'away_spread' => '12',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:00:00',
            'home_team_id' => '20',
            'home_spread' => '3',
            'home_score' => '7',
            'away_team_id' => '90',
            'away_spread' => '-3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:00:00',
            'home_team_id' => '64',
            'home_spread' => '-8',
            'home_score' => '34',
            'away_team_id' => '122',
            'away_spread' => '8',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:30:00',
            'home_team_id' => '6',
            'home_spread' => '2',
            'home_score' => '42',
            'away_team_id' => '121',
            'away_spread' => '-2',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 14:30:00',
            'home_team_id' => '130',
            'home_spread' => '-7',
            'home_score' => '42',
            'away_team_id' => '21',
            'away_spread' => '7',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:04',
            'updated_at' => '2023-11-18 17:51:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:00:00',
            'home_team_id' => '8',
            'home_spread' => '4',
            'home_score' => '77',
            'away_team_id' => '107',
            'away_spread' => '-4',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:44:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:00:00',
            'home_team_id' => '25',
            'home_spread' => '-11',
            'home_score' => '30',
            'away_team_id' => '70',
            'away_spread' => '11',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:00:00',
            'home_team_id' => '125',
            'home_spread' => '4',
            'home_score' => '30',
            'away_team_id' => '26',
            'away_spread' => '-4',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:00:00',
            'home_team_id' => '112',
            'home_spread' => '3',
            'home_score' => '28',
            'away_team_id' => '75',
            'away_spread' => '-3',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:24:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:00:00',
            'home_team_id' => '113',
            'home_spread' => '-7',
            'home_score' => '34',
            'away_team_id' => '103',
            'away_spread' => '7',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '1',
            'home_spread' => '-3',
            'home_score' => '27',
            'away_team_id' => '118',
            'away_spread' => '3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:00:16',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '102',
            'home_spread' => '-13',
            'home_score' => '42',
            'away_team_id' => '12',
            'away_spread' => '13',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '22',
            'home_spread' => '-7',
            'home_score' => '31',
            'away_team_id' => '74',
            'away_spread' => '7',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:33:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '104',
            'home_spread' => '11',
            'home_score' => '10',
            'away_team_id' => '34',
            'away_spread' => '-11',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '42',
            'home_spread' => '-3',
            'home_score' => '15',
            'away_team_id' => '40',
            'away_spread' => '3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '78',
            'home_spread' => '-25',
            'home_score' => '45',
            'away_team_id' => '127',
            'away_spread' => '25',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 15:30:00',
            'home_team_id' => '119',
            'home_spread' => '-7',
            'home_score' => '20',
            'away_team_id' => '115',
            'away_spread' => '7',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 16:00:00',
            'home_team_id' => '5',
            'home_spread' => '24',
            'home_score' => '13',
            'away_team_id' => '85',
            'away_spread' => '-24',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 16:00:00',
            'home_team_id' => '10',
            'home_spread' => '-24',
            'home_score' => '10',
            'away_team_id' => '72',
            'away_spread' => '24',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 16:00:00',
            'home_team_id' => '39',
            'home_spread' => '7',
            'home_score' => '30',
            'away_team_id' => '82',
            'away_spread' => '-7',
            'away_score' => '43',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 19:39:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 16:00:00',
            'home_team_id' => '80',
            'home_spread' => '-28',
            'home_score' => '37',
            'away_team_id' => '65',
            'away_spread' => '28',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 18:59:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 17:00:00',
            'home_team_id' => '96',
            'home_spread' => '-11',
            'home_score' => '28',
            'away_team_id' => '57',
            'away_spread' => '11',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 20:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 17:00:00',
            'home_team_id' => '108',
            'home_spread' => '-3',
            'home_score' => '24',
            'away_team_id' => '114',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:05',
            'updated_at' => '2023-11-18 20:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 18:00:00',
            'home_team_id' => '35',
            'home_spread' => '-6',
            'home_score' => '17',
            'away_team_id' => '83',
            'away_spread' => '6',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 21:21:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 18:30:00',
            'home_team_id' => '100',
            'home_spread' => '7',
            'home_score' => '15',
            'away_team_id' => '18',
            'away_spread' => '-7',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 22:04:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:00:00',
            'home_team_id' => '120',
            'home_spread' => '4',
            'home_score' => '10',
            'away_team_id' => '13',
            'away_spread' => '-4',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 22:36:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:30:00',
            'home_team_id' => '7',
            'home_spread' => '-29',
            'home_score' => '44',
            'away_team_id' => '31',
            'away_spread' => '29',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 22:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:30:00',
            'home_team_id' => '67',
            'home_spread' => '-11',
            'home_score' => '33',
            'away_team_id' => '30',
            'away_spread' => '11',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:16:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:30:00',
            'home_team_id' => '97',
            'home_spread' => '2',
            'home_score' => '17',
            'away_team_id' => '50',
            'away_spread' => '-2',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:45:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:30:00',
            'home_team_id' => '133',
            'home_spread' => '-5',
            'home_score' => '24',
            'away_team_id' => '69',
            'away_spread' => '5',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-19 00:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 19:30:00',
            'home_team_id' => '86',
            'home_spread' => '-2',
            'home_score' => '20',
            'away_team_id' => '128',
            'away_spread' => '2',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 20:00:00',
            'home_team_id' => '56',
            'home_spread' => '-31',
            'home_score' => '56',
            'away_team_id' => '36',
            'away_spread' => '31',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:34:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 20:00:00',
            'home_team_id' => '37',
            'home_spread' => '-7',
            'home_score' => '31',
            'away_team_id' => '101',
            'away_spread' => '7',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:17:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 20:00:00',
            'home_team_id' => '43',
            'home_spread' => '8',
            'home_score' => '16',
            'away_team_id' => '106',
            'away_spread' => '-8',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-18 23:18:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 22:30:00',
            'home_team_id' => '33',
            'home_spread' => '-23',
            'home_score' => '17',
            'away_team_id' => '71',
            'away_spread' => '23',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-19 02:02:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-18 22:30:00',
            'home_team_id' => '94',
            'home_spread' => '-15',
            'home_score' => '24',
            'away_team_id' => '93',
            'away_spread' => '15',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:06',
            'updated_at' => '2023-11-19 01:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-16 20:16:00',
            'home_team_id' => '137',
            'home_spread' => '-4',
            'home_score' => '34',
            'away_team_id' => '141',
            'away_spread' => '4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-16 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '-4',
            'home_score' => '21',
            'away_team_id' => '135',
            'away_spread' => '4',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 15:54:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '139',
            'home_spread' => '11',
            'home_score' => '10',
            'away_team_id' => '143',
            'away_spread' => '-11',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '145',
            'home_spread' => '-9',
            'home_score' => '31',
            'away_team_id' => '140',
            'away_spread' => '9',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '142',
            'home_spread' => '-2',
            'home_score' => '13',
            'away_team_id' => '161',
            'away_spread' => '2',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 16:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '146',
            'home_spread' => '3',
            'home_score' => '23',
            'away_team_id' => '152',
            'away_spread' => '-3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 16:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '149',
            'home_spread' => '-7',
            'home_score' => '34',
            'away_team_id' => '165',
            'away_spread' => '7',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:07',
            'updated_at' => '2023-11-19 15:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '154',
            'home_spread' => '-12',
            'home_score' => '20',
            'away_team_id' => '151',
            'away_spread' => '12',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 16:12:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 13:01:00',
            'home_team_id' => '166',
            'home_spread' => '-10',
            'home_score' => '19',
            'away_team_id' => '158',
            'away_spread' => '10',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 16:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 16:06:00',
            'home_team_id' => '162',
            'home_spread' => '-11',
            'home_score' => '27',
            'away_team_id' => '164',
            'away_spread' => '11',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 19:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 16:26:00',
            'home_team_id' => '138',
            'home_spread' => '-7',
            'home_score' => '32',
            'away_team_id' => '159',
            'away_spread' => '7',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 19:50:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 16:26:00',
            'home_team_id' => '153',
            'home_spread' => '1',
            'home_score' => '17',
            'away_team_id' => '163',
            'away_spread' => '-1',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 19:34:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-19 20:21:00',
            'home_team_id' => '144',
            'home_spread' => '-2',
            'home_score' => '21',
            'away_team_id' => '155',
            'away_spread' => '2',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-19 23:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '12',
            'start_at' => '2023-11-20 20:16:00',
            'home_team_id' => '150',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '160',
            'away_spread' => '3',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-15 11:00:08',
            'updated_at' => '2023-11-20 23:20:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-23 19:30:00',
            'home_team_id' => '66',
            'home_spread' => '11',
            'home_score' => '7',
            'away_team_id' => '84',
            'away_spread' => '-11',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-23 23:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 12:00:00',
            'home_team_id' => '2',
            'home_spread' => '14',
            'home_score' => '14',
            'away_team_id' => '79',
            'away_spread' => '-14',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 15:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 12:00:00',
            'home_team_id' => '19',
            'home_spread' => '11',
            'home_score' => '17',
            'away_team_id' => '109',
            'away_spread' => '-11',
            'away_score' => '32',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 12:00:00',
            'home_team_id' => '69',
            'home_spread' => '-2',
            'home_score' => '10',
            'away_team_id' => '42',
            'away_spread' => '2',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 15:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 12:00:00',
            'home_team_id' => '103',
            'home_spread' => '12',
            'home_score' => '21',
            'away_team_id' => '59',
            'away_spread' => '-12',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 15:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 12:00:00',
            'home_team_id' => '81',
            'home_spread' => '-10',
            'home_score' => '69',
            'away_team_id' => '102',
            'away_spread' => '10',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 15:53:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 15:30:00',
            'home_team_id' => '71',
            'home_spread' => '7',
            'home_score' => '41',
            'away_team_id' => '120',
            'away_spread' => '-7',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 19:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 15:30:00',
            'home_team_id' => '111',
            'home_spread' => '-3',
            'home_score' => '29',
            'away_team_id' => '123',
            'away_spread' => '3',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:04',
            'updated_at' => '2023-11-24 19:11:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 16:00:00',
            'home_team_id' => '13',
            'home_spread' => '-6',
            'home_score' => '27',
            'away_team_id' => '1',
            'away_spread' => '6',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-24 19:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 16:00:00',
            'home_team_id' => '7',
            'home_spread' => '9',
            'home_score' => '14',
            'away_team_id' => '67',
            'away_spread' => '-9',
            'away_score' => '48',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-24 19:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 19:30:00',
            'home_team_id' => '62',
            'home_spread' => '21',
            'home_score' => '0',
            'away_team_id' => '87',
            'away_spread' => '-21',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-24 22:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 19:30:00',
            'home_team_id' => '106',
            'home_spread' => '-12',
            'home_score' => '57',
            'away_team_id' => '108',
            'away_spread' => '12',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-24 23:31:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 20:30:00',
            'home_team_id' => '85',
            'home_spread' => '-14',
            'home_score' => '31',
            'away_team_id' => '86',
            'away_spread' => '14',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-24 23:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '11',
            'home_spread' => '7',
            'home_score' => '15',
            'away_team_id' => '61',
            'away_spread' => '-7',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '26',
            'home_spread' => '-6',
            'home_score' => '30',
            'away_team_id' => '88',
            'away_spread' => '6',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '114',
            'home_spread' => '-13',
            'home_score' => '27',
            'away_team_id' => '39',
            'away_spread' => '13',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:09:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '89',
            'home_spread' => '-3',
            'home_score' => '35',
            'away_team_id' => '41',
            'away_spread' => '3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '49',
            'home_spread' => '20',
            'home_score' => '27',
            'away_team_id' => '76',
            'away_spread' => '-20',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '55',
            'home_spread' => '-7',
            'home_score' => '31',
            'away_team_id' => '50',
            'away_spread' => '7',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:31:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '56',
            'home_spread' => '-11',
            'home_score' => '42',
            'away_team_id' => '105',
            'away_spread' => '11',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:31:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '63',
            'home_spread' => '-3',
            'home_score' => '30',
            'away_team_id' => '80',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:05',
            'updated_at' => '2023-11-25 15:43:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '95',
            'home_spread' => '-18',
            'home_score' => '59',
            'away_team_id' => '68',
            'away_spread' => '18',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 15:47:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 12:00:00',
            'home_team_id' => '117',
            'home_spread' => '3',
            'home_score' => '18',
            'away_team_id' => '116',
            'away_spread' => '-3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 15:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 13:00:00',
            'home_team_id' => '90',
            'home_spread' => '-4',
            'home_score' => '24',
            'away_team_id' => '29',
            'away_spread' => '4',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 16:06:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 14:00:00',
            'home_team_id' => '27',
            'home_spread' => '-3',
            'home_score' => '27',
            'away_team_id' => '112',
            'away_spread' => '3',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 17:40:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 14:00:00',
            'home_team_id' => '83',
            'home_spread' => '-3',
            'home_score' => '25',
            'away_team_id' => '36',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 17:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 14:00:00',
            'home_team_id' => '75',
            'home_spread' => '-3',
            'home_score' => '45',
            'away_team_id' => '113',
            'away_spread' => '3',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 17:36:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 14:00:00',
            'home_team_id' => '101',
            'home_spread' => '-3',
            'home_score' => '35',
            'away_team_id' => '127',
            'away_spread' => '3',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 17:12:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:00:00',
            'home_team_id' => '121',
            'home_spread' => '-22',
            'home_score' => '23',
            'away_team_id' => '24',
            'away_spread' => '22',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 18:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:00:00',
            'home_team_id' => '31',
            'home_spread' => '11',
            'home_score' => '28',
            'away_team_id' => '131',
            'away_spread' => '-11',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 18:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:00:00',
            'home_team_id' => '118',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '94',
            'away_spread' => '3',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 18:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '10',
            'home_spread' => '15',
            'home_score' => '24',
            'away_team_id' => '3',
            'away_spread' => '-15',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '4',
            'home_spread' => '-9',
            'home_score' => '55',
            'away_team_id' => '35',
            'away_spread' => '9',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 18:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '5',
            'home_spread' => '11',
            'home_score' => '23',
            'away_team_id' => '6',
            'away_spread' => '-11',
            'away_score' => '59',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 19:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '57',
            'home_spread' => '-2',
            'home_score' => '35',
            'away_team_id' => '8',
            'away_spread' => '2',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 19:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '82',
            'home_spread' => '-17',
            'home_score' => '40',
            'away_team_id' => '17',
            'away_spread' => '17',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 19:38:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '23',
            'home_spread' => '10',
            'home_score' => '14',
            'away_team_id' => '45',
            'away_spread' => '-10',
            'away_score' => '56',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:06',
            'updated_at' => '2023-11-25 18:59:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '40',
            'home_spread' => '-6',
            'home_score' => '43',
            'away_team_id' => '77',
            'away_spread' => '6',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '122',
            'home_spread' => '17',
            'home_score' => '28',
            'away_team_id' => '51',
            'away_spread' => '-17',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:00:16',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '91',
            'home_spread' => '2',
            'home_score' => '24',
            'away_team_id' => '58',
            'away_spread' => '-2',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:35:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '65',
            'home_spread' => '3',
            'home_score' => '14',
            'away_team_id' => '133',
            'away_spread' => '-3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 18:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '104',
            'home_spread' => '-26',
            'home_score' => '48',
            'away_team_id' => '124',
            'away_spread' => '26',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 15:30:00',
            'home_team_id' => '125',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '126',
            'away_spread' => '-3',
            'away_score' => '55',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:00:15',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 16:00:00',
            'home_team_id' => '128',
            'home_spread' => '-16',
            'home_score' => '24',
            'away_team_id' => '129',
            'away_spread' => '16',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 19:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:00:00',
            'home_team_id' => '12',
            'home_spread' => '10',
            'home_score' => '31',
            'away_team_id' => '130',
            'away_spread' => '-10',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:00:00',
            'home_team_id' => '30',
            'home_spread' => '7',
            'home_score' => '15',
            'away_team_id' => '32',
            'away_spread' => '-7',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:00:00',
            'home_team_id' => '100',
            'home_spread' => '26',
            'home_score' => '23',
            'away_team_id' => '78',
            'away_spread' => '-26',
            'away_score' => '56',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:00:00',
            'home_team_id' => '107',
            'home_spread' => '7',
            'home_score' => '52',
            'away_team_id' => '96',
            'away_spread' => '-7',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:30:00',
            'home_team_id' => '98',
            'home_spread' => '-6',
            'home_score' => '48',
            'away_team_id' => '20',
            'away_spread' => '6',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 23:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:30:00',
            'home_team_id' => '21',
            'home_spread' => '7',
            'home_score' => '16',
            'away_team_id' => '46',
            'away_spread' => '-7',
            'away_score' => '49',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:47:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:30:00',
            'home_team_id' => '97',
            'home_spread' => '7',
            'home_score' => '7',
            'away_team_id' => '22',
            'away_spread' => '-7',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:07',
            'updated_at' => '2023-11-25 22:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 19:30:00',
            'home_team_id' => '37',
            'home_spread' => '25',
            'home_score' => '23',
            'away_team_id' => '34',
            'away_spread' => '-25',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-25 23:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 20:00:00',
            'home_team_id' => '47',
            'home_spread' => '-10',
            'home_score' => '35',
            'away_team_id' => '43',
            'away_spread' => '10',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-25 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 21:00:00',
            'home_team_id' => '70',
            'home_spread' => '12',
            'home_score' => '6',
            'away_team_id' => '134',
            'away_spread' => '-12',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-26 00:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 22:30:00',
            'home_team_id' => '115',
            'home_spread' => '-9',
            'home_score' => '7',
            'away_team_id' => '18',
            'away_spread' => '9',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-26 01:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-25 22:30:00',
            'home_team_id' => '93',
            'home_spread' => '6',
            'home_score' => '33',
            'away_team_id' => '33',
            'away_spread' => '-6',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-26 01:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-23 12:31:00',
            'home_team_id' => '145',
            'home_spread' => '-8',
            'home_score' => '22',
            'away_team_id' => '146',
            'away_spread' => '8',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-23 15:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-23 16:31:00',
            'home_team_id' => '143',
            'home_spread' => '-11',
            'home_score' => '45',
            'away_team_id' => '166',
            'away_spread' => '11',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-23 19:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-23 20:21:00',
            'home_team_id' => '163',
            'home_spread' => '7',
            'home_score' => '13',
            'away_team_id' => '162',
            'away_spread' => '-7',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-23 23:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-24 15:01:00',
            'home_team_id' => '159',
            'home_spread' => '10',
            'home_score' => '13',
            'away_team_id' => '154',
            'away_spread' => '-10',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-24 18:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '136',
            'home_spread' => '-1',
            'home_score' => '24',
            'away_team_id' => '157',
            'away_spread' => '1',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:08',
            'updated_at' => '2023-11-26 15:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '165',
            'home_spread' => '-4',
            'home_score' => '17',
            'away_team_id' => '139',
            'away_spread' => '4',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 16:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '141',
            'home_spread' => '2',
            'home_score' => '10',
            'away_team_id' => '161',
            'away_spread' => '-2',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 15:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '2',
            'home_score' => '21',
            'away_team_id' => '149',
            'away_spread' => '-2',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 16:11:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '148',
            'home_spread' => '-2',
            'home_score' => '27',
            'away_team_id' => '164',
            'away_spread' => '2',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 16:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 13:01:00',
            'home_team_id' => '158',
            'home_spread' => '4',
            'home_score' => '10',
            'away_team_id' => '156',
            'away_spread' => '-4',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 15:57:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 16:06:00',
            'home_team_id' => '135',
            'home_spread' => '1',
            'home_score' => '14',
            'away_team_id' => '153',
            'away_spread' => '-1',
            'away_score' => '37',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 16:06:00',
            'home_team_id' => '144',
            'home_spread' => '-2',
            'home_score' => '29',
            'away_team_id' => '142',
            'away_spread' => '2',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 19:18:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 16:26:00',
            'home_team_id' => '160',
            'home_spread' => '-3',
            'home_score' => '37',
            'away_team_id' => '138',
            'away_spread' => '3',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 20:07:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 16:26:00',
            'home_team_id' => '151',
            'home_spread' => '10',
            'home_score' => '17',
            'away_team_id' => '150',
            'away_spread' => '-10',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 19:15:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-26 20:21:00',
            'home_team_id' => '152',
            'home_spread' => '4',
            'home_score' => '10',
            'away_team_id' => '137',
            'away_spread' => '-4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-26 23:28:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '13',
            'start_at' => '2023-11-27 20:16:00',
            'home_team_id' => '155',
            'home_spread' => '-4',
            'home_score' => '10',
            'away_team_id' => '140',
            'away_spread' => '4',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-22 11:00:09',
            'updated_at' => '2023-11-27 23:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-01 19:00:00',
            'home_team_id' => '51',
            'home_spread' => '-10',
            'home_score' => '49',
            'away_team_id' => '72',
            'away_spread' => '10',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-01 22:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-01 20:00:00',
            'home_team_id' => '128',
            'home_spread' => '10',
            'home_score' => '34',
            'away_team_id' => '85',
            'away_spread' => '-10',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-01 23:48:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 12:00:00',
            'home_team_id' => '109',
            'home_spread' => '-7',
            'home_score' => '14',
            'away_team_id' => '61',
            'away_spread' => '7',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-02 15:50:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 12:00:00',
            'home_team_id' => '106',
            'home_spread' => '-15',
            'home_score' => '49',
            'away_team_id' => '82',
            'away_spread' => '15',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-02 15:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 15:00:00',
            'home_team_id' => '118',
            'home_spread' => '3',
            'home_score' => '20',
            'away_team_id' => '13',
            'away_spread' => '-3',
            'away_score' => '44',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-02 18:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 16:00:00',
            'home_team_id' => '3',
            'home_spread' => '7',
            'home_score' => '27',
            'away_team_id' => '34',
            'away_spread' => '-7',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:03',
            'updated_at' => '2023-12-02 19:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 16:00:00',
            'home_team_id' => '110',
            'home_spread' => '-6',
            'home_score' => '49',
            'away_team_id' => '4',
            'away_spread' => '6',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-02 19:32:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 16:00:00',
            'home_team_id' => '111',
            'home_spread' => '-4',
            'home_score' => '14',
            'away_team_id' => '95',
            'away_spread' => '4',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-02 19:49:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 20:00:00',
            'home_team_id' => '32',
            'home_spread' => '-3',
            'home_score' => '16',
            'away_team_id' => '55',
            'away_spread' => '3',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-02 23:44:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-02 20:05:00',
            'home_team_id' => '42',
            'home_spread' => '24',
            'home_score' => '0',
            'away_team_id' => '63',
            'away_spread' => '-24',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-02 23:37:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-11-30 20:15:00',
            'home_team_id' => '143',
            'home_spread' => '-9',
            'home_score' => '41',
            'away_team_id' => '163',
            'away_spread' => '9',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-11-30 23:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:00:00',
            'home_team_id' => '161',
            'home_spread' => '-6',
            'home_score' => '10',
            'away_team_id' => '135',
            'away_spread' => '6',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 17:21:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:00:00',
            'home_team_id' => '159',
            'home_spread' => '3',
            'home_score' => '8',
            'away_team_id' => '136',
            'away_spread' => '-3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 16:24:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:00:00',
            'home_team_id' => '157',
            'home_spread' => '5',
            'home_score' => '28',
            'away_team_id' => '145',
            'away_spread' => '-5',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 16:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:00:00',
            'home_team_id' => '165',
            'home_spread' => '2',
            'home_score' => '28',
            'away_team_id' => '148',
            'away_spread' => '-2',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 16:37:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:00:00',
            'home_team_id' => '166',
            'home_spread' => '10',
            'home_score' => '15',
            'away_team_id' => '154',
            'away_spread' => '-10',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 15:53:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '-4',
            'home_score' => '22',
            'away_team_id' => '144',
            'away_spread' => '4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 16:12:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 13:01:00',
            'home_team_id' => '156',
            'home_spread' => '6',
            'home_score' => '0',
            'away_team_id' => '152',
            'away_spread' => '-6',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:04',
            'updated_at' => '2023-12-03 15:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 16:06:00',
            'home_team_id' => '164',
            'home_spread' => '-5',
            'home_score' => '21',
            'away_team_id' => '139',
            'away_spread' => '5',
            'away_score' => '18',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:05',
            'updated_at' => '2023-12-03 19:14:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 16:25:00',
            'home_team_id' => '153',
            'home_spread' => '-4',
            'home_score' => '36',
            'away_team_id' => '142',
            'away_spread' => '4',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:05',
            'updated_at' => '2023-12-03 19:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 16:25:00',
            'home_team_id' => '160',
            'home_spread' => '3',
            'home_score' => '19',
            'away_team_id' => '162',
            'away_spread' => '-3',
            'away_score' => '42',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:05',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-03 20:21:00',
            'home_team_id' => '146',
            'home_spread' => '7',
            'home_score' => '27',
            'away_team_id' => '150',
            'away_spread' => '-7',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:05',
            'updated_at' => '2023-12-03 23:30:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '14',
            'start_at' => '2023-12-04 20:15:00',
            'home_team_id' => '149',
            'home_spread' => '-8',
            'home_score' => '31',
            'away_team_id' => '141',
            'away_spread' => '8',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-11-29 11:00:05',
            'updated_at' => '2023-12-04 23:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-09 15:00:00',
            'home_team_id' => '68',
            'home_spread' => '4',
            'home_score' => '11',
            'away_team_id' => '9',
            'away_spread' => '-4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:04',
            'updated_at' => '2023-12-09 18:38:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-07 20:15:00',
            'home_team_id' => '161',
            'home_spread' => '-6',
            'home_score' => '18',
            'away_team_id' => '156',
            'away_spread' => '6',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-07 23:19:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:00:00',
            'home_team_id' => '140',
            'home_spread' => '4',
            'home_score' => '28',
            'away_team_id' => '145',
            'away_spread' => '-4',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:08:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:00:00',
            'home_team_id' => '141',
            'home_spread' => '2',
            'home_score' => '34',
            'away_team_id' => '148',
            'away_spread' => '-2',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 15:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:00:00',
            'home_team_id' => '159',
            'home_spread' => '6',
            'home_score' => '30',
            'away_team_id' => '147',
            'away_spread' => '-6',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:01:00',
            'home_team_id' => '136',
            'home_spread' => '-3',
            'home_score' => '25',
            'away_team_id' => '164',
            'away_spread' => '3',
            'away_score' => '29',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:01:00',
            'home_team_id' => '137',
            'home_spread' => '-7',
            'home_score' => '37',
            'away_team_id' => '153',
            'away_spread' => '7',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:41:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:01:00',
            'home_team_id' => '157',
            'home_spread' => '-5',
            'home_score' => '28',
            'away_team_id' => '139',
            'away_spread' => '5',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:01:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 13:01:00',
            'home_team_id' => '142',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '149',
            'away_spread' => '3',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 16:46:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 16:05:00',
            'home_team_id' => '151',
            'home_spread' => '3',
            'home_score' => '0',
            'away_team_id' => '155',
            'away_spread' => '-3',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 19:15:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 16:06:00',
            'home_team_id' => '162',
            'home_spread' => '-11',
            'home_score' => '28',
            'away_team_id' => '163',
            'away_spread' => '11',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 19:06:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 16:25:00',
            'home_team_id' => '150',
            'home_spread' => '-3',
            'home_score' => '17',
            'away_team_id' => '138',
            'away_spread' => '3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 19:42:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 16:25:00',
            'home_team_id' => '152',
            'home_spread' => '-3',
            'home_score' => '7',
            'away_team_id' => '144',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 19:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-10 20:21:00',
            'home_team_id' => '143',
            'home_spread' => '-3',
            'home_score' => '33',
            'away_team_id' => '160',
            'away_spread' => '3',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-10 23:31:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-11 20:15:00',
            'home_team_id' => '158',
            'home_spread' => '7',
            'home_score' => '24',
            'away_team_id' => '146',
            'away_spread' => '-7',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '15',
            'start_at' => '2023-12-11 20:16:00',
            'home_team_id' => '154',
            'home_spread' => '-13',
            'home_score' => '27',
            'away_team_id' => '165',
            'away_spread' => '13',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-06 11:00:05',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 11:00:00',
            'home_team_id' => '79',
            'home_spread' => '4',
            'home_score' => '41',
            'away_team_id' => '35',
            'away_spread' => '-4',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-16 17:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 15:30:00',
            'home_team_id' => '4',
            'home_spread' => '-7',
            'home_score' => '13',
            'away_team_id' => '61',
            'away_spread' => '7',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-16 18:51:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 17:45:00',
            'home_team_id' => '33',
            'home_spread' => '4',
            'home_score' => '37',
            'away_team_id' => '72',
            'away_spread' => '-4',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-16 21:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 19:30:00',
            'home_team_id' => '13',
            'home_spread' => '5',
            'home_score' => '22',
            'away_team_id' => '115',
            'away_spread' => '-5',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-16 22:43:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 21:15:00',
            'home_team_id' => '108',
            'home_spread' => '-3',
            'home_score' => '34',
            'away_team_id' => '18',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-17 00:54:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-18 14:30:00',
            'home_team_id' => '83',
            'home_spread' => '-3',
            'home_score' => '35',
            'away_team_id' => '131',
            'away_spread' => '3',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:03',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-14 20:16:00',
            'home_team_id' => '151',
            'home_spread' => '-3',
            'home_score' => '63',
            'away_team_id' => '152',
            'away_spread' => '3',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-14 23:30:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 13:01:00',
            'home_team_id' => '141',
            'home_spread' => '-4',
            'home_score' => '27',
            'away_team_id' => '155',
            'away_spread' => '4',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-16 16:22:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 16:31:00',
            'home_team_id' => '148',
            'home_spread' => '-2',
            'home_score' => '30',
            'away_team_id' => '161',
            'away_spread' => '2',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-16 19:34:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-16 20:16:00',
            'home_team_id' => '145',
            'home_spread' => '-5',
            'home_score' => '42',
            'away_team_id' => '144',
            'away_spread' => '5',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-16 23:19:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:00:00',
            'home_team_id' => '146',
            'home_spread' => '-3',
            'home_score' => '20',
            'away_team_id' => '164',
            'away_spread' => '3',
            'away_score' => '34',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 15:51:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '139',
            'home_spread' => '3',
            'home_score' => '9',
            'away_team_id' => '136',
            'away_spread' => '-3',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 15:49:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '142',
            'home_spread' => '-3',
            'home_score' => '20',
            'away_team_id' => '140',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 16:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '165',
            'home_spread' => '-3',
            'home_score' => '16',
            'away_team_id' => '147',
            'away_spread' => '3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 16:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '156',
            'home_spread' => '10',
            'home_score' => '17',
            'away_team_id' => '150',
            'away_spread' => '-10',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 15:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '154',
            'home_spread' => '-9',
            'home_score' => '30',
            'away_team_id' => '159',
            'away_spread' => '9',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 16:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 13:01:00',
            'home_team_id' => '157',
            'home_spread' => '-6',
            'home_score' => '24',
            'away_team_id' => '158',
            'away_spread' => '6',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 15:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 16:06:00',
            'home_team_id' => '135',
            'home_spread' => '14',
            'home_score' => '29',
            'away_team_id' => '162',
            'away_spread' => '-14',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:04',
            'updated_at' => '2023-12-17 19:11:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 16:06:00',
            'home_team_id' => '153',
            'home_spread' => '-7',
            'home_score' => '28',
            'away_team_id' => '166',
            'away_spread' => '7',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:05',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 16:25:00',
            'home_team_id' => '138',
            'home_spread' => '-2',
            'home_score' => '31',
            'away_team_id' => '143',
            'away_spread' => '2',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:05',
            'updated_at' => '2023-12-17 19:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-17 20:21:00',
            'home_team_id' => '149',
            'home_spread' => '4',
            'home_score' => '7',
            'away_team_id' => '137',
            'away_spread' => '-4',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:05',
            'updated_at' => '2023-12-17 23:26:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '16',
            'start_at' => '2023-12-18 20:16:00',
            'home_team_id' => '163',
            'home_spread' => '4',
            'home_score' => '20',
            'away_team_id' => '160',
            'away_spread' => '-4',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-13 11:00:05',
            'updated_at' => '2023-12-18 23:19:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-21 20:00:00',
            'home_team_id' => '101',
            'home_spread' => '-3',
            'home_score' => '0',
            'away_team_id' => '98',
            'away_spread' => '3',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:03',
            'updated_at' => '2023-12-21 23:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-22 18:30:00',
            'home_team_id' => '114',
            'home_spread' => '-4',
            'home_score' => '17',
            'away_team_id' => '37',
            'away_spread' => '4',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:03',
            'updated_at' => '2023-12-22 22:08:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 12:00:00',
            'home_team_id' => '76',
            'home_spread' => '3',
            'home_score' => '21',
            'away_team_id' => '8',
            'away_spread' => '-3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:03',
            'updated_at' => '2023-12-23 15:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 12:00:00',
            'home_team_id' => '26',
            'home_spread' => '8',
            'home_score' => '17',
            'away_team_id' => '110',
            'away_spread' => '-8',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:03',
            'updated_at' => '2023-12-23 15:14:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 15:30:00',
            'home_team_id' => '1',
            'home_spread' => '3',
            'home_score' => '31',
            'away_team_id' => '45',
            'away_spread' => '-3',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:03',
            'updated_at' => '2023-12-23 18:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 15:30:00',
            'home_team_id' => '120',
            'home_spread' => '-2',
            'home_score' => '22',
            'away_team_id' => '36',
            'away_spread' => '2',
            'away_score' => '45',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:04',
            'updated_at' => '2023-12-23 18:58:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 19:00:00',
            'home_team_id' => '28',
            'home_spread' => '17',
            'home_score' => '10',
            'away_team_id' => '96',
            'away_spread' => '-17',
            'away_score' => '59',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:04',
            'updated_at' => '2023-12-23 22:45:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 19:30:00',
            'home_team_id' => '77',
            'home_spread' => '7',
            'home_score' => '14',
            'away_team_id' => '121',
            'away_spread' => '-7',
            'away_score' => '7',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:04',
            'updated_at' => '2023-12-23 22:42:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 22:30:00',
            'home_team_id' => '94',
            'home_spread' => '-10',
            'home_score' => '14',
            'away_team_id' => '23',
            'away_spread' => '10',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:04',
            'updated_at' => '2023-12-24 02:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-21 20:16:00',
            'home_team_id' => '153',
            'home_spread' => '-4',
            'home_score' => '30',
            'away_team_id' => '157',
            'away_spread' => '4',
            'away_score' => '22',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-21 23:10:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 16:31:00',
            'home_team_id' => '161',
            'home_spread' => '3',
            'home_score' => '34',
            'away_team_id' => '141',
            'away_spread' => '-3',
            'away_score' => '11',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-23 19:29:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-23 20:01:00',
            'home_team_id' => '152',
            'home_spread' => '13',
            'home_score' => '22',
            'away_team_id' => '138',
            'away_spread' => '-13',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-23 23:02:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '136',
            'home_spread' => '-1',
            'home_score' => '29',
            'away_team_id' => '148',
            'away_spread' => '1',
            'away_score' => '10',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:00:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '139',
            'home_spread' => '5',
            'home_score' => '30',
            'away_team_id' => '146',
            'away_spread' => '-5',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:11:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '147',
            'home_spread' => '3',
            'home_score' => '22',
            'away_team_id' => '142',
            'away_spread' => '-3',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:24:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '155',
            'home_spread' => '4',
            'home_score' => '24',
            'away_team_id' => '145',
            'away_spread' => '-4',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:18:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '159',
            'home_spread' => '-3',
            'home_score' => '30',
            'away_team_id' => '166',
            'away_spread' => '3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:34:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 13:01:00',
            'home_team_id' => '165',
            'home_spread' => '3',
            'home_score' => '17',
            'away_team_id' => '163',
            'away_spread' => '-3',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 16:03:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 16:06:00',
            'home_team_id' => '164',
            'home_spread' => '-1',
            'home_score' => '30',
            'away_team_id' => '149',
            'away_spread' => '1',
            'away_score' => '12',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 18:59:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 16:26:00',
            'home_team_id' => '140',
            'home_spread' => '-4',
            'home_score' => '27',
            'away_team_id' => '135',
            'away_spread' => '4',
            'away_score' => '16',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 19:27:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 16:26:00',
            'home_team_id' => '154',
            'home_spread' => '-2',
            'home_score' => '22',
            'away_team_id' => '143',
            'away_spread' => '2',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 19:28:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-24 20:16:00',
            'home_team_id' => '144',
            'home_spread' => '-7',
            'home_score' => '23',
            'away_team_id' => '156',
            'away_spread' => '7',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-24 23:25:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-25 13:01:00',
            'home_team_id' => '150',
            'home_spread' => '-10',
            'home_score' => '14',
            'away_team_id' => '151',
            'away_spread' => '10',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-25 16:05:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-25 16:31:00',
            'home_team_id' => '160',
            'home_spread' => '-12',
            'home_score' => '33',
            'away_team_id' => '158',
            'away_spread' => '12',
            'away_score' => '25',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-25 19:54:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '17',
            'start_at' => '2023-12-25 20:16:00',
            'home_team_id' => '162',
            'home_spread' => '-5',
            'home_score' => '19',
            'away_team_id' => '137',
            'away_spread' => '5',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-20 11:00:05',
            'updated_at' => '2023-12-25 23:35:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-27 14:00:00',
            'home_team_id' => '111',
            'home_spread' => '11',
            'home_score' => '20',
            'away_team_id' => '126',
            'away_spread' => '-11',
            'away_score' => '41',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-27 17:26:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-27 17:30:00',
            'home_team_id' => '74',
            'home_spread' => '6',
            'home_score' => '10',
            'away_team_id' => '130',
            'away_spread' => '-6',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-28 01:52:11',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-27 20:00:00',
            'home_team_id' => '119',
            'home_spread' => '7',
            'home_score' => '42',
            'away_team_id' => '55',
            'away_spread' => '-7',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-27 23:17:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-27 21:00:00',
            'home_team_id' => '82',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '105',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-28 00:24:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-28 11:00:00',
            'home_team_id' => '14',
            'home_spread' => '10',
            'home_score' => '23',
            'away_team_id' => '95',
            'away_spread' => '-10',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-28 14:27:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-28 14:15:00',
            'home_team_id' => '91',
            'home_spread' => '-3',
            'home_score' => '31',
            'away_team_id' => '60',
            'away_spread' => '3',
            'away_score' => '24',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-27 12:03:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-28 17:45:00',
            'home_team_id' => '73',
            'home_spread' => '3',
            'home_score' => '19',
            'away_team_id' => '47',
            'away_spread' => '-3',
            'away_score' => '28',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-27 12:03:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-28 20:15:00',
            'home_team_id' => '142',
            'home_spread' => '-7',
            'home_score' => '37',
            'away_team_id' => '159',
            'away_spread' => '7',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-28 23:23:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-28 21:15:00',
            'home_team_id' => '81',
            'home_spread' => '3',
            'home_score' => '24',
            'away_team_id' => '6',
            'away_spread' => '-3',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-29 00:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-29 12:00:00',
            'home_team_id' => '50',
            'home_spread' => '5',
            'home_score' => '35',
            'away_team_id' => '22',
            'away_spread' => '-5',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-29 15:40:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-29 14:00:00',
            'home_team_id' => '78',
            'home_spread' => '-6',
            'home_score' => '40',
            'away_team_id' => '86',
            'away_spread' => '6',
            'away_score' => '8',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-29 17:17:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-29 15:30:00',
            'home_team_id' => '43',
            'home_spread' => '-10',
            'home_score' => '26',
            'away_team_id' => '59',
            'away_spread' => '10',
            'away_score' => '36',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-29 18:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-29 20:00:00',
            'home_team_id' => '80',
            'home_spread' => '-3',
            'home_score' => '3',
            'away_team_id' => '67',
            'away_spread' => '3',
            'away_score' => '14',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-29 23:29:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-30 12:00:00',
            'home_team_id' => '87',
            'home_spread' => '-4',
            'home_score' => '25',
            'away_team_id' => '84',
            'away_spread' => '4',
            'away_score' => '38',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-30 15:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-30 14:00:00',
            'home_team_id' => '58',
            'home_spread' => '7',
            'home_score' => '31',
            'away_team_id' => '10',
            'away_spread' => '-7',
            'away_score' => '13',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-30 17:29:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-30 16:00:00',
            'home_team_id' => '34',
            'home_spread' => '-19',
            'home_score' => '63',
            'away_team_id' => '32',
            'away_spread' => '19',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:03',
            'updated_at' => '2023-12-27 12:03:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-30 16:30:00',
            'home_team_id' => '134',
            'home_spread' => '-3',
            'home_score' => '16',
            'away_team_id' => '109',
            'away_spread' => '3',
            'away_score' => '15',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-30 19:56:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-30 20:15:00',
            'home_team_id' => '143',
            'home_spread' => '-6',
            'home_score' => '20',
            'away_team_id' => '145',
            'away_spread' => '6',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-30 23:22:05',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:00:00',
            'home_team_id' => '140',
            'home_spread' => '-3',
            'home_score' => '37',
            'away_team_id' => '136',
            'away_spread' => '3',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 16:18:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:00:00',
            'home_team_id' => '138',
            'home_spread' => '-12',
            'home_score' => '27',
            'away_team_id' => '156',
            'away_spread' => '12',
            'away_score' => '21',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 16:01:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:00:00',
            'home_team_id' => '149',
            'home_spread' => '-7',
            'home_score' => '26',
            'away_team_id' => '139',
            'away_spread' => '7',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 15:52:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:00:00',
            'home_team_id' => '147',
            'home_spread' => '-4',
            'home_score' => '26',
            'away_team_id' => '165',
            'away_spread' => '4',
            'away_score' => '3',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 15:42:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:00:00',
            'home_team_id' => '164',
            'home_spread' => '-3',
            'home_score' => '13',
            'away_team_id' => '157',
            'away_spread' => '3',
            'away_score' => '23',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 16:04:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:01:00',
            'home_team_id' => '160',
            'home_spread' => '-10',
            'home_score' => '31',
            'away_team_id' => '135',
            'away_spread' => '10',
            'away_score' => '35',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2023-12-31 15:57:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:01:00',
            'home_team_id' => '137',
            'home_spread' => '-3',
            'home_score' => '56',
            'away_team_id' => '154',
            'away_spread' => '3',
            'away_score' => '19',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 16:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:01:00',
            'home_team_id' => '148',
            'home_spread' => '-4',
            'home_score' => '23',
            'away_team_id' => '151',
            'away_spread' => '4',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 16:01:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:01:00',
            'home_team_id' => '158',
            'home_spread' => '6',
            'home_score' => '25',
            'away_team_id' => '153',
            'away_spread' => '-6',
            'away_score' => '26',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 16:09:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 13:01:00',
            'home_team_id' => '166',
            'home_spread' => '14',
            'home_score' => '10',
            'away_team_id' => '162',
            'away_spread' => '-14',
            'away_score' => '27',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 15:48:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 16:05:00',
            'home_team_id' => '163',
            'home_spread' => '-4',
            'home_score' => '23',
            'away_team_id' => '161',
            'away_spread' => '4',
            'away_score' => '30',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 19:04:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 16:25:00',
            'home_team_id' => '144',
            'home_spread' => '-4',
            'home_score' => '16',
            'away_team_id' => '152',
            'away_spread' => '4',
            'away_score' => '9',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 19:22:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 16:26:00',
            'home_team_id' => '150',
            'home_spread' => '-7',
            'home_score' => '25',
            'away_team_id' => '141',
            'away_spread' => '7',
            'away_score' => '17',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 19:23:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2023-12-31 20:20:00',
            'home_team_id' => '155',
            'home_spread' => '-2',
            'home_score' => '10',
            'away_team_id' => '146',
            'away_spread' => '2',
            'away_score' => '33',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:05',
            'updated_at' => '2023-12-31 23:21:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2024-01-01 12:00:00',
            'home_team_id' => '56',
            'home_spread' => '-10',
            'home_score' => '35',
            'away_team_id' => '133',
            'away_spread' => '10',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2024-01-01 15:39:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2024-01-01 13:00:00',
            'home_team_id' => '104',
            'home_spread' => '-6',
            'home_score' => '35',
            'away_team_id' => '42',
            'away_spread' => '6',
            'away_score' => '0',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2024-01-01 16:17:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2024-01-01 13:00:00',
            'home_team_id' => '85',
            'home_spread' => '-16',
            'home_score' => '45',
            'away_team_id' => '51',
            'away_spread' => '16',
            'away_score' => '6',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2024-01-01 16:13:03',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2024-01-01 17:00:00',
            'home_team_id' => '63',
            'home_spread' => '-1',
            'home_score' => '27',
            'away_team_id' => '3',
            'away_spread' => '1',
            'away_score' => '20',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2024-01-01 20:48:04',
        ]);

        DB::table('games')->insert([
            'week_id' => '18',
            'start_at' => '2024-01-01 20:45:00',
            'home_team_id' => '128',
            'home_spread' => '5',
            'home_score' => '37',
            'away_team_id' => '106',
            'away_spread' => '-5',
            'away_score' => '31',
            'status' => 'Final',
            'is_complete' => '1',
            'created_at' => '2023-12-27 12:03:04',
            'updated_at' => '2024-01-02 00:53:04',
        ]);
    }
}
