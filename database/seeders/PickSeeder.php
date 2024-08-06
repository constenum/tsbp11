<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 1,
            'picks' => '{"5": "62", "21": "133", "26": "18", "33": "40", "44": "22"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-30 12:03:58',
            'updated_at' => '2023-08-30 12:03:58',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 1,
            'picks' => '{"2": "73", "31": "39", "36": "97", "39": "111", "41": "91"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-30 12:37:53',
            'updated_at' => '2023-08-31 07:47:26',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 1,
            'picks' => '{"8": "100", "19": "103", "25": "80", "36": "97", "44": "22"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-08-30 13:11:53',
            'updated_at' => '2023-08-31 18:47:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 1,
            'picks' => '{"5": "62", "25": "80", "37": "3", "41": "91", "44": "22"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-30 13:26:54',
            'updated_at' => '2023-09-02 11:26:16',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 1,
            'picks' => '{"12": "15", "18": "104", "22": "106", "27": "70", "37": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-30 13:46:28',
            'updated_at' => '2023-09-02 09:35:17',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 1,
            'picks' => '{"3": "121", "5": "62", "6": "60", "13": "102", "14": "63"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-30 16:14:39',
            'updated_at' => '2023-09-02 10:56:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 1,
            'picks' => '{"3": "121", "24": "117", "25": "41", "31": "123", "43": "56"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-30 21:16:47',
            'updated_at' => '2023-09-01 19:56:30',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 1,
            'picks' => '{"7": "55", "14": "63", "22": "106", "35": "108", "41": "91"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-08-31 02:46:56',
            'updated_at' => '2023-08-31 10:37:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 1,
            'picks' => '{"2": "116", "4": "69", "23": "131", "26": "75", "33": "109"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-08-31 03:17:10',
            'updated_at' => '2023-09-01 05:00:42',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 1,
            'picks' => '{"5": "19", "8": "100", "10": "50", "14": "27", "18": "125"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-31 07:29:33',
            'updated_at' => '2023-08-31 07:29:33',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 1,
            'picks' => '{"6": "60", "14": "63", "22": "106", "37": "3", "44": "22"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 07:54:22',
            'updated_at' => '2023-08-31 07:54:22',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 1,
            'picks' => '{"3": "121", "5": "62", "6": "60", "18": "104", "44": "22"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-08-31 08:43:20',
            'updated_at' => '2023-09-02 11:28:07',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 1,
            'picks' => '{"4": "65", "13": "102", "14": "63", "25": "80", "43": "32"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-08-31 09:04:32',
            'updated_at' => '2023-09-01 20:48:42',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 1,
            'picks' => '{"13": "102", "20": "128", "21": "133", "42": "86", "43": "56"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 14:14:55',
            'updated_at' => '2023-08-31 14:14:55',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 1,
            'picks' => '{"8": "100", "35": "108", "36": "97", "43": "56", "44": "22"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-08-31 17:13:26',
            'updated_at' => '2023-09-01 15:13:11',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 1,
            'picks' => '{"2": "73", "4": "65", "38": "126", "42": "94", "43": "32"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 19:13:42',
            'updated_at' => '2023-09-01 12:33:28',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 1,
            'picks' => '{"3": "121", "4": "65", "13": "24", "25": "41", "43": "56"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-31 19:39:36',
            'updated_at' => '2023-09-02 10:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 1,
            'picks' => '{"3": "30", "31": "39", "33": "109", "39": "96", "43": "32"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-08-31 19:46:53',
            'updated_at' => '2023-09-01 20:21:51',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 1,
            'picks' => '{"11": "14", "34": "87", "35": "108", "36": "74", "43": "56"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 19:56:46',
            'updated_at' => '2023-08-31 19:56:46',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 1,
            'picks' => '{"20": "13", "27": "119", "34": "87", "35": "108", "42": "94"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 21:21:13',
            'updated_at' => '2023-09-01 22:45:55',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 1,
            'picks' => '{"5": "62", "9": "81", "15": "89", "33": "40", "43": "56"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-08-31 21:29:43',
            'updated_at' => '2023-08-31 21:29:43',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 1,
            'picks' => '{"6": "60", "15": "89", "19": "103", "39": "111", "40": "115"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-01 09:13:51',
            'updated_at' => '2023-09-01 09:14:28',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 1,
            'picks' => '{"6": "60", "16": "42", "22": "106", "40": "115", "44": "22"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-01 14:24:29',
            'updated_at' => '2023-09-01 14:24:29',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 1,
            'picks' => '{"6": "60", "8": "100", "24": "10", "27": "119", "43": "56"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-01 17:48:53',
            'updated_at' => '2023-09-02 11:49:10',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 1,
            'picks' => '{"13": "102", "14": "63", "18": "104", "24": "10", "37": "3"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-01 18:44:00',
            'updated_at' => '2023-09-01 18:44:00',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 1,
            'picks' => '{"12": "15", "15": "89", "36": "74", "40": "115", "43": "56"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-01 19:29:42',
            'updated_at' => '2023-09-01 19:29:42',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 1,
            'picks' => '{"9": "8", "14": "63", "15": "89", "25": "41", "28": "9"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-01 20:30:57',
            'updated_at' => '2023-09-01 20:30:57',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 1,
            'picks' => '{"5": "62", "6": "60", "9": "81", "22": "106", "24": "10"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-01 20:39:55',
            'updated_at' => '2023-09-01 20:39:55',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 1,
            'picks' => '{"8": "38", "18": "104", "20": "128", "26": "75", "35": "134"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-01 22:57:44',
            'updated_at' => '2023-09-01 22:57:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 1,
            'picks' => '{"15": "89", "34": "87", "36": "97", "43": "56", "44": "22"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-02 03:46:22',
            'updated_at' => '2023-09-02 03:46:22',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 1,
            'picks' => '{"11": "14", "20": "128", "21": "133", "36": "74", "39": "111"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-02 06:39:15',
            'updated_at' => '2023-09-02 06:39:15',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 1,
            'picks' => '{"18": "104", "27": "70", "34": "87", "35": "108", "37": "3"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-02 06:42:35',
            'updated_at' => '2023-09-02 06:42:35',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 1,
            'picks' => '{"12": "15", "13": "24", "34": "87", "41": "91", "43": "56"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-02 07:02:48',
            'updated_at' => '2023-09-02 07:02:48',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 1,
            'picks' => '{"11": "76", "13": "102", "15": "33", "35": "108", "44": "22"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-02 08:39:38',
            'updated_at' => '2023-09-02 08:39:38',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 1,
            'picks' => '{"14": "63", "15": "89", "18": "104", "29": "12", "34": "130"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-02 08:45:51',
            'updated_at' => '2023-09-02 08:45:51',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 1,
            'picks' => '{"11": "76", "12": "51", "14": "27", "16": "120", "23": "131"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-02 09:22:41',
            'updated_at' => '2023-09-02 09:23:51',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 1,
            'picks' => '{"26": "75", "30": "25", "31": "123", "35": "134", "39": "96"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-02 10:08:21',
            'updated_at' => '2023-09-02 10:08:21',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 1,
            'picks' => '{"12": "51", "14": "63", "37": "3", "38": "126", "44": "22"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-02 11:07:36',
            'updated_at' => '2023-09-02 11:07:36',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 1,
            'picks' => '{"20": "128", "25": "80", "34": "87", "40": "115", "41": "91"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-02 11:17:21',
            'updated_at' => '2023-09-02 11:17:21',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 2,
            'picks' => '{"52": "78", "69": "52", "81": "133", "101": "160", "103": "159"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-06 11:33:45',
            'updated_at' => '2023-09-06 11:33:45',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 2,
            'picks' => '{"48": "121", "57": "84", "65": "81", "81": "129", "92": "142"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-06 12:00:56',
            'updated_at' => '2023-09-06 12:00:56',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 2,
            'picks' => '{"49": "24", "73": "13", "78": "67", "89": "166", "91": "137"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-06 12:51:29',
            'updated_at' => '2023-09-09 10:36:20',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 2,
            'picks' => '{"55": "60", "65": "81", "73": "13", "75": "59", "89": "166"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-06 12:55:33',
            'updated_at' => '2023-09-09 00:02:32',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 2,
            'picks' => '{"45": "46", "49": "24", "73": "114", "79": "66", "87": "100"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-06 13:06:36',
            'updated_at' => '2023-09-06 13:06:36',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 2,
            'picks' => '{"51": "110", "57": "111", "83": "93", "86": "18", "97": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-06 14:30:12',
            'updated_at' => '2023-09-08 20:03:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 2,
            'picks' => '{"47": "34", "50": "45", "51": "47", "93": "149", "101": "156"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-06 14:50:46',
            'updated_at' => '2023-09-06 14:50:46',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 2,
            'picks' => '{"49": "24", "68": "51", "77": "39", "80": "58", "83": "93"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-06 15:44:15',
            'updated_at' => '2023-09-07 14:53:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 2,
            'picks' => '{"48": "121", "65": "81", "87": "119", "91": "137", "100": "163"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-06 20:55:10',
            'updated_at' => '2023-09-09 09:52:29',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 2,
            'picks' => '{"51": "47", "53": "126", "76": "36", "79": "66", "97": "140"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-07 10:03:49',
            'updated_at' => '2023-09-07 10:03:49',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 2,
            'picks' => '{"49": "24", "56": "63", "65": "81", "72": "3", "88": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-07 10:25:10',
            'updated_at' => '2023-09-07 10:25:10',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 2,
            'picks' => '{"65": "81", "81": "133", "88": "150", "91": "137", "101": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 11:42:23',
            'updated_at' => '2023-09-07 11:42:23',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 2,
            'picks' => '{"49": "24", "52": "78", "81": "133", "89": "166", "93": "149"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 14:00:36',
            'updated_at' => '2023-09-07 18:50:22',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 2,
            'picks' => '{"48": "121", "62": "27", "73": "13", "84": "32", "88": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-07 15:41:01',
            'updated_at' => '2023-09-08 15:44:49',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 2,
            'picks' => '{"48": "121", "49": "24", "65": "81", "88": "145", "101": "160"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-07 16:08:28',
            'updated_at' => '2023-09-09 10:16:23',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 2,
            'picks' => '{"52": "78", "65": "81", "74": "85", "92": "141", "94": "155"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 16:26:53',
            'updated_at' => '2023-09-07 16:26:53',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 2,
            'picks' => '{"60": "123", "65": "81", "70": "21", "84": "32", "97": "140"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 17:41:38',
            'updated_at' => '2023-09-09 11:37:45',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 2,
            'picks' => '{"54": "43", "74": "108", "81": "129", "88": "145", "92": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 17:49:08',
            'updated_at' => '2023-09-08 21:50:35',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 2,
            'picks' => '{"48": "12", "52": "73", "88": "145", "98": "151", "102": "158"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-07 18:33:06',
            'updated_at' => '2023-09-09 11:43:38',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 2,
            'picks' => '{"52": "78", "56": "63", "65": "81", "72": "3", "84": "32"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-08 07:40:51',
            'updated_at' => '2023-09-08 07:40:51',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 2,
            'picks' => '{"48": "121", "52": "78", "74": "85", "85": "82", "100": "163"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-08 10:29:50',
            'updated_at' => '2023-09-08 10:29:50',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 2,
            'picks' => '{"48": "121", "52": "78", "59": "61", "65": "81", "84": "32"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-08 11:51:13',
            'updated_at' => '2023-09-09 11:27:48',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 2,
            'picks' => '{"57": "111", "89": "166", "91": "137", "94": "155", "101": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-08 12:14:24',
            'updated_at' => '2023-09-08 12:14:24',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 2,
            'picks' => '{"52": "78", "56": "118", "65": "81", "94": "155", "97": "140"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-08 14:36:50',
            'updated_at' => '2023-09-08 14:39:46',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 2,
            'picks' => '{"49": "24", "52": "78", "74": "85", "89": "166", "101": "160"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-08 14:45:21',
            'updated_at' => '2023-09-08 19:52:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 2,
            'picks' => '{"48": "121", "49": "24", "57": "84", "84": "32", "92": "142"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-08 16:34:00',
            'updated_at' => '2023-09-08 16:34:00',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 2,
            'picks' => '{"49": "69", "52": "78", "81": "133", "93": "149", "101": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-08 19:33:01',
            'updated_at' => '2023-09-08 19:33:01',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 2,
            'picks' => '{"46": "127", "49": "24", "52": "78", "55": "105", "62": "57"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-08 20:17:23',
            'updated_at' => '2023-09-08 20:17:23',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 2,
            'picks' => '{"47": "34", "65": "81", "84": "32", "86": "10", "92": "141"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-08 21:17:53',
            'updated_at' => '2023-09-08 21:17:53',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 2,
            'picks' => '{"49": "24", "61": "7", "83": "93", "87": "119", "94": "155"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-08 21:42:20',
            'updated_at' => '2023-09-08 21:42:20',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 2,
            'picks' => '{"75": "8", "83": "115", "84": "99", "87": "100", "92": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-09 06:48:24',
            'updated_at' => '2023-09-09 06:48:24',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 2,
            'picks' => '{"46": "127", "52": "78", "55": "105", "84": "99", "85": "82"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-09 08:11:01',
            'updated_at' => '2023-09-09 08:11:01',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 2,
            'picks' => '{"48": "121", "68": "72", "74": "85", "79": "66", "100": "163"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-09 08:38:35',
            'updated_at' => '2023-09-09 10:54:25',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 2,
            'picks' => '{"48": "121", "49": "24", "91": "137", "93": "149", "94": "155"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-09 09:27:34',
            'updated_at' => '2023-09-09 09:27:34',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 2,
            'picks' => '{"47": "34", "61": "7", "65": "81", "78": "67", "84": "32"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-09 09:53:39',
            'updated_at' => '2023-09-09 09:53:39',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 2,
            'picks' => '{"49": "24", "52": "78", "91": "137", "101": "160", "102": "158"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-09 09:56:38',
            'updated_at' => '2023-09-09 09:57:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 2,
            'picks' => '{"52": "78", "53": "126", "72": "3", "101": "160", "103": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-09 10:06:14',
            'updated_at' => '2023-09-09 10:06:14',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 2,
            'picks' => '{"46": "127", "47": "34", "51": "47", "52": "78", "61": "7"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-09 10:06:44',
            'updated_at' => '2023-09-09 10:06:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 2,
            'picks' => '{"48": "121", "49": "24", "52": "78", "53": "126", "79": "66"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-09 10:44:09',
            'updated_at' => '2023-09-09 11:53:30',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 1,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-09 14:55:59',
            'updated_at' => '2023-09-09 14:55:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 2,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-09 16:24:19',
            'updated_at' => '2023-09-09 16:24:19',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 3,
            'picks' => '{"119": "3", "121": "26", "124": "42", "162": "140", "167": "158"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-13 11:49:46',
            'updated_at' => '2023-09-17 19:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 3,
            'picks' => '{"113": "43", "114": "47", "125": "74", "135": "104", "152": "71"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-13 17:06:09',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 3,
            'picks' => '{"129": "80", "148": "101", "154": "24", "163": "145", "165": "150"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-13 18:17:58',
            'updated_at' => '2023-09-17 16:15:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 3,
            'picks' => '{"110": "133", "111": "87", "132": "128", "139": "69", "173": "142"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-13 19:56:06',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 3,
            'picks' => '{"111": "87", "120": "4", "134": "21", "145": "15", "166": "152"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-13 20:17:09',
            'updated_at' => '2023-09-17 16:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 3,
            'picks' => '{"115": "66", "125": "74", "151": "102", "163": "163", "171": "156"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-13 20:19:18',
            'updated_at' => '2023-09-17 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 3,
            'picks' => '{"108": "32", "119": "3", "123": "34", "127": "86", "134": "21"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-13 20:39:53',
            'updated_at' => '2023-09-16 22:55:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 3,
            'picks' => '{"104": "59", "118": "78", "119": "3", "141": "109", "153": "134"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-14 10:24:59',
            'updated_at' => '2023-09-16 23:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 3,
            'picks' => '{"108": "32", "111": "87", "119": "3", "126": "81", "149": "22"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-14 10:37:16',
            'updated_at' => '2023-09-16 23:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 3,
            'picks' => '{"122": "31", "135": "30", "147": "130", "157": "6", "160": "136"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-09-14 12:20:26',
            'updated_at' => '2023-09-17 16:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 3,
            'picks' => '{"104": "59", "111": "87", "113": "43", "121": "26", "125": "74"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-14 13:30:12',
            'updated_at' => '2023-09-16 18:55:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 3,
            'picks' => '{"110": "133", "126": "81", "164": "148", "168": "153", "171": "154"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-09-14 14:40:25',
            'updated_at' => '2023-09-17 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 3,
            'picks' => '{"128": "91", "158": "160", "161": "137", "163": "145", "173": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-14 16:52:10',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 3,
            'picks' => '{"104": "59", "140": "82", "141": "109", "145": "15", "173": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-14 19:13:05',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 3,
            'picks' => '{"104": "68", "106": "58", "114": "47", "127": "86", "155": "33"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-14 19:29:19',
            'updated_at' => '2023-09-17 02:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 3,
            'picks' => '{"135": "104", "139": "69", "145": "15", "154": "24", "160": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-14 20:32:47',
            'updated_at' => '2023-09-17 16:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 3,
            'picks' => '{"104": "68", "119": "3", "143": "50", "149": "22", "157": "6"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-14 19:10:26',
            'updated_at' => '2023-09-17 02:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 3,
            'picks' => '{"109": "16", "111": "40", "135": "30", "143": "50", "152": "71"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-15 08:29:38',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 3,
            'picks' => '{"113": "79", "125": "74", "147": "130", "161": "141", "170": "144"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 12:13:10',
            'updated_at' => '2023-09-17 19:50:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 3,
            'picks' => '{"109": "51", "120": "4", "121": "26", "122": "31", "138": "53"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-15 13:17:06',
            'updated_at' => '2023-09-16 22:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 3,
            'picks' => '{"121": "26", "125": "74", "134": "21", "148": "89", "157": "6"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 14:28:18',
            'updated_at' => '2023-09-17 02:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 3,
            'picks' => '{"115": "66", "117": "28", "132": "62", "141": "109", "151": "39"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-15 14:51:07',
            'updated_at' => '2023-09-16 23:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 3,
            'picks' => '{"106": "58", "127": "86", "134": "21", "141": "109", "154": "24"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-15 15:10:11',
            'updated_at' => '2023-09-17 02:30:09',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 3,
            'picks' => '{"110": "133", "111": "87", "135": "104", "165": "150", "171": "154"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-15 15:14:32',
            'updated_at' => '2023-09-17 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 3,
            'picks' => '{"106": "58", "111": "87", "121": "26", "166": "152", "173": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 16:25:13',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 3,
            'picks' => '{"118": "19", "123": "97", "129": "80", "132": "128", "173": "142"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-15 18:02:40',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 3,
            'picks' => '{"106": "58", "120": "4", "121": "26", "124": "132", "148": "89"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 18:06:53',
            'updated_at' => '2023-09-16 23:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 3,
            'picks' => '{"111": "87", "112": "41", "129": "80", "151": "102", "154": "24"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-15 18:15:20',
            'updated_at' => '2023-09-17 02:30:09',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 3,
            'picks' => '{"111": "87", "114": "47", "125": "74", "135": "104", "151": "102"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 19:12:37',
            'updated_at' => '2023-09-16 23:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 3,
            'picks' => '{"110": "133", "111": "87", "135": "104", "165": "150", "173": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-15 20:58:09',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 3,
            'picks' => '{"109": "51", "114": "47", "115": "66", "124": "132", "144": "7"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-15 22:01:45',
            'updated_at' => '2023-09-16 23:15:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 3,
            'picks' => '{"154": "24", "160": "146", "163": "145", "164": "148", "165": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-16 07:29:30',
            'updated_at' => '2023-09-17 16:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 3,
            'picks' => '{"111": "87", "125": "74", "149": "22", "154": "24", "167": "158"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-16 08:27:34',
            'updated_at' => '2023-09-17 19:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 3,
            'picks' => '{"108": "32", "118": "78", "160": "146", "165": "150", "166": "152"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-16 09:20:28',
            'updated_at' => '2023-09-17 16:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 3,
            'picks' => '{"113": "79", "123": "34", "129": "80", "154": "24", "173": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-16 09:30:48',
            'updated_at' => '2023-09-18 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 3,
            'picks' => '{"115": "56", "125": "74", "135": "30", "160": "146", "172": "139"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-16 09:54:30',
            'updated_at' => '2023-09-18 22:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 3,
            'picks' => '{"129": "131", "132": "128", "153": "134", "167": "158", "170": "144"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-16 10:35:27',
            'updated_at' => '2023-09-17 19:50:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 3,
            'picks' => '{"118": "78", "120": "4", "140": "82", "141": "109", "154": "25"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-16 11:40:25',
            'updated_at' => '2023-09-17 02:30:09',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 3,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-16 22:27:40',
            'updated_at' => '2023-09-16 22:27:40',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 3,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-16 22:27:40',
            'updated_at' => '2023-09-16 22:27:40',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 4,
            'picks' => '{"192": "46", "195": "85", "197": "40", "200": "60", "232": "162"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-20 13:56:35',
            'updated_at' => '2023-09-23 23:42:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 4,
            'picks' => '{"181": "21", "222": "65", "229": "119", "230": "128", "232": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-20 20:34:23',
            'updated_at' => '2023-09-24 02:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 4,
            'picks' => '{"181": "81", "203": "121", "222": "65", "227": "74", "246": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-20 20:49:47',
            'updated_at' => '2023-09-25 22:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 4,
            'picks' => '{"196": "116", "199": "58", "240": "156", "244": "140", "247": "141"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-20 21:17:52',
            'updated_at' => '2023-09-25 23:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 4,
            'picks' => '{"174": "23", "181": "21", "206": "104", "217": "41", "237": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-20 21:46:19',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 4,
            'picks' => '{"182": "32", "192": "17", "209": "37", "210": "4", "226": "114"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-21 08:11:40',
            'updated_at' => '2023-09-23 23:46:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 4,
            'picks' => '{"181": "81", "203": "121", "224": "78", "232": "162", "233": "145"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-21 10:26:56',
            'updated_at' => '2023-09-24 15:59:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 4,
            'picks' => '{"174": "23", "175": "89", "178": "93", "202": "130", "206": "104"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-21 19:06:22',
            'updated_at' => '2023-09-23 19:30:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 4,
            'picks' => '{"182": "32", "195": "24", "219": "113"}',
            'pick_count' => 3,
            'wins' => 2,
            'losses' => 1,
            'created_at' => '2023-09-21 19:36:46',
            'updated_at' => '2023-09-23 23:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 4,
            'picks' => '{"187": "102", "206": "104", "232": "162", "237": "146", "239": "155"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-21 19:41:16',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 4,
            'picks' => '{"181": "81", "191": "3", "202": "130", "213": "30", "220": "87"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-21 20:16:38',
            'updated_at' => '2023-09-23 22:50:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 4,
            'picks' => '{"195": "24", "199": "58", "227": "74", "242": "163", "244": "150"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-21 22:13:38',
            'updated_at' => '2023-09-24 19:41:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 4,
            'picks' => '{"175": "133", "177": "1", "188": "131", "203": "121", "209": "127"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-22 08:26:51',
            'updated_at' => '2023-09-23 22:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 4,
            'picks' => '{"184": "57", "191": "84", "199": "58", "220": "42", "236": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 08:33:13',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 4,
            'picks' => '{"181": "81", "182": "32", "187": "102", "203": "121", "227": "74"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-22 08:34:41',
            'updated_at' => '2023-09-23 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 4,
            'picks' => '{"184": "57", "185": "63", "189": "132", "233": "145", "237": "146"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 08:48:36',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 4,
            'picks' => '{"176": "73", "199": "58", "203": "121", "222": "65", "224": "78"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 09:06:20',
            'updated_at' => '2023-09-23 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 4,
            'picks' => '{"175": "133", "176": "73", "177": "94", "178": "93", "224": "80"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-22 09:39:16',
            'updated_at' => '2023-09-23 22:55:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 4,
            'picks' => '{"203": "121", "216": "129", "217": "41", "228": "118", "237": "146"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 09:43:20',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 4,
            'picks' => '{"182": "32", "195": "24", "199": "58", "207": "96", "216": "86"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-22 11:14:18',
            'updated_at' => '2023-09-23 22:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 4,
            'picks' => '{"176": "73", "196": "26", "207": "96", "243": "143", "244": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-22 12:31:52',
            'updated_at' => '2023-09-24 19:23:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 4,
            'picks' => '{"175": "133", "176": "73", "177": "1", "208": "51", "209": "127"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 14:27:05',
            'updated_at' => '2023-09-23 22:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 4,
            'picks' => '{"175": "133", "190": "35", "209": "127", "227": "74", "228": "118"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-22 15:30:49',
            'updated_at' => '2023-09-24 00:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 4,
            'picks' => '{"186": "76", "203": "121", "209": "127", "221": "67", "239": "155"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-22 15:48:45',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 4,
            'picks' => '{"175": "133", "182": "32", "206": "104", "235": "166", "247": "141"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-22 18:43:07',
            'updated_at' => '2023-09-25 23:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 4,
            'picks' => '{"175": "133", "177": "1", "185": "91", "199": "58", "224": "80"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 18:59:26',
            'updated_at' => '2023-09-23 22:55:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 4,
            'picks' => '{"175": "133", "176": "73", "178": "13", "210": "134", "224": "78"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-22 19:02:33',
            'updated_at' => '2023-09-23 22:55:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 4,
            'picks' => '{"191": "3", "195": "24", "228": "118", "235": "138", "238": "149"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 19:26:02',
            'updated_at' => '2023-09-24 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 4,
            'picks' => '{"182": "32", "194": "79", "196": "26", "218": "106", "222": "65"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-22 21:29:03',
            'updated_at' => '2023-09-23 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 4,
            'picks' => '{"191": "84", "192": "17", "210": "134", "217": "41", "225": "120"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-22 22:16:48',
            'updated_at' => '2023-09-23 23:51:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 4,
            'picks' => '{"181": "81", "182": "32", "203": "121", "220": "87", "229": "119"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-22 22:26:16',
            'updated_at' => '2023-09-24 02:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 4,
            'picks' => '{"181": "81", "182": "32", "196": "26", "243": "143", "244": "150"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-23 08:33:24',
            'updated_at' => '2023-09-24 19:23:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 4,
            'picks' => '{"183": "124", "210": "134", "218": "12", "221": "59", "239": "155"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-23 09:28:33',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 4,
            'picks' => '{"182": "32", "195": "24", "227": "74", "235": "138", "247": "141"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-23 10:10:36',
            'updated_at' => '2023-09-25 23:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 4,
            'picks' => '{"183": "50", "233": "145", "236": "154", "242": "163", "244": "150"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-09-23 10:40:09',
            'updated_at' => '2023-09-24 19:41:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 4,
            'picks' => '{"191": "84", "214": "64", "223": "66", "231": "33", "237": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-23 11:18:42',
            'updated_at' => '2023-09-24 16:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 4,
            'picks' => '{"194": "79", "203": "115", "210": "134", "223": "97", "229": "5"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-23 11:47:55',
            'updated_at' => '2023-09-24 02:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 4,
            'picks' => '{"182": "32", "185": "91", "192": "17", "223": "97", "229": "119"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-23 11:53:28',
            'updated_at' => '2023-09-24 02:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 4,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-26 16:37:50',
            'updated_at' => '2023-09-26 16:37:50',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 4,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-09-26 16:37:50',
            'updated_at' => '2023-09-26 16:37:50',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 5,
            'picks' => '{"282": "56", "286": "36", "289": "78", "301": "154", "304": "141"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-27 11:39:57',
            'updated_at' => '2023-10-01 16:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 5,
            'picks' => '{"251": "121", "252": "17", "258": "45", "271": "108", "274": "46"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-27 11:40:40',
            'updated_at' => '2023-09-30 18:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 5,
            'picks' => '{"253": "2", "262": "19", "271": "108", "284": "35", "289": "78"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-27 11:44:56',
            'updated_at' => '2023-09-30 23:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 5,
            'picks' => '{"249": "112", "258": "45", "272": "89", "282": "56", "292": "1"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-27 13:59:52',
            'updated_at' => '2023-09-30 22:57:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 5,
            'picks' => '{"252": "17", "298": "145", "306": "153", "308": "160", "312": "150"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-27 17:40:04',
            'updated_at' => '2023-10-01 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 5,
            'picks' => '{"258": "96", "267": "34", "287": "43", "301": "154", "306": "153"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-27 21:00:03',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 5,
            'picks' => '{"259": "87", "276": "63", "300": "142", "304": "141", "308": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-27 21:06:09',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 5,
            'picks' => '{"255": "22", "267": "34", "276": "69", "283": "85", "289": "78"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-28 09:11:02',
            'updated_at' => '2023-09-30 23:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 5,
            'picks' => '{"248": "131", "266": "8", "287": "81", "295": "3", "296": "128"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-28 09:19:00',
            'updated_at' => '2023-10-01 01:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 5,
            'picks' => '{"251": "86", "274": "46", "289": "78", "298": "145", "304": "141"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-28 09:41:44',
            'updated_at' => '2023-10-01 15:51:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 5,
            'picks' => '{"262": "19", "282": "56", "289": "78", "298": "145", "304": "141"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-28 13:19:44',
            'updated_at' => '2023-10-01 15:51:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 5,
            'picks' => '{"256": "24", "276": "63", "291": "104", "294": "102", "300": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-28 16:22:33',
            'updated_at' => '2023-10-01 16:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 5,
            'picks' => '{"248": "131", "249": "112", "253": "2", "258": "45", "267": "34"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-28 16:28:27',
            'updated_at' => '2023-09-30 18:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 5,
            'picks' => '{"251": "121", "276": "63", "291": "97", "295": "3", "298": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-28 17:25:31',
            'updated_at' => '2023-10-01 00:24:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 5,
            'picks' => '{"248": "131", "249": "112", "255": "22", "292": "1", "296": "128"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-28 18:21:11',
            'updated_at' => '2023-10-01 01:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 5,
            'picks' => '{"248": "131", "252": "21", "257": "50", "293": "88", "308": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-28 18:30:08',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 5,
            'picks' => '{"251": "121", "273": "58", "276": "63", "296": "128", "297": "33"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-28 20:08:46',
            'updated_at' => '2023-10-01 02:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 5,
            'picks' => '{"279": "59", "291": "97", "292": "1", "293": "88", "313": "158"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 08:06:42',
            'updated_at' => '2023-10-02 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 5,
            'picks' => '{"276": "63", "282": "56", "287": "81", "289": "78", "295": "3"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-29 09:23:35',
            'updated_at' => '2023-10-01 00:24:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 5,
            'picks' => '{"277": "68", "300": "142", "301": "138", "307": "157", "308": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 09:50:51',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 5,
            'picks' => '{"259": "87", "273": "58", "275": "57", "281": "134", "297": "33"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 11:27:09',
            'updated_at' => '2023-10-01 02:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 5,
            'picks' => '{"267": "34", "279": "59", "292": "1", "296": "128", "297": "33"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 12:22:19',
            'updated_at' => '2023-10-01 02:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 5,
            'picks' => '{"252": "21", "255": "22", "274": "106", "276": "63", "294": "102"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-29 12:37:15',
            'updated_at' => '2023-09-30 23:49:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 5,
            'picks' => '{"256": "119", "257": "30", "267": "34", "276": "63", "301": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 12:39:38',
            'updated_at' => '2023-10-01 16:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 5,
            'picks' => '{"256": "119", "267": "34", "276": "63", "283": "85", "287": "81"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-29 12:39:49',
            'updated_at' => '2023-09-30 22:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 5,
            'picks' => '{"253": "2", "275": "57", "288": "20", "304": "141", "308": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 13:32:32',
            'updated_at' => '2023-10-01 16:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 5,
            'picks' => '{"263": "14", "269": "114", "273": "58", "275": "57", "278": "109"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-29 14:30:03',
            'updated_at' => '2023-09-30 19:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 5,
            'picks' => '{"257": "30", "282": "84", "295": "66", "300": "142", "305": "147"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-29 20:12:44',
            'updated_at' => '2023-10-01 16:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 5,
            'picks' => '{"273": "58", "274": "46", "276": "63", "296": "128", "301": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-29 20:50:27',
            'updated_at' => '2023-10-01 16:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 5,
            'picks' => '{"252": "21", "257": "50", "289": "78", "290": "42", "311": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-29 21:20:33',
            'updated_at' => '2023-10-01 19:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 5,
            'picks' => '{"289": "78", "299": "149", "302": "155", "305": "161", "311": "143"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-29 21:59:10',
            'updated_at' => '2023-10-01 19:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 5,
            'picks' => '{"256": "24", "257": "30", "281": "134", "292": "1", "313": "163"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-29 22:00:02',
            'updated_at' => '2023-10-02 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 5,
            'picks' => '{"257": "30", "272": "40", "278": "109", "287": "81", "313": "163"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-29 22:59:15',
            'updated_at' => '2023-10-02 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 5,
            'picks' => '{"304": "141", "306": "153", "308": "160", "309": "152", "312": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-09-30 07:49:29',
            'updated_at' => '2023-10-01 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 5,
            'picks' => '{"282": "56", "295": "3", "304": "141", "305": "161", "313": "158"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-30 08:49:42',
            'updated_at' => '2023-10-02 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 5,
            'picks' => '{"271": "108", "274": "106", "282": "56", "289": "78", "291": "104"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-30 09:28:58',
            'updated_at' => '2023-09-30 23:09:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 5,
            'picks' => '{"289": "78", "299": "149", "302": "155", "308": "160", "311": "156"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-30 10:07:23',
            'updated_at' => '2023-10-01 19:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 5,
            'picks' => '{"260": "111", "289": "78", "300": "142", "308": "160", "312": "150"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-09-30 11:22:53',
            'updated_at' => '2023-10-01 23:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 5,
            'picks' => '{"269": "114", "272": "89", "273": "58", "289": "78", "297": "33"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-09-30 11:26:42',
            'updated_at' => '2023-10-01 02:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 5,
            'picks' => '{"255": "101", "264": "61", "294": "130", "296": "6", "299": "149"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-09-30 11:47:09',
            'updated_at' => '2023-10-01 12:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 6,
            'picks' => '{"320": "80", "322": "106", "329": "3", "334": "42", "347": "78"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-04 13:10:34',
            'updated_at' => '2023-10-07 23:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 6,
            'picks' => '{"357": "149", "363": "157", "364": "141", "367": "150", "369": "146"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-04 14:21:58',
            'updated_at' => '2023-10-09 23:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 6,
            'picks' => '{"322": "106", "340": "46", "356": "166", "357": "138", "359": "137"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-04 18:57:43',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 6,
            'picks' => '{"319": "67", "320": "80", "327": "115", "332": "22", "348": "63"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-04 21:32:03',
            'updated_at' => '2023-10-07 22:46:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 6,
            'picks' => '{"320": "58", "327": "129", "343": "112", "349": "108", "353": "102"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-05 08:16:22',
            'updated_at' => '2023-10-07 23:22:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 6,
            'picks' => '{"322": "106", "327": "115", "336": "68", "343": "29", "368": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-05 09:01:51',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 6,
            'picks' => '{"347": "78", "348": "63", "357": "138", "361": "148", "365": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 09:05:55',
            'updated_at' => '2023-10-08 19:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 6,
            'picks' => '{"315": "131", "324": "109", "328": "76", "342": "90", "345": "50"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-05 09:43:43',
            'updated_at' => '2023-10-07 22:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 6,
            'picks' => '{"315": "131", "324": "109", "342": "90", "345": "50", "355": "6"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-05 10:09:04',
            'updated_at' => '2023-10-08 02:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 6,
            'picks' => '{"319": "67", "320": "58", "322": "81", "323": "133", "329": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-05 10:47:51',
            'updated_at' => '2023-10-07 18:59:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 6,
            'picks' => '{"338": "8", "348": "63", "349": "108", "355": "6", "368": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 12:45:59',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 6,
            'picks' => '{"319": "56", "327": "129", "329": "3", "337": "74", "347": "78"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 14:01:43',
            'updated_at' => '2023-10-07 23:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 6,
            'picks' => '{"347": "78", "348": "63", "355": "119", "364": "141", "366": "159"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 14:09:23',
            'updated_at' => '2023-10-08 19:30:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 6,
            'picks' => '{"327": "129", "337": "74", "357": "138", "358": "147", "361": "148"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-05 14:13:22',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 6,
            'picks' => '{"317": "40", "319": "56", "320": "80", "344": "24", "357": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-05 16:53:39',
            'updated_at' => '2023-10-08 12:56:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 6,
            'picks' => '{"322": "106", "329": "3", "330": "28", "340": "46", "366": "144"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 19:00:30',
            'updated_at' => '2023-10-08 19:30:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 6,
            'picks' => '{"356": "166", "357": "138", "365": "160", "366": "159", "367": "150"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-05 19:11:48',
            'updated_at' => '2023-10-08 19:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 6,
            'picks' => '{"322": "106", "329": "3", "337": "74", "340": "46", "348": "63"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-06 07:08:28',
            'updated_at' => '2023-10-07 22:46:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 6,
            'picks' => '{"318": "9", "320": "58", "324": "109", "362": "154", "366": "159"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-06 11:32:52',
            'updated_at' => '2023-10-08 19:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 6,
            'picks' => '{"334": "42", "344": "24", "345": "34", "347": "78", "348": "63"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 12:44:52',
            'updated_at' => '2023-10-07 23:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 6,
            'picks' => '{"322": "106", "329": "3", "346": "84", "348": "63", "360": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 15:49:23',
            'updated_at' => '2023-10-08 16:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 6,
            'picks' => '{"330": "28", "343": "112", "347": "78", "362": "154", "366": "159"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-06 15:55:46',
            'updated_at' => '2023-10-08 19:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 6,
            'picks' => '{"316": "82", "330": "28", "344": "24", "351": "120", "368": "162"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-06 16:50:24',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 6,
            'picks' => '{"332": "22", "333": "32", "334": "42", "348": "63", "362": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 19:09:20',
            'updated_at' => '2023-10-08 16:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 6,
            'picks' => '{"324": "109", "325": "19", "340": "114", "344": "24", "345": "50"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-06 21:28:24',
            'updated_at' => '2023-10-07 22:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 6,
            'picks' => '{"320": "58", "322": "106", "323": "133", "331": "61", "344": "24"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-06 21:29:51',
            'updated_at' => '2023-10-07 22:24:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 6,
            'picks' => '{"334": "42", "337": "74", "342": "90", "345": "50", "355": "6"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 21:33:46',
            'updated_at' => '2023-10-08 02:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 6,
            'picks' => '{"324": "109", "329": "3", "331": "61", "348": "63", "359": "137"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 21:36:42',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 6,
            'picks' => '{"331": "61", "348": "63", "357": "138", "359": "137", "360": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 22:06:19',
            'updated_at' => '2023-10-08 16:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 6,
            'picks' => '{"323": "91", "345": "34", "354": "18", "359": "161", "363": "156"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-06 22:07:29',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 6,
            'picks' => '{"322": "106", "339": "30", "345": "50", "357": "149", "359": "137"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-07 08:33:17',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 6,
            'picks' => '{"339": "30", "347": "78", "348": "63", "355": "119", "369": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-07 08:36:07',
            'updated_at' => '2023-10-09 23:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 6,
            'picks' => '{"345": "34", "347": "78", "357": "138", "366": "159", "368": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-07 08:58:02',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 6,
            'picks' => '{"322": "106", "327": "115", "334": "42", "357": "138", "368": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-07 09:23:04',
            'updated_at' => '2023-10-08 23:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 6,
            'picks' => '{"320": "80", "324": "109", "342": "90", "345": "34", "355": "119"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-07 09:44:13',
            'updated_at' => '2023-10-08 02:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 6,
            'picks' => '{"319": "56", "320": "80", "322": "106", "347": "78", "359": "137"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-07 09:59:54',
            'updated_at' => '2023-10-08 16:04:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 6,
            'picks' => '{"322": "106", "327": "115", "347": "78", "349": "12", "362": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-07 10:32:40',
            'updated_at' => '2023-10-08 16:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 6,
            'picks' => '{"321": "66", "327": "129", "345": "50", "351": "25", "353": "43"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-07 10:37:28',
            'updated_at' => '2023-10-07 23:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 6,
            'picks' => '{"337": "74", "340": "114", "350": "94", "355": "6", "357": "138"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-07 11:21:23',
            'updated_at' => '2023-10-08 12:56:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 7,
            'picks' => '{"408": "129", "409": "10", "411": "108", "414": "115", "432": "74"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-11 13:07:44',
            'updated_at' => '2023-10-14 23:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 7,
            'picks' => '{"394": "97", "400": "104", "411": "108", "413": "78", "423": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-11 13:53:21',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 7,
            'picks' => '{"391": "102", "403": "79", "405": "94", "406": "55", "408": "129"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-11 14:40:30',
            'updated_at' => '2023-10-14 22:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 7,
            'picks' => '{"370": "31", "371": "130", "372": "95", "394": "97", "400": "104"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-11 14:48:48',
            'updated_at' => '2023-10-14 19:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 7,
            'picks' => '{"388": "121", "406": "55", "408": "129", "413": "78", "414": "86"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-11 15:51:37',
            'updated_at' => '2023-10-14 23:31:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 7,
            'picks' => '{"383": "91", "385": "89", "398": "128", "418": "137", "423": "162"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-11 16:51:32',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 7,
            'picks' => '{"377": "21", "419": "166", "423": "162", "427": "153", "430": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-11 17:09:31',
            'updated_at' => '2023-10-15 23:38:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 7,
            'picks' => '{"380": "34", "385": "80", "395": "58", "409": "10", "413": "119"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-11 17:32:14',
            'updated_at' => '2023-10-14 22:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 7,
            'picks' => '{"391": "102", "406": "55", "409": "56", "417": "150", "428": "145"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-12 08:06:44',
            'updated_at' => '2023-10-15 19:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 7,
            'picks' => '{"371": "130", "383": "91", "385": "80", "406": "55", "423": "162"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-12 09:27:52',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 7,
            'picks' => '{"420": "154", "423": "162", "426": "151", "428": "145", "429": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-12 11:48:29',
            'updated_at' => '2023-10-15 19:38:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 7,
            'picks' => '{"382": "41", "385": "80", "413": "119", "417": "150", "428": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-12 13:10:40',
            'updated_at' => '2023-10-15 19:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 7,
            'picks' => '{"383": "91", "386": "109", "395": "58", "397": "61", "403": "79"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-12 14:19:24',
            'updated_at' => '2023-10-14 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 7,
            'picks' => '{"371": "130", "372": "95", "418": "137", "423": "162", "429": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-12 16:29:14',
            'updated_at' => '2023-10-15 19:38:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 7,
            'picks' => '{"371": "130", "390": "110", "404": "118", "406": "55", "407": "1"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-12 17:03:35',
            'updated_at' => '2023-10-14 22:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 7,
            'picks' => '{"372": "95", "396": "46", "406": "55", "407": "1", "417": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-12 19:15:15',
            'updated_at' => '2023-10-14 22:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 7,
            'picks' => '{"373": "59", "400": "104", "414": "86", "422": "141", "423": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-13 08:51:04',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 7,
            'picks' => '{"375": "24", "382": "63", "385": "80", "423": "162", "429": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-13 15:47:13',
            'updated_at' => '2023-10-15 19:38:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 7,
            'picks' => '{"396": "82", "406": "88", "421": "140", "423": "162", "426": "151"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-13 18:43:55',
            'updated_at' => '2023-10-15 19:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 7,
            'picks' => '{"406": "55", "412": "50", "413": "119", "423": "162", "428": "145"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-13 20:09:14',
            'updated_at' => '2023-10-15 19:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 6,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-14 00:29:29',
            'updated_at' => '2023-10-14 00:29:29',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 7,
            'picks' => '{"382": "41", "383": "91", "402": "133", "413": "119", "423": "162"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-13 20:48:05',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 7,
            'picks' => '{"382": "63", "396": "46", "406": "55", "408": "129", "425": "149"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-13 20:53:05',
            'updated_at' => '2023-10-15 16:02:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 7,
            'picks' => '{"388": "121", "400": "104", "423": "162", "431": "143", "432": "74"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-13 20:59:09',
            'updated_at' => '2023-10-16 23:25:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 7,
            'picks' => '{"377": "21", "383": "91", "394": "97", "403": "79", "422": "141"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-13 21:57:06',
            'updated_at' => '2023-10-15 15:55:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 7,
            'picks' => '{"385": "89", "388": "121", "398": "128", "407": "1", "432": "74"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-13 22:36:10',
            'updated_at' => '2023-10-14 23:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 7,
            'picks' => '{"420": "154", "422": "163", "423": "162", "432": "74", "433": "26"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-13 23:14:23',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 7,
            'picks' => '{"379": "101", "383": "91", "397": "61", "398": "85", "400": "105"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-13 23:45:13',
            'updated_at' => '2023-10-14 19:26:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 7,
            'picks' => '{"383": "91", "413": "78", "415": "113", "423": "162", "428": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 06:12:53',
            'updated_at' => '2023-10-15 19:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 7,
            'picks' => '{"379": "32", "412": "50", "413": "119", "432": "74", "433": "26"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-14 08:42:26',
            'updated_at' => '2023-10-14 23:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 7,
            'picks' => '{"398": "128", "402": "133", "412": "50", "413": "119", "431": "143"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-14 09:11:43',
            'updated_at' => '2023-10-16 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 7,
            'picks' => '{"394": "97", "395": "58", "396": "82", "406": "55", "423": "162"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-14 09:51:47',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 7,
            'picks' => '{"382": "63", "391": "17", "410": "57", "421": "140", "422": "141"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 10:18:08',
            'updated_at' => '2023-10-15 16:00:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 7,
            'picks' => '{"398": "128", "413": "119", "422": "141", "423": "162", "432": "74"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 10:32:31',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 7,
            'picks' => '{"381": "45", "384": "75", "392": "16", "400": "104", "432": "74"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-14 10:47:53',
            'updated_at' => '2023-10-14 23:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 7,
            'picks' => '{"391": "17", "400": "105", "406": "88", "412": "67", "429": "159"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-14 10:50:40',
            'updated_at' => '2023-10-15 19:38:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 7,
            'picks' => '{"394": "30", "412": "50", "413": "119", "424": "157", "425": "149"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 11:10:16',
            'updated_at' => '2023-10-15 16:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 7,
            'picks' => '{"385": "80", "394": "30", "403": "79", "414": "115", "423": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 11:15:21',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 7,
            'picks' => '{"381": "45", "388": "121", "391": "17", "407": "134", "423": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-14 11:32:39',
            'updated_at' => '2023-10-15 16:33:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 7,
            'picks' => '{"385": "80", "395": "58", "406": "55", "409": "56", "413": "119"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-14 11:39:58',
            'updated_at' => '2023-10-14 22:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 7,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-15 06:53:01',
            'updated_at' => '2023-10-15 06:53:01',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 8,
            'picks' => '{"465": "74", "485": "151", "486": "142", "489": "146", "492": "162"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-18 12:06:02',
            'updated_at' => '2023-10-23 23:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 8,
            'picks' => '{"434": "122", "454": "42", "458": "130", "471": "47", "476": "119"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-18 20:09:08',
            'updated_at' => '2023-10-21 23:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 8,
            'picks' => '{"450": "19", "476": "119", "481": "145", "486": "142", "492": "162"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-18 21:56:21',
            'updated_at' => '2023-10-23 23:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 8,
            'picks' => '{"438": "1", "444": "79", "446": "81", "459": "85", "478": "128"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-19 06:21:41',
            'updated_at' => '2023-10-22 02:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 8,
            'picks' => '{"435": "45", "453": "133", "480": "149", "483": "166", "486": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-19 07:15:11',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 8,
            'picks' => '{"453": "133", "474": "32", "475": "63", "478": "128", "492": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-19 08:38:06',
            'updated_at' => '2023-10-23 23:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 8,
            'picks' => '{"449": "104", "475": "62", "486": "142", "489": "146", "491": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-19 08:45:33',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 8,
            'picks' => '{"441": "37", "453": "133", "468": "84", "471": "47", "481": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-19 08:52:51',
            'updated_at' => '2023-10-22 16:03:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 8,
            'picks' => '{"435": "45", "436": "112", "459": "129", "474": "26", "476": "121"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-19 10:24:20',
            'updated_at' => '2023-10-21 23:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 8,
            'picks' => '{"439": "7", "455": "67", "462": "106", "465": "74", "468": "84"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-19 10:36:02',
            'updated_at' => '2023-10-21 22:33:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 8,
            'picks' => '{"442": "91", "453": "133", "463": "61", "465": "74", "475": "63"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-19 15:36:05',
            'updated_at' => '2023-10-21 22:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 8,
            'picks' => '{"449": "104", "459": "129", "475": "62", "481": "145", "482": "156"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-19 18:32:27',
            'updated_at' => '2023-10-22 16:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 8,
            'picks' => '{"454": "42", "462": "39", "468": "84", "476": "121", "490": "152"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-19 18:37:22',
            'updated_at' => '2023-10-22 19:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 8,
            'picks' => '{"435": "45", "465": "74", "475": "63", "480": "157", "486": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-19 18:49:51',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 8,
            'picks' => '{"446": "81", "447": "15", "465": "74", "480": "149", "482": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-19 19:34:21',
            'updated_at' => '2023-10-22 16:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 8,
            'picks' => '{"459": "85", "465": "74", "467": "23", "468": "84", "475": "63"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-19 21:34:53',
            'updated_at' => '2023-10-21 22:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 8,
            'picks' => '{"483": "166", "485": "151", "487": "163", "490": "150", "491": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-19 22:36:10',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 8,
            'picks' => '{"439": "7", "465": "74", "468": "84", "476": "121", "478": "5"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-20 09:56:06',
            'updated_at' => '2023-10-22 02:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 8,
            'picks' => '{"442": "91", "446": "81", "449": "104", "454": "42", "478": "128"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-20 10:12:25',
            'updated_at' => '2023-10-22 02:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 8,
            'picks' => '{"438": "1", "439": "7", "443": "59", "444": "79", "446": "81"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-20 14:28:43',
            'updated_at' => '2023-10-21 15:41:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 8,
            'picks' => '{"445": "87", "460": "127", "474": "32", "476": "121", "491": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-20 16:56:29',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 8,
            'picks' => '{"437": "95", "440": "21", "462": "39", "466": "4", "474": "26"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-20 17:34:49',
            'updated_at' => '2023-10-21 23:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 8,
            'picks' => '{"439": "7", "446": "81", "449": "3", "469": "108", "475": "63"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-20 20:17:45',
            'updated_at' => '2023-10-21 22:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 8,
            'picks' => '{"441": "37", "446": "81", "454": "42", "455": "67", "468": "84"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-20 20:25:56',
            'updated_at' => '2023-10-21 22:33:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 8,
            'picks' => '{"459": "129", "462": "106", "475": "63", "486": "142", "492": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-20 21:56:51',
            'updated_at' => '2023-10-23 23:12:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 8,
            'picks' => '{"438": "68", "448": "27", "463": "61", "467": "23", "474": "26"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-20 22:02:45',
            'updated_at' => '2023-10-21 23:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 8,
            'picks' => '{"465": "74", "475": "63", "483": "166", "486": "142", "488": "153"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-20 22:56:29',
            'updated_at' => '2023-10-22 19:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 8,
            'picks' => '{"449": "3", "453": "133", "465": "125", "475": "63", "489": "146"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-21 03:41:28',
            'updated_at' => '2023-10-22 19:25:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 8,
            'picks' => '{"445": "80", "453": "133", "468": "84", "476": "119", "486": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-21 07:40:36',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 8,
            'picks' => '{"439": "66", "452": "28", "459": "129", "486": "148", "491": "160"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-10-21 09:12:50',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 8,
            'picks' => '{"439": "7", "449": "104", "482": "138", "483": "158", "491": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-21 09:32:02',
            'updated_at' => '2023-10-22 23:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 8,
            'picks' => '{"445": "87", "453": "133", "475": "63", "476": "119", "489": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-21 09:39:06',
            'updated_at' => '2023-10-22 19:25:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 8,
            'picks' => '{"446": "81", "447": "15", "465": "74", "473": "56", "476": "119"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-21 10:09:46',
            'updated_at' => '2023-10-21 23:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 8,
            'picks' => '{"439": "7", "446": "81", "459": "85", "486": "142", "488": "153"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-21 10:13:26',
            'updated_at' => '2023-10-22 19:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 8,
            'picks' => '{"448": "27", "454": "42", "466": "4", "475": "62", "486": "142"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-21 10:54:24',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 8,
            'picks' => '{"475": "62", "481": "145", "482": "138", "484": "164", "486": "142"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-21 11:07:49',
            'updated_at' => '2023-10-22 16:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 8,
            'picks' => '{"438": "1", "468": "84", "473": "56", "486": "142", "488": "153"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-21 11:21:48',
            'updated_at' => '2023-10-22 19:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 8,
            'picks' => '{"453": "133", "465": "74", "475": "63", "476": "119", "481": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-21 11:22:01',
            'updated_at' => '2023-10-22 16:03:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 8,
            'picks' => '{"458": "130", "462": "106", "465": "74", "466": "4", "473": "56"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-21 11:34:43',
            'updated_at' => '2023-10-21 22:41:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 9,
            'picks' => '{"505": "114", "528": "80", "531": "82", "549": "162", "552": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-25 11:59:40',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 9,
            'picks' => '{"495": "29", "497": "14", "515": "69", "517": "121", "518": "30"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-25 12:16:34',
            'updated_at' => '2023-10-28 19:13:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 9,
            'picks' => '{"502": "77", "506": "28", "514": "62", "515": "69", "537": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-25 13:18:11',
            'updated_at' => '2023-10-28 19:13:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 9,
            'picks' => '{"498": "32", "502": "58", "503": "95", "504": "105", "532": "74"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-25 13:59:12',
            'updated_at' => '2023-10-28 23:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 9,
            'picks' => '{"546": "161", "547": "163", "550": "150", "551": "152", "552": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-25 16:26:13',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 9,
            'picks' => '{"501": "81", "509": "17", "518": "30", "531": "82", "537": "164"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-25 17:38:52',
            'updated_at' => '2023-10-28 23:32:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 9,
            'picks' => '{"495": "20", "507": "75", "531": "21", "535": "118", "537": "164"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-25 18:40:32',
            'updated_at' => '2023-10-29 02:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 9,
            'picks' => '{"493": "36", "495": "29", "506": "28", "521": "134", "531": "82"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-26 16:35:41',
            'updated_at' => '2023-10-28 23:32:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 9,
            'picks' => '{"508": "66", "524": "50", "534": "6", "546": "149", "549": "141"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-26 20:00:09',
            'updated_at' => '2023-10-29 19:22:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 9,
            'picks' => '{"501": "46", "517": "121", "528": "133", "543": "166", "550": "144"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-26 20:07:39',
            'updated_at' => '2023-10-29 19:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 9,
            'picks' => '{"498": "32", "502": "58", "522": "57", "528": "80", "537": "138"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-26 20:10:31',
            'updated_at' => '2023-10-28 22:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 9,
            'picks' => '{"500": "87", "517": "121", "519": "119", "530": "129", "531": "82"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-26 23:14:53',
            'updated_at' => '2023-10-28 23:39:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 9,
            'picks' => '{"501": "46", "506": "28", "524": "50", "542": "159", "545": "155"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-27 02:38:49',
            'updated_at' => '2023-10-29 16:32:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 9,
            'picks' => '{"511": "55", "522": "57", "529": "124", "550": "150", "552": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-27 05:10:30',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 9,
            'picks' => '{"511": "55", "512": "123", "514": "65", "522": "57", "526": "110"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-27 08:54:22',
            'updated_at' => '2023-10-28 22:22:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 9,
            'picks' => '{"501": "81", "509": "106", "528": "80", "532": "74", "551": "140"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-27 09:23:20',
            'updated_at' => '2023-10-29 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 9,
            'picks' => '{"495": "29", "501": "46", "512": "123", "548": "137", "550": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-27 09:56:05',
            'updated_at' => '2023-10-29 19:36:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 9,
            'picks' => '{"501": "81", "525": "128", "527": "115", "528": "80", "533": "45"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-10-27 10:29:53',
            'updated_at' => '2023-10-28 23:49:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 9,
            'picks' => '{"501": "81", "528": "80", "534": "86", "538": "136", "546": "149"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-27 10:36:39',
            'updated_at' => '2023-10-29 16:17:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 9,
            'picks' => '{"511": "55", "514": "65", "532": "74", "548": "137", "550": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-27 12:14:54',
            'updated_at' => '2023-10-29 19:36:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 9,
            'picks' => '{"505": "114", "511": "55", "513": "79", "541": "154", "552": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-27 12:50:22',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 9,
            'picks' => '{"498": "32", "500": "87", "502": "58", "519": "119", "550": "150"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-27 20:49:15',
            'updated_at' => '2023-10-29 19:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 9,
            'picks' => '{"501": "81", "515": "69", "517": "85", "519": "119", "524": "104"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-27 21:26:56',
            'updated_at' => '2023-10-28 22:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 9,
            'picks' => '{"501": "46", "509": "17", "518": "30", "534": "6", "549": "141"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-27 23:16:52',
            'updated_at' => '2023-10-29 19:22:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 9,
            'picks' => '{"525": "100", "528": "80", "531": "82", "534": "6", "535": "33"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-27 23:47:32',
            'updated_at' => '2023-10-29 02:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 9,
            'picks' => '{"511": "26", "514": "65", "515": "69", "518": "30", "524": "104"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-28 02:01:48',
            'updated_at' => '2023-10-28 22:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 9,
            'picks' => '{"501": "81", "504": "105", "509": "106", "532": "74", "534": "86"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-28 07:51:17',
            'updated_at' => '2023-10-29 01:51:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 9,
            'picks' => '{"506": "28", "507": "75", "516": "88", "517": "121", "521": "13"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 08:10:48',
            'updated_at' => '2023-10-28 20:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 9,
            'picks' => '{"496": "9", "510": "43", "513": "79", "518": "34", "543": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 09:38:13',
            'updated_at' => '2023-10-29 16:17:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 9,
            'picks' => '{"516": "78", "528": "133", "545": "155", "550": "150", "552": "145"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-28 09:59:40',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 9,
            'picks' => '{"504": "105", "511": "55", "514": "65", "515": "69", "531": "82"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-10-28 10:13:30',
            'updated_at' => '2023-10-28 23:32:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 9,
            'picks' => '{"547": "163", "548": "137", "550": "150", "551": "152", "552": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-28 10:15:40',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 9,
            'picks' => '{"509": "106", "515": "69", "517": "121", "539": "147", "545": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 10:18:08',
            'updated_at' => '2023-10-29 16:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 9,
            'picks' => '{"518": "30", "532": "74", "539": "139", "546": "149", "550": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 10:18:19',
            'updated_at' => '2023-10-29 19:27:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 9,
            'picks' => '{"505": "114", "510": "12", "522": "23", "528": "133", "531": "82"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-10-28 10:27:52',
            'updated_at' => '2023-10-28 23:32:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 9,
            'picks' => '{"539": "147", "542": "159", "543": "160", "546": "149", "548": "137"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-28 10:49:03',
            'updated_at' => '2023-10-29 19:36:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 9,
            'picks' => '{"498": "32", "501": "81", "509": "17", "513": "79", "519": "119"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-10-28 10:49:15',
            'updated_at' => '2023-10-28 20:13:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 9,
            'picks' => '{"502": "58", "517": "85", "519": "119", "523": "1", "534": "86"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 11:01:03',
            'updated_at' => '2023-10-29 01:51:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 9,
            'picks' => '{"504": "105", "509": "106", "525": "128", "539": "147", "552": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-10-28 11:32:56',
            'updated_at' => '2023-10-30 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 10,
            'picks' => '{"563": "106", "565": "80", "579": "88", "601": "119", "602": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-01 12:07:11',
            'updated_at' => '2023-11-04 23:10:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 10,
            'picks' => '{"553": "15", "554": "2", "555": "108", "556": "26", "557": "110"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-01 13:44:12',
            'updated_at' => '2023-11-02 23:01:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 10,
            'picks' => '{"561": "78", "581": "45", "591": "4", "596": "46", "602": "3"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-01 14:30:03',
            'updated_at' => '2023-11-04 23:00:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 10,
            'picks' => '{"562": "133", "564": "69", "570": "68", "571": "1", "590": "85"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-01 17:12:38',
            'updated_at' => '2023-11-04 21:32:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 10,
            'picks' => '{"553": "15", "566": "84", "568": "121", "572": "29", "596": "46"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-01 17:19:04',
            'updated_at' => '2023-11-04 22:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 10,
            'picks' => '{"553": "15", "561": "78", "565": "80", "580": "34", "584": "55"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-01 17:35:09',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 10,
            'picks' => '{"565": "80", "585": "87", "599": "63", "600": "95", "601": "128"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-01 22:16:15',
            'updated_at' => '2023-11-04 23:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 10,
            'picks' => '{"561": "78", "564": "69", "566": "84", "599": "63", "620": "141"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-01 22:57:06',
            'updated_at' => '2023-11-05 23:24:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 10,
            'picks' => '{"557": "110", "568": "121", "574": "123", "580": "34", "584": "55"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-01 23:12:56',
            'updated_at' => '2023-11-04 19:08:06',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 10,
            'picks' => '{"565": "80", "585": "87", "602": "3", "612": "137", "618": "160"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-02 15:17:33',
            'updated_at' => '2023-11-05 19:43:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 10,
            'picks' => '{"569": "37", "573": "59", "587": "10", "596": "46", "600": "95"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-02 18:57:12',
            'updated_at' => '2023-11-04 23:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 10,
            'picks' => '{"561": "22", "564": "69", "601": "128", "602": "3", "616": "166"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-02 18:59:11',
            'updated_at' => '2023-11-05 16:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 10,
            'picks' => '{"561": "78", "565": "80", "580": "34", "599": "89", "602": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-02 19:17:35',
            'updated_at' => '2023-11-04 23:00:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 10,
            'picks' => '{"588": "20", "594": "118", "595": "130", "602": "3", "621": "159"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-03 04:06:50',
            'updated_at' => '2023-11-06 23:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 10,
            'picks' => '{"559": "134", "560": "30", "584": "55", "586": "82", "611": "136"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-03 10:06:11',
            'updated_at' => '2023-11-05 16:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 10,
            'picks' => '{"609": "154", "610": "142", "611": "136", "612": "137", "613": "157"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-03 11:26:27',
            'updated_at' => '2023-11-05 16:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 10,
            'picks' => '{"564": "69", "577": "23", "581": "45", "584": "55", "601": "128"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-03 11:59:12',
            'updated_at' => '2023-11-04 23:10:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 10,
            'picks' => '{"562": "133", "583": "42", "593": "72", "594": "118", "609": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-03 12:22:20',
            'updated_at' => '2023-11-05 12:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 10,
            'picks' => '{"564": "69", "565": "80", "579": "32", "580": "34", "606": "24"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-03 12:52:47',
            'updated_at' => '2023-11-05 01:32:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 10,
            'picks' => '{"577": "23", "581": "45", "583": "42", "593": "64", "597": "93"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-03 13:54:47',
            'updated_at' => '2023-11-04 22:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 10,
            'picks' => '{"560": "30", "563": "106", "565": "80", "566": "84", "585": "87"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-03 15:57:30',
            'updated_at' => '2023-11-04 19:08:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 10,
            'picks' => '{"571": "1", "577": "83", "581": "36", "607": "6", "609": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-03 16:30:45',
            'updated_at' => '2023-11-05 12:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 10,
            'picks' => '{"563": "106", "602": "3", "609": "150", "611": "136", "618": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-03 17:55:33',
            'updated_at' => '2023-11-05 19:43:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 10,
            'picks' => '{"560": "7", "561": "78", "567": "116", "609": "154", "610": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-03 18:41:30',
            'updated_at' => '2023-11-05 16:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 10,
            'picks' => '{"565": "80", "568": "121", "571": "1", "599": "63", "607": "6"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-03 22:52:01',
            'updated_at' => '2023-11-05 01:59:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 10,
            'picks' => '{"566": "84", "568": "121", "580": "34", "584": "55", "602": "3"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-03 23:24:29',
            'updated_at' => '2023-11-04 23:00:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 10,
            'picks' => '{"567": "104", "572": "113", "580": "34", "599": "63", "610": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-04 02:17:54',
            'updated_at' => '2023-11-05 16:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 10,
            'picks' => '{"564": "69", "565": "80", "584": "55", "599": "63", "616": "166"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-04 03:51:35',
            'updated_at' => '2023-11-05 16:08:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 10,
            'picks' => '{"560": "30", "561": "78", "586": "82", "597": "120", "598": "50"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-04 08:38:31',
            'updated_at' => '2023-11-04 22:55:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 10,
            'picks' => '{"561": "78", "564": "69", "565": "80", "580": "34", "581": "45"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-04 08:43:26',
            'updated_at' => '2023-11-04 19:08:07',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 10,
            'picks' => '{"565": "80", "579": "32", "599": "63", "610": "142", "621": "152"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-04 09:10:13',
            'updated_at' => '2023-11-06 23:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 10,
            'picks' => '{"560": "30", "563": "106", "586": "82", "602": "3", "619": "158"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-04 09:52:06',
            'updated_at' => '2023-11-05 19:25:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 10,
            'picks' => '{"561": "78", "586": "81", "590": "85", "594": "118", "607": "6"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-04 10:04:32',
            'updated_at' => '2023-11-05 01:59:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 10,
            'picks' => '{"563": "106", "565": "80", "566": "84", "599": "63", "601": "128"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-04 10:10:47',
            'updated_at' => '2023-11-04 23:10:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 10,
            'picks' => '{"561": "78", "565": "80", "566": "84", "584": "55", "601": "128"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-04 10:19:21',
            'updated_at' => '2023-11-04 23:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 10,
            'picks' => '{"560": "30", "601": "128", "602": "3", "609": "154", "610": "142"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-04 10:29:16',
            'updated_at' => '2023-11-05 16:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 10,
            'picks' => '{"561": "78", "566": "84", "567": "116", "579": "32", "610": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-04 11:01:57',
            'updated_at' => '2023-11-05 16:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 10,
            'picks' => '{"561": "78", "579": "32", "585": "87", "599": "63", "602": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-04 11:02:36',
            'updated_at' => '2023-11-04 23:00:05',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 10,
            'picks' => '{"560": "30", "568": "5", "579": "32", "609": "154", "620": "138"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-04 11:35:25',
            'updated_at' => '2023-11-05 23:24:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 8,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-06 19:52:39',
            'updated_at' => '2023-11-06 19:52:39',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 10,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-06 19:52:39',
            'updated_at' => '2023-11-06 19:52:39',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 9,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-06 19:52:39',
            'updated_at' => '2023-11-06 19:52:39',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 11,
            'picks' => '{"635": "63", "653": "82", "655": "128", "660": "86", "689": "151"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-08 11:11:21',
            'updated_at' => '2023-11-12 23:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 11,
            'picks' => '{"649": "104", "653": "82", "662": "25", "670": "106", "676": "94"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-08 12:14:49',
            'updated_at' => '2023-11-12 02:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 11,
            'picks' => '{"629": "3", "638": "51", "642": "45", "652": "133", "679": "137"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-08 13:56:34',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 11,
            'picks' => '{"622": "61", "623": "15", "626": "95", "641": "59", "653": "82"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-08 17:09:56',
            'updated_at' => '2023-11-11 18:50:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 11,
            'picks' => '{"624": "28", "626": "95", "627": "118", "628": "111", "675": "85"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-08 18:41:10',
            'updated_at' => '2023-11-12 02:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 11,
            'picks' => '{"635": "63", "682": "162", "683": "157", "686": "145", "690": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-08 19:17:24',
            'updated_at' => '2023-11-13 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 11,
            'picks' => '{"629": "50", "649": "67", "674": "17", "678": "156", "689": "151"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-08 21:13:27',
            'updated_at' => '2023-11-12 23:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 11,
            'picks' => '{"625": "55", "641": "59", "651": "131", "670": "106", "685": "135"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-09 12:38:50',
            'updated_at' => '2023-11-12 19:08:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 11,
            'picks' => '{"629": "3", "655": "128", "670": "106", "677": "140", "686": "145"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-09 14:07:07',
            'updated_at' => '2023-11-12 19:04:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 11,
            'picks' => '{"625": "55", "630": "126", "635": "63", "640": "6", "655": "128"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-09 15:34:52',
            'updated_at' => '2023-11-11 19:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 11,
            'picks' => '{"630": "14", "631": "37", "647": "91", "666": "81", "674": "17"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-09 16:04:35',
            'updated_at' => '2023-11-12 01:38:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 11,
            'picks' => '{"629": "3", "632": "41", "634": "58", "653": "82", "670": "106"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-09 18:20:30',
            'updated_at' => '2023-11-11 23:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 11,
            'picks' => '{"635": "87", "637": "98", "645": "23", "647": "42", "653": "114"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-09 18:23:42',
            'updated_at' => '2023-11-11 19:00:14',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 11,
            'picks' => '{"627": "118", "641": "59", "653": "82", "670": "106", "675": "85"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-10 10:47:01',
            'updated_at' => '2023-11-12 02:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 11,
            'picks' => '{"629": "3", "635": "63", "670": "106", "680": "141", "690": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 11:00:20',
            'updated_at' => '2023-11-13 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 11,
            'picks' => '{"629": "3", "635": "63", "641": "59", "664": "34", "675": "85"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-10 12:14:04',
            'updated_at' => '2023-11-12 02:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 11,
            'picks' => '{"681": "161", "682": "162", "686": "145", "689": "159", "690": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 12:33:48',
            'updated_at' => '2023-11-13 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 11,
            'picks' => '{"633": "46", "661": "39", "664": "34", "679": "137", "688": "163"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-10 15:11:48',
            'updated_at' => '2023-11-12 19:39:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 11,
            'picks' => '{"626": "95", "628": "111", "635": "63", "641": "59", "642": "45"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-10 15:30:55',
            'updated_at' => '2023-11-11 17:48:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 11,
            'picks' => '{"629": "3", "635": "63", "653": "82", "655": "128", "664": "84"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 16:29:04',
            'updated_at' => '2023-11-11 22:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 11,
            'picks' => '{"631": "37", "638": "83", "649": "67", "655": "121", "666": "130"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 18:14:04',
            'updated_at' => '2023-11-11 22:49:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 11,
            'picks' => '{"635": "63", "647": "42", "667": "80", "670": "106", "679": "142"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-10 19:26:03',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 11,
            'picks' => '{"629": "3", "633": "46", "670": "106", "679": "142", "681": "161"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-10 19:41:26',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 11,
            'picks' => '{"626": "95", "633": "46", "670": "106", "686": "145", "687": "143"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 20:10:08',
            'updated_at' => '2023-11-12 19:42:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 11,
            'picks' => '{"635": "63", "642": "45", "647": "91", "670": "106", "671": "26"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-10 20:48:52',
            'updated_at' => '2023-11-11 23:54:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 11,
            'picks' => '{"629": "3", "647": "42", "653": "82", "663": "56", "666": "81"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-10 21:41:47',
            'updated_at' => '2023-11-11 23:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 11,
            'picks' => '{"635": "63", "653": "82", "663": "56", "676": "33", "683": "155"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-10 22:04:38',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 11,
            'picks' => '{"633": "46", "647": "42", "649": "67", "666": "130", "674": "17"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 22:07:24',
            'updated_at' => '2023-11-12 01:38:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 11,
            'picks' => '{"627": "118", "628": "111", "661": "39", "682": "149", "689": "151"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-10 22:11:32',
            'updated_at' => '2023-11-12 23:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 11,
            'picks' => '{"629": "3", "649": "104", "664": "84", "682": "162", "686": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-11 06:56:49',
            'updated_at' => '2023-11-12 19:04:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 11,
            'picks' => '{"629": "3", "640": "6", "647": "91", "651": "72", "673": "71"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-11 07:46:58',
            'updated_at' => '2023-11-12 01:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 11,
            'picks' => '{"633": "46", "648": "65", "661": "39", "662": "25", "668": "66"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-11 09:06:32',
            'updated_at' => '2023-11-11 23:01:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 11,
            'picks' => '{"636": "97", "667": "80", "672": "115", "673": "13", "675": "85"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-11 09:29:44',
            'updated_at' => '2023-11-12 02:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 11,
            'picks' => '{"645": "107", "647": "91", "664": "34", "676": "94", "682": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-11 09:40:06',
            'updated_at' => '2023-11-12 16:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 11,
            'picks' => '{"635": "87", "664": "84", "670": "102", "675": "85", "681": "161"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-11 09:50:41',
            'updated_at' => '2023-11-12 16:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 11,
            'picks' => '{"629": "3", "635": "63", "678": "156", "679": "137", "680": "141"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-11 10:31:41',
            'updated_at' => '2023-11-12 16:26:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 11,
            'picks' => '{"629": "3", "640": "6", "655": "128", "664": "34", "670": "106"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-11 11:12:37',
            'updated_at' => '2023-11-11 23:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 11,
            'picks' => '{"634": "58", "649": "104", "654": "101", "663": "56", "664": "34"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-11 11:23:38',
            'updated_at' => '2023-11-11 23:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 12,
            'picks' => '{"707": "45", "709": "90", "711": "6", "721": "34", "736": "97"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-15 11:09:34',
            'updated_at' => '2023-11-18 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 12,
            'picks' => '{"705": "47", "736": "97", "738": "86", "741": "43", "743": "94"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-15 14:28:51',
            'updated_at' => '2023-11-19 01:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 12,
            'picks' => '{"701": "63", "712": "130", "727": "82", "739": "56", "744": "137"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-15 18:35:08',
            'updated_at' => '2023-11-18 23:34:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 12,
            'picks' => '{"691": "61", "712": "130", "728": "65", "738": "86", "743": "94"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-15 18:41:41',
            'updated_at' => '2023-11-19 01:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 12,
            'picks' => '{"691": "61", "712": "130", "715": "26", "722": "42", "746": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-15 18:44:33',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 12,
            'picks' => '{"704": "91", "721": "34", "722": "42", "741": "43", "744": "137"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-15 20:12:24',
            'updated_at' => '2023-11-18 23:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 12,
            'picks' => '{"700": "41", "704": "91", "711": "6", "755": "153", "757": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-15 21:00:40',
            'updated_at' => '2023-11-20 23:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 12,
            'picks' => '{"728": "65", "736": "97", "744": "137", "748": "161", "751": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-15 21:15:22',
            'updated_at' => '2023-11-19 16:12:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 12,
            'picks' => '{"697": "17", "699": "29", "701": "58", "711": "6", "721": "34"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-16 10:31:57',
            'updated_at' => '2023-11-18 18:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 12,
            'picks' => '{"696": "23", "701": "58", "720": "74", "721": "34", "738": "86"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-16 16:23:55',
            'updated_at' => '2023-11-18 23:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 12,
            'picks' => '{"701": "63", "736": "50", "738": "128", "741": "106", "755": "163"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-16 16:42:50',
            'updated_at' => '2023-11-19 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 12,
            'picks' => '{"693": "14", "701": "63", "730": "114", "738": "128", "746": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-16 17:52:02',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 12,
            'picks' => '{"693": "88", "694": "98", "707": "45", "738": "128", "746": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-16 18:55:45',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 12,
            'picks' => '{"694": "123", "702": "59", "706": "51", "727": "82", "738": "128"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-17 06:36:31',
            'updated_at' => '2023-11-18 23:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 12,
            'picks' => '{"701": "63", "721": "34", "724": "119", "735": "67", "741": "106"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-17 10:38:48',
            'updated_at' => '2023-11-18 23:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 12,
            'picks' => '{"713": "107", "715": "26", "716": "75", "721": "34", "738": "128"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-17 13:44:42',
            'updated_at' => '2023-11-18 23:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 12,
            'picks' => '{"701": "63", "706": "51", "715": "26", "720": "22", "752": "166"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-17 15:24:22',
            'updated_at' => '2023-11-19 16:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 12,
            'picks' => '{"706": "51", "715": "26", "721": "34", "722": "42", "738": "128"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-17 16:04:25',
            'updated_at' => '2023-11-18 23:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 12,
            'picks' => '{"722": "42", "735": "67", "741": "106", "745": "147", "754": "138"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-17 18:33:07',
            'updated_at' => '2023-11-19 19:50:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 12,
            'picks' => '{"711": "121", "712": "21", "720": "22", "723": "78", "739": "56"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-17 19:28:10',
            'updated_at' => '2023-11-18 23:34:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 12,
            'picks' => '{"701": "63", "722": "42", "728": "80", "745": "147", "747": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-17 20:14:08',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 12,
            'picks' => '{"702": "59", "704": "87", "706": "51", "722": "42", "739": "56"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-17 20:20:32',
            'updated_at' => '2023-11-18 23:34:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 12,
            'picks' => '{"728": "80", "739": "56", "746": "143", "749": "152", "751": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-17 22:04:33',
            'updated_at' => '2023-11-19 16:12:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 12,
            'picks' => '{"695": "24", "696": "23", "707": "45", "721": "34", "724": "119"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-17 22:28:11',
            'updated_at' => '2023-11-18 19:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 12,
            'picks' => '{"701": "63", "721": "34", "722": "42", "728": "80", "734": "7"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-17 23:32:12',
            'updated_at' => '2023-11-18 22:51:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 12,
            'picks' => '{"711": "6", "738": "86", "741": "106", "745": "147", "747": "140"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-18 06:49:40',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 12,
            'picks' => '{"724": "115", "738": "86", "742": "33", "743": "94", "747": "140"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-18 09:08:52',
            'updated_at' => '2023-11-19 16:06:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 12,
            'picks' => '{"707": "45", "721": "34", "727": "82", "738": "128", "751": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-18 09:18:11',
            'updated_at' => '2023-11-19 16:12:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 12,
            'picks' => '{"701": "63", "709": "90", "711": "121", "735": "67", "751": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-18 10:00:22',
            'updated_at' => '2023-11-19 16:12:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 12,
            'picks' => '{"720": "22", "721": "34", "722": "42", "741": "106", "749": "152"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-18 10:00:57',
            'updated_at' => '2023-11-19 16:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 12,
            'picks' => '{"721": "34", "736": "50", "738": "128", "745": "147", "754": "138"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-18 10:38:50',
            'updated_at' => '2023-11-19 19:50:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 12,
            'picks' => '{"706": "51", "734": "7", "739": "56", "742": "33", "743": "94"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-18 10:40:17',
            'updated_at' => '2023-11-19 02:02:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 12,
            'picks' => '{"701": "63", "721": "34", "726": "10", "741": "106", "757": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-18 10:49:18',
            'updated_at' => '2023-11-20 23:20:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 12,
            'picks' => '{"711": "6", "718": "118", "738": "86", "746": "143", "755": "163"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-18 10:49:59',
            'updated_at' => '2023-11-19 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 12,
            'picks' => '{"701": "63", "711": "121", "715": "26", "721": "34", "737": "133"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-18 10:57:19',
            'updated_at' => '2023-11-19 00:43:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 12,
            'picks' => '{"701": "63", "707": "45", "715": "26", "754": "138", "756": "155"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-18 11:24:31',
            'updated_at' => '2023-11-19 23:26:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 12,
            'picks' => '{"698": "68", "712": "130", "722": "42", "728": "80", "735": "67"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-18 11:32:27',
            'updated_at' => '2023-11-18 23:16:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 13,
            'picks' => '{"765": "111", "769": "106", "814": "145", "817": "154", "826": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-22 11:49:46',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 13,
            'picks' => '{"770": "86", "789": "3", "801": "129", "803": "30", "826": "138"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-22 13:52:03',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 13,
            'picks' => '{"784": "75", "785": "127", "795": "77", "814": "146", "822": "148"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-22 15:15:04',
            'updated_at' => '2023-11-26 16:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 13,
            'picks' => '{"773": "114", "776": "55", "778": "63", "798": "133", "814": "145"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-22 15:33:48',
            'updated_at' => '2023-11-25 18:52:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 13,
            'picks' => '{"796": "51", "808": "22", "809": "34", "814": "145", "815": "143"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-22 16:03:59',
            'updated_at' => '2023-11-25 23:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 13,
            'picks' => '{"778": "63", "814": "145", "815": "143", "816": "162", "817": "154"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-22 18:42:17',
            'updated_at' => '2023-11-25 15:43:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 13,
            'picks' => '{"759": "79", "760": "109", "768": "87", "771": "61", "776": "55"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-22 18:46:41',
            'updated_at' => '2023-11-25 15:31:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 13,
            'picks' => '{"760": "109", "761": "42", "763": "81", "769": "106", "815": "143"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-11-22 20:50:44',
            'updated_at' => '2023-11-24 23:31:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 13,
            'picks' => '{"758": "66", "761": "69", "763": "102", "765": "111", "767": "67"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-22 22:58:29',
            'updated_at' => '2023-11-24 19:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 13,
            'picks' => '{"761": "42", "807": "46", "814": "145", "815": "143", "816": "162"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-23 00:00:17',
            'updated_at' => '2023-11-25 22:47:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 13,
            'picks' => '{"758": "84", "767": "67", "778": "80", "789": "3", "815": "143"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 07:57:13',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 13,
            'picks' => '{"761": "42", "778": "80", "789": "3", "812": "115", "815": "143"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 10:10:40',
            'updated_at' => '2023-11-26 01:49:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 13,
            'picks' => '{"761": "42", "765": "123", "778": "80", "789": "3", "800": "126"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 10:12:06',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 13,
            'picks' => '{"768": "87", "781": "90", "790": "4", "809": "34", "828": "137"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-23 10:18:46',
            'updated_at' => '2023-11-26 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 13,
            'picks' => '{"778": "80", "814": "146", "815": "166", "816": "162", "825": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 10:36:46',
            'updated_at' => '2023-11-26 19:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 13,
            'picks' => '{"769": "106", "778": "80", "814": "145", "815": "143", "816": "162"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-23 11:13:28',
            'updated_at' => '2023-11-25 15:43:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 13,
            'picks' => '{"778": "80", "789": "3", "801": "128", "802": "130", "826": "160"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-23 11:53:58',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 13,
            'picks' => '{"758": "84", "815": "143", "816": "162", "817": "154", "820": "161"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-23 12:25:59',
            'updated_at' => '2023-11-26 15:52:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 13,
            'picks' => '{"814": "145", "815": "166", "823": "158", "825": "144", "826": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 12:30:01',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 13,
            'picks' => '{"761": "42", "765": "111", "776": "55", "777": "56", "789": "3"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-23 12:40:40',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 13,
            'picks' => '{"761": "42", "770": "86", "774": "89", "778": "80", "784": "75"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-23 16:15:15',
            'updated_at' => '2023-11-25 17:36:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 11,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 00:01:36',
            'updated_at' => '2023-11-24 00:01:36',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 12,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 00:01:36',
            'updated_at' => '2023-11-24 00:01:36',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 11,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 00:03:44',
            'updated_at' => '2023-11-24 00:03:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 12,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 00:03:44',
            'updated_at' => '2023-11-24 00:03:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 12,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 00:03:44',
            'updated_at' => '2023-11-24 00:03:44',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 13,
            'picks' => '{"759": "79", "765": "123", "767": "67", "768": "87", "789": "3"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-24 02:41:09',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 13,
            'picks' => '{"759": "79", "762": "59", "804": "78", "817": "154", "829": "140"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-24 09:48:51',
            'updated_at' => '2023-11-27 23:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 13,
            'picks' => '{"762": "59", "769": "106", "778": "80", "791": "6", "828": "137"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-24 10:53:12',
            'updated_at' => '2023-11-26 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 13,
            'picks' => '{"767": "7", "777": "56", "803": "32", "809": "34", "810": "47"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-24 10:58:24',
            'updated_at' => '2023-11-25 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 13,
            'picks' => '{"761": "42", "763": "81", "803": "30", "821": "149", "823": "158"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-24 11:01:45',
            'updated_at' => '2023-11-26 16:11:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 13,
            'picks' => '{"761": "42", "767": "67", "768": "87", "770": "85", "778": "80"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-24 11:12:55',
            'updated_at' => '2023-11-25 15:43:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 13,
            'picks' => '{"761": "42", "796": "51", "808": "97", "817": "154", "827": "151"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-24 11:25:39',
            'updated_at' => '2023-11-26 19:15:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 13,
            'picks' => '{"778": "80", "797": "58", "798": "133", "800": "125", "826": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-24 12:20:14',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 13,
            'picks' => '{"769": "106", "770": "85", "777": "56", "778": "63", "789": "3"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-24 13:07:24',
            'updated_at' => '2023-11-25 19:06:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 13,
            'picks' => '{"776": "55", "789": "3", "800": "126", "803": "32", "817": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-24 14:03:12',
            'updated_at' => '2023-11-25 22:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 13,
            'picks' => '{"765": "123", "783": "83", "799": "104", "803": "30", "828": "152"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-24 14:45:28',
            'updated_at' => '2023-11-26 23:28:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 13,
            'picks' => '{"778": "80", "786": "24", "789": "3", "808": "97", "826": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-25 08:50:09',
            'updated_at' => '2023-11-26 20:07:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 13,
            'picks' => '{"778": "63", "789": "3", "791": "6", "801": "129", "820": "161"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-11-25 09:07:03',
            'updated_at' => '2023-11-26 15:52:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 13,
            'picks' => '{"778": "80", "788": "118", "800": "126", "809": "34", "812": "115"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-25 09:50:32',
            'updated_at' => '2023-11-26 01:49:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 13,
            'picks' => '{"772": "26", "776": "55", "777": "56", "789": "3", "829": "155"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-25 10:24:23',
            'updated_at' => '2023-11-27 23:09:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 13,
            'picks' => '{"776": "55", "778": "80", "791": "6", "795": "77", "826": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-25 10:56:28',
            'updated_at' => '2023-11-26 20:07:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 13,
            'picks' => '{"775": "76", "776": "55", "789": "3", "791": "6", "825": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-25 17:34:11',
            'updated_at' => '2023-11-26 19:18:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 14,
            'picks' => '{"844": "165", "846": "144", "848": "139", "849": "153", "852": "141"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-29 13:44:36',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 14,
            'picks' => '{"830": "72", "835": "34", "838": "55", "843": "157", "850": "160"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-29 22:16:24',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 14,
            'picks' => '{"832": "109", "833": "106", "840": "143", "841": "161", "843": "145"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-29 22:50:06',
            'updated_at' => '2023-12-03 17:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 14,
            'picks' => '{"832": "109", "841": "135", "843": "145", "846": "147", "847": "152"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-30 06:29:13',
            'updated_at' => '2023-12-03 17:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 14,
            'picks' => '{"831": "128", "833": "82", "843": "145", "844": "148", "849": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-30 08:00:10',
            'updated_at' => '2023-12-03 19:46:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 14,
            'picks' => '{"831": "128", "833": "82", "835": "3", "836": "110", "837": "111"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-11-30 08:04:00',
            'updated_at' => '2023-12-02 19:49:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 14,
            'picks' => '{"834": "118", "840": "143", "841": "135", "843": "145", "850": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-11-30 08:44:40',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 14,
            'picks' => '{"831": "85", "832": "109", "835": "34", "837": "111", "841": "161"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-11-30 09:09:41',
            'updated_at' => '2023-12-03 17:21:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 14,
            'picks' => '{"832": "109", "834": "118", "835": "34", "836": "110", "840": "143"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-30 15:25:37',
            'updated_at' => '2023-12-02 19:32:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 14,
            'picks' => '{"832": "109", "835": "34", "837": "111", "839": "63", "840": "143"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-11-30 18:04:53',
            'updated_at' => '2023-12-02 23:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 14,
            'picks' => '{"831": "128", "833": "82", "845": "154", "846": "147", "852": "149"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-01 07:23:04',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 14,
            'picks' => '{"831": "128", "832": "109", "835": "34", "839": "42", "851": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-01 07:32:18',
            'updated_at' => '2023-12-03 23:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 14,
            'picks' => '{"831": "85", "833": "82", "835": "34", "838": "55", "839": "63"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-01 11:45:00',
            'updated_at' => '2023-12-02 23:44:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 14,
            'picks' => '{"831": "128", "838": "55", "839": "42", "844": "148", "850": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-01 12:15:18',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 14,
            'picks' => '{"831": "128", "832": "109", "835": "3", "837": "111", "838": "55"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-01 18:30:00',
            'updated_at' => '2023-12-02 23:44:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 14,
            'picks' => '{"831": "128", "835": "3", "836": "4", "837": "95", "839": "63"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-01 19:53:31',
            'updated_at' => '2023-12-02 23:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 14,
            'picks' => '{"833": "82", "835": "3", "837": "95", "838": "55", "849": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-01 20:04:56',
            'updated_at' => '2023-12-03 19:46:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 14,
            'picks' => '{"832": "109", "834": "13", "835": "34", "837": "95", "838": "32"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-01 20:29:34',
            'updated_at' => '2023-12-02 23:44:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 14,
            'picks' => '{"832": "109", "834": "118", "838": "55", "839": "42", "850": "162"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-01 20:55:48',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 14,
            'picks' => '{"832": "109", "836": "110", "837": "111", "843": "145", "852": "149"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-01 21:11:40',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 14,
            'picks' => '{"832": "109", "833": "106", "835": "34", "837": "111", "839": "42"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 05:00:16',
            'updated_at' => '2023-12-02 23:37:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 14,
            'picks' => '{"833": "82", "834": "118", "835": "3", "851": "146", "852": "149"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 05:59:42',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 14,
            'picks' => '{"832": "109", "838": "32", "843": "145", "844": "148", "851": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 07:41:29',
            'updated_at' => '2023-12-03 23:30:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 14,
            'picks' => '{"832": "109", "833": "82", "835": "34", "837": "95", "838": "55"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 08:31:54',
            'updated_at' => '2023-12-02 23:44:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 14,
            'picks' => '{"835": "3", "839": "42", "846": "147", "849": "142", "850": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 08:56:06',
            'updated_at' => '2023-12-03 19:46:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 14,
            'picks' => '{"833": "82", "839": "42", "842": "159", "847": "152", "852": "149"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-02 09:13:45',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 14,
            'picks' => '{"832": "109", "835": "34", "837": "111", "838": "55", "850": "160"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-02 09:32:20',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 14,
            'picks' => '{"833": "82", "835": "3", "839": "63", "846": "147", "850": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-02 09:40:27',
            'updated_at' => '2023-12-03 19:34:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 14,
            'picks' => '{"841": "161", "843": "145", "845": "154", "847": "152", "849": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 09:44:30',
            'updated_at' => '2023-12-03 19:46:02',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 14,
            'picks' => '{"833": "82", "835": "3", "836": "4", "838": "55", "845": "166"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 09:50:45',
            'updated_at' => '2023-12-03 15:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 14,
            'picks' => '{"835": "3", "838": "32", "839": "42", "848": "164", "852": "149"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 10:06:52',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 14,
            'picks' => '{"835": "34", "838": "55", "839": "42", "849": "153", "852": "141"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 10:09:27',
            'updated_at' => '2023-12-04 23:45:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 14,
            'picks' => '{"842": "136", "843": "145", "849": "142", "850": "160", "852": "149"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 11:29:03',
            'updated_at' => '2023-12-04 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 14,
            'picks' => '{"844": "148", "846": "144", "848": "164", "851": "150", "852": "149"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 11:29:32',
            'updated_at' => '2023-12-04 23:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 14,
            'picks' => '{"832": "109", "837": "111", "838": "32", "843": "145", "849": "153"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-02 11:52:16',
            'updated_at' => '2023-12-03 19:46:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 14,
            'picks' => '{"833": "82", "834": "118", "837": "95", "843": "145", "844": "165"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-02 11:55:03',
            'updated_at' => '2023-12-03 16:37:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 15,
            'picks' => '{"855": "145", "859": "137", "863": "162", "865": "152", "867": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-06 11:23:57',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 15,
            'picks' => '{"855": "145", "858": "164", "861": "142", "863": "162", "864": "150"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-06 11:31:57',
            'updated_at' => '2023-12-10 19:42:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 15,
            'picks' => '{"855": "140", "856": "141", "857": "159", "862": "151", "865": "144"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-06 12:45:22',
            'updated_at' => '2023-12-10 19:26:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 15,
            'picks' => '{"853": "68", "855": "145", "858": "164", "861": "142", "864": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-06 13:40:40',
            'updated_at' => '2023-12-10 19:42:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 15,
            'picks' => '{"853": "9", "854": "156", "855": "145", "859": "137", "866": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-06 16:12:36',
            'updated_at' => '2023-12-10 23:31:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 15,
            'picks' => '{"854": "156", "855": "140", "859": "153", "864": "138", "867": "158"}',
            'pick_count' => 3,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-12-07 00:36:13',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 15,
            'picks' => '{"855": "145", "856": "148", "857": "147", "860": "157", "861": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-07 06:32:47',
            'updated_at' => '2023-12-10 16:46:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 13,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 14,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 14,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 14,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 13,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 14,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 0,
            'created_at' => '2023-12-07 13:07:59',
            'updated_at' => '2023-12-07 13:07:59',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 15,
            'picks' => '{"853": "68", "856": "148", "857": "147", "861": "142", "864": "150"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-07 11:29:42',
            'updated_at' => '2023-12-10 19:42:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 15,
            'picks' => '{"853": "9", "855": "145", "862": "155", "864": "138", "867": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-07 12:20:11',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 15,
            'picks' => '{"855": "145", "858": "136", "863": "162", "864": "150", "867": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-07 13:37:29',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 15,
            'picks' => '{"855": "140", "858": "136", "860": "139", "866": "160", "868": "165"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-07 14:06:40',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 15,
            'picks' => '{"857": "147", "862": "155", "864": "138", "865": "144", "868": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-07 16:38:04',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 15,
            'picks' => '{"854": "161", "855": "145", "860": "157", "861": "149", "866": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-07 18:55:56',
            'updated_at' => '2023-12-10 23:31:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 15,
            'picks' => '{"853": "9", "854": "161", "856": "141", "859": "137", "860": "157"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-07 19:12:31',
            'updated_at' => '2023-12-10 16:41:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 15,
            'picks' => '{"854": "161", "855": "145", "863": "163", "866": "143", "868": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-07 19:21:58',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 15,
            'picks' => '{"854": "161", "855": "145", "857": "147", "860": "157", "867": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-07 19:54:07',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 15,
            'picks' => '{"856": "148", "859": "153", "863": "163", "864": "138", "866": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 08:34:11',
            'updated_at' => '2023-12-10 23:31:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 15,
            'picks' => '{"855": "145", "857": "147", "863": "162", "864": "150", "868": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-08 09:50:17',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 15,
            'picks' => '{"855": "145", "856": "141", "861": "142", "864": "150", "867": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 14:54:24',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 15,
            'picks' => '{"853": "9", "857": "147", "859": "137", "862": "155", "863": "163"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-08 15:03:23',
            'updated_at' => '2023-12-10 19:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 15,
            'picks' => '{"855": "140", "859": "137", "863": "162", "864": "150", "867": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 17:43:02',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 15,
            'picks' => '{"855": "145", "857": "147", "861": "142", "864": "150", "867": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-08 20:24:19',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 15,
            'picks' => '{"859": "137", "860": "157", "863": "163", "865": "152", "867": "158"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 20:28:46',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 15,
            'picks' => '{"855": "145", "857": "147", "858": "164", "861": "149", "865": "144"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 21:58:34',
            'updated_at' => '2023-12-10 19:26:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 15,
            'picks' => '{"856": "141", "857": "147", "863": "163", "866": "143", "868": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 22:12:29',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 15,
            'picks' => '{"864": "138", "865": "144", "866": "160", "867": "146", "868": "154"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-08 22:22:43',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 15,
            'picks' => '{"853": "9", "856": "141", "860": "157", "861": "142", "868": "154"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-08 23:33:01',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 15,
            'picks' => '{"855": "145", "858": "136", "859": "153", "860": "157", "864": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-09 02:14:15',
            'updated_at' => '2023-12-10 19:42:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 15,
            'picks' => '{"853": "68", "859": "137", "863": "162", "864": "150", "868": "154"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-09 06:28:59',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 15,
            'picks' => '{"855": "140", "856": "148", "857": "159", "860": "139", "867": "158"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 07:46:25',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 15,
            'picks' => '{"853": "9", "855": "145", "857": "147", "861": "142", "867": "146"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-09 08:59:41',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 15,
            'picks' => '{"856": "141", "857": "159", "860": "157", "861": "149", "868": "165"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-09 09:21:25',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 15,
            'picks' => '{"856": "141", "861": "142", "864": "150", "866": "160", "867": "158"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 10:06:15',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 15,
            'picks' => '{"855": "145", "856": "148", "859": "137", "861": "149", "862": "155"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-09 11:09:09',
            'updated_at' => '2023-12-10 19:15:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 15,
            'picks' => '{"853": "9", "855": "145", "856": "141", "865": "144", "868": "154"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 11:31:19',
            'updated_at' => '2023-12-11 23:44:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 15,
            'picks' => '{"856": "141", "857": "147", "864": "150", "866": "160", "867": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-09 12:50:03',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 15,
            'picks' => '{"857": "147", "861": "142", "862": "151", "864": "138", "866": "143"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 13:00:21',
            'updated_at' => '2023-12-10 23:31:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 15,
            'picks' => '{"856": "141", "857": "159", "865": "152", "866": "160", "867": "158"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 13:11:54',
            'updated_at' => '2023-12-11 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 15,
            'picks' => '{"855": "145", "860": "139", "861": "142", "863": "162", "865": "144"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-09 13:50:49',
            'updated_at' => '2023-12-10 19:26:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 15,
            'picks' => '{"0": "0"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-10 19:14:54',
            'updated_at' => '2023-12-10 19:14:54',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 16,
            'picks' => '{"870": "4", "873": "108", "883": "150", "884": "154", "890": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-13 12:04:26',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 16,
            'picks' => '{"871": "72", "872": "115", "873": "108", "886": "135", "888": "138"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-13 12:19:54',
            'updated_at' => '2023-12-17 19:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 16,
            'picks' => '{"875": "151", "876": "141", "878": "145", "879": "146", "880": "136"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-13 13:52:39',
            'updated_at' => '2023-12-17 15:51:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 16,
            'picks' => '{"881": "142", "884": "159", "885": "158", "886": "162", "887": "153"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-13 23:19:39',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 16,
            'picks' => '{"869": "35", "878": "145", "883": "150", "888": "138", "890": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-14 10:18:55',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 16,
            'picks' => '{"869": "35", "872": "13", "873": "108", "877": "148", "887": "166"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-14 11:54:04',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 16,
            'picks' => '{"870": "61", "871": "72", "873": "108", "874": "131", "875": "151"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-14 12:10:14',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 16,
            'picks' => '{"870": "4", "876": "141", "879": "146", "881": "142", "885": "157"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-15 09:00:08',
            'updated_at' => '2023-12-17 16:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 16,
            'picks' => '{"874": "131", "876": "141", "877": "148", "886": "135", "887": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-15 09:49:44',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 16,
            'picks' => '{"869": "35", "871": "72", "872": "115", "874": "131", "877": "148"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-15 10:07:42',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 16,
            'picks' => '{"873": "108", "876": "141", "878": "144", "883": "150", "888": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-15 13:39:04',
            'updated_at' => '2023-12-17 19:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 16,
            'picks' => '{"872": "13", "873": "108", "876": "141", "877": "161", "880": "136"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-15 15:48:51',
            'updated_at' => '2023-12-17 15:49:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 16,
            'picks' => '{"877": "148", "880": "136", "881": "142", "884": "154", "890": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-15 15:53:47',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 16,
            'picks' => '{"876": "141", "879": "146", "883": "156", "885": "158", "888": "138"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-15 16:24:03',
            'updated_at' => '2023-12-17 19:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 16,
            'picks' => '{"870": "4", "871": "72", "876": "155", "879": "146", "881": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-15 16:37:26',
            'updated_at' => '2023-12-17 16:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 16,
            'picks' => '{"869": "79", "871": "33", "872": "115", "873": "108", "874": "131"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-12-15 17:22:45',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 16,
            'picks' => '{"877": "148", "882": "165", "884": "154", "885": "158", "886": "135"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-15 17:32:06',
            'updated_at' => '2023-12-17 19:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 16,
            'picks' => '{"869": "79", "870": "4", "871": "33", "873": "108", "874": "131"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-15 19:09:35',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 16,
            'picks' => '{"876": "141", "878": "145", "880": "136", "888": "143", "890": "163"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-15 19:39:43',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 16,
            'picks' => '{"878": "145", "879": "146", "880": "136", "885": "157", "887": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-15 20:30:33',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 16,
            'picks' => '{"869": "35", "872": "13", "876": "155", "888": "143", "890": "163"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-15 20:42:05',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 16,
            'picks' => '{"879": "146", "881": "142", "883": "150", "885": "158", "890": "160"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-15 22:04:11',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 16,
            'picks' => '{"876": "141", "882": "147", "885": "158", "886": "135", "887": "166"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-15 22:32:45',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 16,
            'picks' => '{"877": "161", "878": "144", "879": "146", "884": "154", "885": "157"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 08:20:35',
            'updated_at' => '2023-12-17 16:00:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 16,
            'picks' => '{"876": "141", "878": "145", "879": "146", "881": "142", "888": "138"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 08:21:20',
            'updated_at' => '2023-12-17 19:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 16,
            'picks' => '{"869": "79", "871": "72", "872": "13", "877": "148", "881": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 09:21:37',
            'updated_at' => '2023-12-17 16:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 16,
            'picks' => '{"876": "155", "878": "145", "879": "146", "888": "138", "890": "160"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-16 09:26:41',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 16,
            'picks' => '{"870": "61", "876": "141", "880": "136", "882": "147", "890": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 10:01:33',
            'updated_at' => '2023-12-18 23:19:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 16,
            'picks' => '{"876": "141", "878": "145", "883": "150", "889": "137", "890": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 10:06:09',
            'updated_at' => '2023-12-18 23:19:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 16,
            'picks' => '{"876": "141", "881": "142", "882": "147", "884": "154", "888": "143"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-16 10:21:12',
            'updated_at' => '2023-12-17 19:10:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 16,
            'picks' => '{"876": "141", "879": "146", "880": "136", "881": "142", "883": "150"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-16 10:26:13',
            'updated_at' => '2023-12-17 16:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 16,
            'picks' => '{"871": "72", "873": "108", "874": "131", "880": "136", "887": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-16 10:36:08',
            'updated_at' => '2023-12-18 18:16:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 16,
            'picks' => '{"872": "13", "877": "148", "883": "150", "886": "135", "890": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-16 10:42:24',
            'updated_at' => '2023-12-18 23:19:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 16,
            'picks' => '{"869": "79", "870": "61", "873": "108", "876": "155", "877": "148"}',
            'pick_count' => 5,
            'wins' => 5,
            'losses' => 0,
            'created_at' => '2023-12-16 10:57:21',
            'updated_at' => '2023-12-17 00:54:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 16,
            'picks' => '{"876": "141", "877": "161", "878": "145", "881": "142", "890": "160"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-16 11:23:51',
            'updated_at' => '2023-12-18 23:19:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 16,
            'picks' => '{"870": "4", "872": "115", "873": "108", "881": "142", "887": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-16 11:53:43',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 16,
            'picks' => '{"873": "108", "878": "145", "882": "165", "886": "135", "887": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-16 11:59:16',
            'updated_at' => '2023-12-17 19:14:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 17,
            'picks' => '{"892": "114", "895": "45", "898": "77", "903": "148", "909": "149"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-20 12:14:15',
            'updated_at' => '2023-12-24 18:59:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 17,
            'picks' => '{"903": "136", "904": "139", "906": "155", "909": "164", "910": "135"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-20 13:04:39',
            'updated_at' => '2023-12-24 19:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 17,
            'picks' => '{"903": "148", "905": "142", "907": "159", "909": "164", "913": "151"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-20 20:25:50',
            'updated_at' => '2023-12-25 16:05:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 17,
            'picks' => '{"891": "101", "898": "121", "902": "138", "903": "148", "907": "166"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-20 22:23:23',
            'updated_at' => '2023-12-24 16:34:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 17,
            'picks' => '{"891": "101", "892": "37", "895": "45", "898": "121", "906": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-20 22:26:59',
            'updated_at' => '2023-12-24 16:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 17,
            'picks' => '{"901": "161", "905": "142", "908": "163", "911": "154", "915": "137"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-20 23:15:47',
            'updated_at' => '2023-12-25 23:35:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 17,
            'picks' => '{"901": "161", "905": "142", "908": "163", "914": "158", "915": "137"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-21 05:39:28',
            'updated_at' => '2023-12-25 23:35:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 17,
            'picks' => '{"891": "101", "892": "114", "894": "26", "895": "45", "898": "121"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-21 08:04:04',
            'updated_at' => '2023-12-23 22:42:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 17,
            'picks' => '{"891": "101", "892": "114", "893": "76", "894": "26", "900": "153"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-21 08:50:55',
            'updated_at' => '2023-12-23 15:40:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 17,
            'picks' => '{"891": "98", "892": "114", "893": "76", "900": "153", "908": "163"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-21 17:55:17',
            'updated_at' => '2023-12-24 16:03:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 17,
            'picks' => '{"891": "101", "892": "114", "894": "110", "899": "23", "900": "153"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-21 19:11:57',
            'updated_at' => '2023-12-24 02:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 17,
            'picks' => '{"892": "114", "903": "136", "906": "145", "911": "154", "915": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-21 21:05:49',
            'updated_at' => '2023-12-25 23:35:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 17,
            'picks' => '{"893": "76", "896": "120", "897": "28", "898": "121", "910": "140"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-21 23:21:02',
            'updated_at' => '2023-12-24 19:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 17,
            'picks' => '{"892": "114", "893": "76", "895": "1", "897": "96", "902": "138"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-21 23:44:02',
            'updated_at' => '2023-12-23 23:02:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 17,
            'picks' => '{"894": "110", "895": "45", "899": "94", "902": "138", "913": "150"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-22 07:29:20',
            'updated_at' => '2023-12-25 16:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 17,
            'picks' => '{"895": "45", "898": "121", "901": "161", "906": "145", "912": "156"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-22 09:17:25',
            'updated_at' => '2023-12-24 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 17,
            'picks' => '{"903": "136", "905": "142", "906": "155", "911": "154", "913": "150"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-22 10:49:16',
            'updated_at' => '2023-12-25 16:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 17,
            'picks' => '{"893": "76", "896": "120", "897": "28", "899": "94", "904": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-22 11:14:43',
            'updated_at' => '2023-12-24 16:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 17,
            'picks' => '{"895": "45", "905": "147", "908": "165", "911": "143", "913": "150"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-22 12:02:50',
            'updated_at' => '2023-12-25 16:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 17,
            'picks' => '{"892": "114", "895": "45", "901": "141", "903": "148", "906": "155"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-22 14:34:23',
            'updated_at' => '2023-12-24 16:18:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 17,
            'picks' => '{"895": "45", "901": "141", "905": "142", "906": "145", "910": "140"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-22 15:19:11',
            'updated_at' => '2023-12-24 19:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 17,
            'picks' => '{"892": "114", "895": "1", "898": "121", "901": "141", "904": "146"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-22 16:22:03',
            'updated_at' => '2023-12-24 16:11:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 17,
            'picks' => '{"892": "37", "898": "121", "901": "141", "904": "146", "905": "142"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-22 17:56:22',
            'updated_at' => '2023-12-24 16:24:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 17,
            'picks' => '{"893": "76", "895": "45", "896": "120", "897": "28", "898": "121"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-22 20:59:27',
            'updated_at' => '2023-12-23 22:45:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 17,
            'picks' => '{"896": "120", "904": "146", "905": "142", "906": "145", "910": "140"}',
            'pick_count' => 5,
            'wins' => 3,
            'losses' => 2,
            'created_at' => '2023-12-22 22:29:31',
            'updated_at' => '2023-12-24 19:27:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 17,
            'picks' => '{"894": "26", "898": "121", "903": "148", "909": "164", "914": "160"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-22 22:51:28',
            'updated_at' => '2023-12-25 19:54:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 17,
            'picks' => '{"901": "141", "902": "152", "908": "163", "912": "144", "913": "150"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-22 23:44:05',
            'updated_at' => '2023-12-25 16:05:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 17,
            'picks' => '{"893": "8", "895": "45", "896": "120", "899": "94", "905": "142"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-23 09:33:35',
            'updated_at' => '2023-12-24 16:24:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 17,
            'picks' => '{"899": "94", "901": "161", "908": "165", "910": "135", "911": "143"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-23 10:03:44',
            'updated_at' => '2023-12-24 19:28:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 17,
            'picks' => '{"898": "121", "901": "141", "904": "146", "905": "142", "906": "145"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-23 11:07:53',
            'updated_at' => '2023-12-24 16:24:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 17,
            'picks' => '{"893": "8", "894": "110", "895": "45", "898": "77", "901": "141"}',
            'pick_count' => 5,
            'wins' => 1,
            'losses' => 4,
            'created_at' => '2023-12-23 11:28:17',
            'updated_at' => '2023-12-23 22:42:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 17,
            'picks' => '{"894": "26", "895": "1", "897": "28", "898": "77", "909": "164"}',
            'pick_count' => 5,
            'wins' => 4,
            'losses' => 1,
            'created_at' => '2023-12-23 11:45:05',
            'updated_at' => '2023-12-24 18:59:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 17,
            'picks' => '{"895": "45", "904": "146", "909": "149", "911": "154", "912": "144"}',
            'pick_count' => 5,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-23 11:56:05',
            'updated_at' => '2023-12-24 23:25:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 17,
            'picks' => '{"904": "146", "905": "142", "910": "140", "913": "150", "915": "162"}',
            'pick_count' => 5,
            'wins' => 2,
            'losses' => 3,
            'created_at' => '2023-12-23 11:59:05',
            'updated_at' => '2023-12-25 23:35:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 16,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:19:55',
            'updated_at' => '2023-12-26 16:19:55',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 16,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:19:55',
            'updated_at' => '2023-12-26 16:19:55',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 16,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:25:52',
            'updated_at' => '2023-12-26 16:25:52',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 17,
            'picks' => '{"0": "0"}',
            'pick_count' => 0,
            'wins' => 0,
            'losses' => 5,
            'created_at' => '2023-12-26 16:34:08',
            'updated_at' => '2023-12-26 16:34:08',
        ]);

        DB::table('picks')->insert([
            'user_id' => 24,
            'week_id' => 18,
            'picks' => '{"918": "119", "919": "82", "920": "95", "929": "84", "931": "34", "932": "134", "936": "139", "941": "151", "947": "146", "951": "63"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-27 11:03:06',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 1,
            'week_id' => 18,
            'picks' => '{"916": "126", "917": "130", "918": "55", "920": "95", "922": "47", "924": "6", "926": "78", "931": "34", "950": "85", "951": "3"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-27 13:17:25',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 21,
            'week_id' => 18,
            'picks' => '{"916": "111", "918": "55", "920": "95", "921": "60", "922": "47", "924": "81", "928": "67", "929": "84", "948": "56", "951": "3"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-27 13:37:55',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 22,
            'week_id' => 18,
            'picks' => '{"916": "111", "917": "74", "919": "105", "920": "95", "921": "60", "922": "47", "924": "81", "926": "78", "928": "80", "952": "106"}',
            'pick_count' => 10,
            'wins' => 2,
            'losses' => 8,
            'created_at' => '2023-12-27 13:48:24',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 23,
            'week_id' => 18,
            'picks' => '{"916": "126", "917": "130", "918": "55", "920": "95", "921": "60", "923": "142", "925": "22", "930": "10", "948": "56", "950": "85"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-27 13:54:30',
            'updated_at' => '2024-01-01 16:13:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 14,
            'week_id' => 18,
            'picks' => '{"919": "82", "928": "80", "934": "136", "937": "165", "939": "160", "941": "151", "942": "153", "947": "146", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-27 15:44:13',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 3,
            'week_id' => 18,
            'picks' => '{"917": "130", "919": "82", "923": "142", "925": "50", "928": "80", "931": "34", "947": "146", "950": "85", "951": "63", "952": "128"}',
            'pick_count' => 10,
            'wins' => 9,
            'losses' => 1,
            'created_at' => '2023-12-27 15:50:29',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 37,
            'week_id' => 18,
            'picks' => '{"918": "55", "926": "78", "928": "80", "929": "87", "932": "109", "933": "143", "937": "147", "938": "164", "940": "137", "951": "3"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-27 17:35:53',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 7,
            'week_id' => 18,
            'picks' => '{"918": "55", "919": "82", "921": "60", "922": "47", "924": "81", "925": "50", "926": "78", "928": "80", "929": "87", "930": "58"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-27 17:46:31',
            'updated_at' => '2023-12-30 17:29:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 25,
            'week_id' => 18,
            'picks' => '{"920": "95", "923": "142", "924": "81", "925": "22", "928": "80", "929": "87", "936": "139", "937": "147", "938": "164", "944": "163"}',
            'pick_count' => 10,
            'wins' => 2,
            'losses' => 8,
            'created_at' => '2023-12-27 18:54:47',
            'updated_at' => '2023-12-31 19:04:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 11,
            'week_id' => 18,
            'picks' => '{"934": "140", "936": "139", "937": "147", "939": "160", "942": "153", "943": "162", "945": "144", "947": "146", "951": "63", "952": "128"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-27 19:27:35',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 27,
            'week_id' => 18,
            'picks' => '{"919": "82", "920": "95", "928": "80", "929": "84", "930": "10", "931": "32", "946": "150", "947": "155", "951": "3", "952": "128"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-27 20:16:43',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 6,
            'week_id' => 18,
            'picks' => '{"920": "95", "923": "142", "925": "22", "931": "34", "937": "147", "946": "150", "948": "56", "950": "85", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-27 21:31:19',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 38,
            'week_id' => 18,
            'picks' => '{"920": "95", "921": "60", "922": "73", "923": "142", "924": "6", "928": "80", "929": "84", "941": "148", "944": "163", "951": "3"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-28 10:17:12',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 26,
            'week_id' => 18,
            'picks' => '{"920": "95", "921": "60", "924": "6", "929": "84", "931": "32", "939": "160", "942": "153", "949": "42", "950": "85", "952": "128"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-28 10:36:06',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 10,
            'week_id' => 18,
            'picks' => '{"926": "78", "928": "80", "929": "87", "930": "58", "931": "32", "948": "133", "949": "42", "950": "51", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-28 13:26:33',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 9,
            'week_id' => 18,
            'picks' => '{"921": "91", "923": "142", "929": "84", "932": "134", "940": "137", "946": "150", "948": "56", "949": "104", "950": "85", "951": "3"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-28 14:01:38',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 34,
            'week_id' => 18,
            'picks' => '{"928": "80", "936": "149", "940": "154", "941": "148", "942": "153", "945": "144", "946": "150", "948": "133", "951": "3", "952": "128"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-28 15:05:02',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 35,
            'week_id' => 18,
            'picks' => '{"925": "50", "926": "78", "928": "80", "929": "84", "936": "149", "937": "147", "938": "157", "944": "163", "947": "146", "951": "63"}',
            'pick_count' => 10,
            'wins' => 8,
            'losses' => 2,
            'created_at' => '2023-12-28 16:03:37',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 15,
            'week_id' => 18,
            'picks' => '{"923": "142", "926": "78", "928": "80", "929": "87", "934": "136", "938": "164", "944": "163", "946": "150", "948": "56", "950": "85"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-28 16:41:35',
            'updated_at' => '2024-01-01 16:13:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 39,
            'week_id' => 18,
            'picks' => '{"922": "73", "925": "22", "926": "78", "927": "59", "935": "138", "938": "157", "941": "148", "942": "158", "947": "155", "951": "63"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-28 16:48:15',
            'updated_at' => '2024-01-01 20:48:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 12,
            'week_id' => 18,
            'picks' => '{"926": "78", "932": "134", "934": "140", "935": "138", "937": "147", "938": "164", "941": "148", "942": "153", "947": "146", "949": "104"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-28 17:10:12',
            'updated_at' => '2024-01-01 16:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 33,
            'week_id' => 18,
            'picks' => '{"923": "142", "926": "78", "928": "80", "929": "84", "931": "32", "948": "56", "949": "104", "950": "85", "951": "3", "952": "128"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-28 17:12:50',
            'updated_at' => '2024-01-02 00:53:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 4,
            'week_id' => 18,
            'picks' => '{"923": "159", "935": "138", "939": "160", "940": "137", "941": "151", "942": "153", "943": "162", "944": "163", "945": "152", "946": "141"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-28 17:48:34',
            'updated_at' => '2023-12-31 19:23:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 2,
            'week_id' => 18,
            'picks' => '{"923": "142", "928": "80", "929": "84", "930": "10", "931": "34", "948": "56", "949": "104", "950": "85", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-28 18:09:57',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 36,
            'week_id' => 18,
            'picks' => '{"923": "142", "926": "86", "930": "10", "932": "109", "934": "136", "937": "147", "949": "104", "950": "85", "951": "3", "952": "128"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-28 20:09:14',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 13,
            'week_id' => 18,
            'picks' => '{"924": "6", "925": "22", "926": "78", "928": "67", "930": "58", "940": "137", "947": "146", "948": "56", "951": "63", "952": "128"}',
            'pick_count' => 10,
            'wins' => 8,
            'losses' => 2,
            'created_at' => '2023-12-28 20:32:06',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 20,
            'week_id' => 18,
            'picks' => '{"924": "6", "925": "22", "926": "78", "928": "80", "931": "34", "943": "162", "947": "146", "949": "104", "951": "3", "952": "128"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-28 20:46:34',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 28,
            'week_id' => 18,
            'picks' => '{"925": "22", "926": "78", "929": "87", "931": "34", "934": "140", "938": "164", "948": "133", "949": "42", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-28 23:20:21',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 17,
            'week_id' => 18,
            'picks' => '{"925": "50", "926": "78", "928": "80", "929": "84", "932": "134", "934": "140", "936": "139", "937": "147", "939": "135", "951": "3"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-29 07:34:33',
            'updated_at' => '2024-01-01 20:48:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 31,
            'week_id' => 18,
            'picks' => '{"926": "78", "928": "80", "929": "87", "931": "34", "933": "145", "934": "136", "938": "157", "947": "146", "948": "56", "951": "63"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-29 09:21:43',
            'updated_at' => '2024-01-01 20:48:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 8,
            'week_id' => 18,
            'picks' => '{"929": "87", "931": "34", "936": "149", "937": "147", "939": "160", "941": "148", "946": "150", "948": "56", "949": "104", "950": "85"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-29 11:54:24',
            'updated_at' => '2024-01-01 16:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 5,
            'week_id' => 18,
            'picks' => '{"928": "80", "929": "84", "931": "32", "933": "143", "934": "140", "946": "150", "948": "56", "949": "104", "950": "85", "951": "3"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-29 19:30:02',
            'updated_at' => '2024-01-01 20:48:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 18,
            'week_id' => 18,
            'picks' => '{"932": "109", "934": "140", "938": "157", "939": "135", "941": "148", "942": "158", "944": "161", "946": "150", "949": "42", "950": "51"}',
            'pick_count' => 10,
            'wins' => 7,
            'losses' => 3,
            'created_at' => '2023-12-29 20:34:54',
            'updated_at' => '2024-01-01 16:17:03',
        ]);

        DB::table('picks')->insert([
            'user_id' => 32,
            'week_id' => 18,
            'picks' => '{"929": "87", "930": "10", "932": "134", "934": "136", "939": "160", "940": "154", "943": "162", "947": "146", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 2,
            'losses' => 8,
            'created_at' => '2023-12-29 21:23:49',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 40,
            'week_id' => 18,
            'picks' => '{"929": "87", "930": "10", "934": "140", "939": "135", "943": "162", "947": "155", "948": "56", "950": "85", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 4,
            'losses' => 6,
            'created_at' => '2023-12-30 09:26:56',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 16,
            'week_id' => 18,
            'picks' => '{"929": "84", "931": "34", "932": "134", "935": "156", "937": "147", "942": "153", "943": "162", "948": "56", "949": "42", "952": "128"}',
            'pick_count' => 10,
            'wins' => 6,
            'losses' => 4,
            'created_at' => '2023-12-30 11:06:23',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 29,
            'week_id' => 18,
            'picks' => '{"929": "84", "931": "34", "935": "138", "936": "149", "940": "137", "942": "153", "944": "163", "946": "150", "951": "3", "952": "106"}',
            'pick_count' => 10,
            'wins' => 5,
            'losses' => 5,
            'created_at' => '2023-12-30 11:41:48',
            'updated_at' => '2024-01-02 00:53:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 19,
            'week_id' => 18,
            'picks' => '{"933": "145", "934": "136", "935": "138", "938": "164", "939": "135", "940": "137", "942": "153", "946": "141", "950": "51", "951": "3"}',
            'pick_count' => 10,
            'wins' => 3,
            'losses' => 7,
            'created_at' => '2023-12-30 23:14:24',
            'updated_at' => '2024-01-01 20:48:04',
        ]);

        DB::table('picks')->insert([
            'user_id' => 30,
            'week_id' => 18,
            'picks' => '{"0": "0"}',
            'pick_count' => 10,
            'wins' => 0,
            'losses' => 10,
            'created_at' => '2024-01-11 10:00:00',
            'updated_at' => '2024-01-11 10:00:00',
        ]);
    }
}
