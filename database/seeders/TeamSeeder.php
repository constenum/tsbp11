<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'odds_api_name' => 'Air Force Falcons',
            'yahoo_name' => 'Air Force Falcons',
            'short_name' => 'Air Force',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Akron Zips',
            'yahoo_name' => 'Akron Zips',
            'short_name' => 'Akron',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Alabama Crimson Tide',
            'yahoo_name' => 'Alabama Crimson Tide',
            'short_name' => 'Alabama',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Appalachian State Mountaineers',
            'yahoo_name' => 'Appalachian State Mountaineers',
            'short_name' => 'Appalachian State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Arizona State Sun Devils',
            'yahoo_name' => 'Arizona State Sun Devils',
            'short_name' => 'Arizona State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Arizona Wildcats',
            'yahoo_name' => 'Arizona Wildcats',
            'short_name' => 'Arizona',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Arkansas Razorbacks',
            'yahoo_name' => 'Arkansas Razorbacks',
            'short_name' => 'Arkansas',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Arkansas State Red Wolves',
            'yahoo_name' => 'Arkansas State Red Wolves',
            'short_name' => 'Arkansas State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Army Black Knights',
            'yahoo_name' => 'Army Black Knights',
            'short_name' => 'Army',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Auburn Tigers',
            'yahoo_name' => 'Auburn Tigers',
            'short_name' => 'Auburn',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Ball State Cardinals',
            'yahoo_name' => 'Ball State Cardinals',
            'short_name' => 'Ball State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Baylor Bears',
            'yahoo_name' => 'Baylor Bears',
            'short_name' => 'Baylor',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Boise State Broncos',
            'yahoo_name' => 'Boise State Broncos',
            'short_name' => 'Boise State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Boston College Eagles',
            'yahoo_name' => 'Boston College Eagles',
            'short_name' => 'Boston College',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Bowling Green Falcons',
            'yahoo_name' => 'Bowling Green Falcons',
            'short_name' => 'Bowling Green',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Buffalo Bulls',
            'yahoo_name' => 'Buffalo Bulls',
            'short_name' => 'Buffalo',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'BYU Cougars',
            'yahoo_name' => 'BYU Cougars',
            'short_name' => 'BYU',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'California Golden Bears',
            'yahoo_name' => 'California Golden Bears',
            'short_name' => 'California',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Central Michigan Chippewas',
            'yahoo_name' => 'Central Michigan Chippewas',
            'short_name' => 'Central Michigan',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Charlotte 49ers',
            'yahoo_name' => 'Charlotte 49ers',
            'short_name' => 'Charlotte',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Cincinnati Bearcats',
            'yahoo_name' => 'Cincinnati Bearcats',
            'short_name' => 'Cincinnati',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Clemson Tigers',
            'yahoo_name' => 'Clemson Tigers',
            'short_name' => 'Clemson',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Coastal Carolina Chanticleers',
            'yahoo_name' => 'Coastal Carolina Chanticleers',
            'short_name' => 'Coastal Carolina',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Colorado Buffaloes',
            'yahoo_name' => 'Colorado Buffaloes',
            'short_name' => 'Colorado',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Colorado State Rams',
            'yahoo_name' => 'Colorado State Rams',
            'short_name' => 'Colorado State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Duke Blue Devils',
            'yahoo_name' => 'Duke Blue Devils',
            'short_name' => 'Duke',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'East Carolina Pirates',
            'yahoo_name' => 'East Carolina Pirates',
            'short_name' => 'East Carolina',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Eastern Michigan Eagles',
            'yahoo_name' => 'Eastern Michigan Eagles',
            'short_name' => 'Eastern Michigan',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Florida Atlantic Owls',
            'yahoo_name' => 'Florida Atlantic Owls',
            'short_name' => 'Florida Atlantic',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Florida Gators',
            'yahoo_name' => 'Florida Gators',
            'short_name' => 'Florida',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Florida International Panthers',
            'yahoo_name' => 'Florida International Panthers',
            'short_name' => 'FIU',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Florida State Seminoles',
            'yahoo_name' => 'Florida State Seminoles',
            'short_name' => 'Florida State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Fresno State Bulldogs',
            'yahoo_name' => 'Fresno State Bulldogs',
            'short_name' => 'Fresno State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Georgia Bulldogs',
            'yahoo_name' => 'Georgia Bulldogs',
            'short_name' => 'Georgia',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Georgia Southern Eagles',
            'yahoo_name' => 'Georgia Southern Eagles',
            'short_name' => 'Georgia Southern',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Georgia State Panthers',
            'yahoo_name' => 'Georgia State Panthers',
            'short_name' => 'Georgia State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Georgia Tech Yellow Jackets',
            'yahoo_name' => 'Georgia Tech Yellow Jackets',
            'short_name' => 'Georgia Tech',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Hawaii Rainbow Warriors',
            'yahoo_name' => 'Hawai\'i Rainbow Warriors',
            'short_name' => 'Hawai\'i',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Houston Cougars',
            'yahoo_name' => 'Houston Cougars',
            'short_name' => 'Houston',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Illinois Fighting Illini',
            'yahoo_name' => 'Illinois Fighting Illini',
            'short_name' => 'Illinois',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Indiana Hoosiers',
            'yahoo_name' => 'Indiana Hoosiers',
            'short_name' => 'Indiana',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Iowa Hawkeyes',
            'yahoo_name' => 'Iowa Hawkeyes',
            'short_name' => 'Iowa',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Iowa State Cyclones',
            'yahoo_name' => 'Iowa State Cyclones',
            'short_name' => 'Iowa State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Jacksonville State Gamecocks',
            'yahoo_name' => 'Jacksonville State Gamecocks',
            'short_name' => 'Jacksonville St',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'James Madison Dukes',
            'yahoo_name' => 'James Madison Dukes',
            'short_name' => 'James Madison',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kansas Jayhawks',
            'yahoo_name' => 'Kansas Jayhawks',
            'short_name' => 'Kansas',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kansas State Wildcats',
            'yahoo_name' => 'Kansas State Wildcats',
            'short_name' => 'Kansas State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kennesaw State Owls',
            'yahoo_name' => 'Kennesaw State Owls',
            'short_name' => 'Kennesaw State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kent State Golden Flashes',
            'yahoo_name' => 'Kent State Golden Flashes',
            'short_name' => 'Kent State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kentucky Wildcats',
            'yahoo_name' => 'Kentucky Wildcats',
            'short_name' => 'Kentucky',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Liberty Flames',
            'yahoo_name' => 'Liberty Flames',
            'short_name' => 'Liberty',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Louisiana Ragin\' Cajuns',
            'yahoo_name' => 'Louisiana Ragin\' Cajuns',
            'short_name' => 'Louisiana',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Louisiana Tech Bulldogs',
            'yahoo_name' => 'Louisiana Tech Bulldogs',
            'short_name' => 'Louisiana Tech',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Louisiana-Monroe Warhawks',
            'yahoo_name' => 'Louisiana-Monroe Warhawks',
            'short_name' => 'Louisiana-Monroe',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Louisville Cardinals',
            'yahoo_name' => 'Louisville Cardinals',
            'short_name' => 'Louisville',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'LSU Tigers',
            'yahoo_name' => 'LSU Tigers',
            'short_name' => 'LSU',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Marshall Thundering Herd',
            'yahoo_name' => 'Marshall Thundering Herd',
            'short_name' => 'Marshall',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Maryland Terrapins',
            'yahoo_name' => 'Maryland Terrapins',
            'short_name' => 'Maryland',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Memphis Tigers',
            'yahoo_name' => 'Memphis Tigers',
            'short_name' => 'Memphis',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Miami Hurricanes',
            'yahoo_name' => 'Miami (FL) Hurricanes',
            'short_name' => 'Miami (FL)',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Miami (OH) RedHawks',
            'yahoo_name' => 'Miami (OH) RedHawks',
            'short_name' => 'Miami (OH)',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Michigan State Spartans',
            'yahoo_name' => 'Michigan State Spartans',
            'short_name' => 'Michigan State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Michigan Wolverines',
            'yahoo_name' => 'Michigan Wolverines',
            'short_name' => 'Michigan',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Middle Tennessee Blue Raiders',
            'yahoo_name' => 'Middle Tennessee Blue Raiders',
            'short_name' => 'Middle Tennessee',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Minnesota Golden Gophers',
            'yahoo_name' => 'Minnesota Golden Gophers',
            'short_name' => 'Minnesota',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Mississippi State Bulldogs',
            'yahoo_name' => 'Mississippi State Bulldogs',
            'short_name' => 'Mississippi State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Missouri Tigers',
            'yahoo_name' => 'Missouri Tigers',
            'short_name' => 'Missouri',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Navy Midshipmen',
            'yahoo_name' => 'Navy Midshipmen',
            'short_name' => 'Navy',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Nebraska Cornhuskers',
            'yahoo_name' => 'Nebraska Cornhuskers',
            'short_name' => 'Nebraska',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Nevada Wolf Pack',
            'yahoo_name' => 'Nevada Wolf Pack',
            'short_name' => 'Nevada',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New Mexico Lobos',
            'yahoo_name' => 'New Mexico Lobos',
            'short_name' => 'New Mexico',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New Mexico State Aggies',
            'yahoo_name' => 'New Mexico State Aggies',
            'short_name' => 'New Mexico State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'NC State Wolfpack',
            'yahoo_name' => 'North Carolina State Wolfpack',
            'short_name' => 'NC State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'North Carolina Tar Heels',
            'yahoo_name' => 'North Carolina Tar Heels',
            'short_name' => 'North Carolina',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'North Texas Mean Green',
            'yahoo_name' => 'North Texas Mean Green',
            'short_name' => 'North Texas',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Northern Illinois Huskies',
            'yahoo_name' => 'Northern Illinois Huskies',
            'short_name' => 'Northern Illinois',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Northwestern Wildcats',
            'yahoo_name' => 'Northwestern Wildcats',
            'short_name' => 'Northwestern',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Notre Dame Fighting Irish',
            'yahoo_name' => 'Notre Dame Fighting Irish',
            'short_name' => 'Notre Dame',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Ohio Bobcats',
            'yahoo_name' => 'Ohio Bobcats',
            'short_name' => 'Ohio',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Ohio State Buckeyes',
            'yahoo_name' => 'Ohio State Buckeyes',
            'short_name' => 'Ohio State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Oklahoma Sooners',
            'yahoo_name' => 'Oklahoma Sooners',
            'short_name' => 'Oklahoma',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Oklahoma State Cowboys',
            'yahoo_name' => 'Oklahoma State Cowboys',
            'short_name' => 'Oklahoma State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Old Dominion Monarchs',
            'yahoo_name' => 'Old Dominion Monarchs',
            'short_name' => 'Old Dominion',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Ole Miss Rebels',
            'yahoo_name' => 'Ole Miss Rebels',
            'short_name' => 'Ole Miss',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Oregon Ducks',
            'yahoo_name' => 'Oregon Ducks',
            'short_name' => 'Oregon',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Oregon State Beavers',
            'yahoo_name' => 'Oregon State Beavers',
            'short_name' => 'Oregon State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Penn State Nittany Lions',
            'yahoo_name' => 'Penn State Nittany Lions',
            'short_name' => 'Penn State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Pittsburgh Panthers',
            'yahoo_name' => 'Pittsburgh Panthers',
            'short_name' => 'Pittsburgh',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Purdue Boilermakers',
            'yahoo_name' => 'Purdue Boilermakers',
            'short_name' => 'Purdue',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Rice Owls',
            'yahoo_name' => 'Rice Owls',
            'short_name' => 'Rice',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Rutgers Scarlet Knights',
            'yahoo_name' => 'Rutgers Scarlet Knights',
            'short_name' => 'Rutgers',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Sam Houston State Bearkats',
            'yahoo_name' => 'Sam Houston Bearkats',
            'short_name' => 'Sam Houston',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'San Diego State Aztecs',
            'yahoo_name' => 'San Diego State Aztecs',
            'short_name' => 'San Diego State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'San Jose State Spartans',
            'yahoo_name' => 'San Jose State Spartans',
            'short_name' => 'San Jose State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'SMU Mustangs',
            'yahoo_name' => 'SMU Mustangs',
            'short_name' => 'SMU',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'South Alabama Jaguars',
            'yahoo_name' => 'South Alabama Jaguars',
            'short_name' => 'South Alabama',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'South Carolina Gamecocks',
            'yahoo_name' => 'South Carolina Gamecocks',
            'short_name' => 'South Carolina',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'South Florida Bulls',
            'yahoo_name' => 'South Florida Bulls',
            'short_name' => 'South Florida',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Southern Mississippi Golden Eagles',
            'yahoo_name' => 'Southern Miss Golden Eagles',
            'short_name' => 'Southern Miss',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Stanford Cardinal',
            'yahoo_name' => 'Stanford Cardinal',
            'short_name' => 'Stanford',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Syracuse Orange',
            'yahoo_name' => 'Syracuse Orange',
            'short_name' => 'Syracuse',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'TCU Horned Frogs',
            'yahoo_name' => 'TCU Horned Frogs',
            'short_name' => 'TCU',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Temple Owls',
            'yahoo_name' => 'Temple Owls',
            'short_name' => 'Temple',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Tennessee Volunteers',
            'yahoo_name' => 'Tennessee Volunteers',
            'short_name' => 'Tennessee',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Texas A&M Aggies',
            'yahoo_name' => 'Texas A&M Aggies',
            'short_name' => 'Texas A&M',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Texas Longhorns',
            'yahoo_name' => 'Texas Longhorns',
            'short_name' => 'Texas',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Texas State Bobcats',
            'yahoo_name' => 'Texas State Bobcats',
            'short_name' => 'Texas State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Texas Tech Red Raiders',
            'yahoo_name' => 'Texas Tech Red Raiders',
            'short_name' => 'Texas Tech',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Toledo Rockets',
            'yahoo_name' => 'Toledo Rockets',
            'short_name' => 'Toledo',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Troy Trojans',
            'yahoo_name' => 'Troy Trojans',
            'short_name' => 'Troy',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Tulane Green Wave',
            'yahoo_name' => 'Tulane Green Wave',
            'short_name' => 'Tulane',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Tulsa Golden Hurricane',
            'yahoo_name' => 'Tulsa Golden Hurricane',
            'short_name' => 'Tulsa',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UAB Blazers',
            'yahoo_name' => 'UAB Blazers',
            'short_name' => 'UAB',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UCF Knights',
            'yahoo_name' => 'UCF Knights',
            'short_name' => 'UCF',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UCLA Bruins',
            'yahoo_name' => 'UCLA Bruins',
            'short_name' => 'UCLA',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UConn Huskies',
            'yahoo_name' => 'UConn Huskies',
            'short_name' => 'UConn',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UMass Minutemen',
            'yahoo_name' => 'UMass Minutemen',
            'short_name' => 'UMass',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UNLV Rebels',
            'yahoo_name' => 'UNLV Rebels',
            'short_name' => 'UNLV',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'USC Trojans',
            'yahoo_name' => 'USC Trojans',
            'short_name' => 'USC',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Utah State Aggies',
            'yahoo_name' => 'Utah State Aggies',
            'short_name' => 'Utah State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Utah Utes',
            'yahoo_name' => 'Utah Utes',
            'short_name' => 'Utah',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UTEP Miners',
            'yahoo_name' => 'UTEP Miners',
            'short_name' => 'UTEP',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'UTSA Roadrunners',
            'yahoo_name' => 'UTSA Roadrunners',
            'short_name' => 'UTSA',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Vanderbilt Commodores',
            'yahoo_name' => 'Vanderbilt Commodores',
            'short_name' => 'Vanderbilt',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Virginia Cavaliers',
            'yahoo_name' => 'Virginia Cavaliers',
            'short_name' => 'Virginia',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Virginia Tech Hokies',
            'yahoo_name' => 'Virginia Tech Hokies',
            'short_name' => 'Virginia Tech',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Wake Forest Demon Deacons',
            'yahoo_name' => 'Wake Forest Demon Deacons',
            'short_name' => 'Wake Forest',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Washington Huskies',
            'yahoo_name' => 'Washington Huskies',
            'short_name' => 'Washington',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Washington State Cougars',
            'yahoo_name' => 'Washington State Cougars',
            'short_name' => 'Washington State',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'West Virginia Mountaineers',
            'yahoo_name' => 'West Virginia Mountaineers',
            'short_name' => 'West Virginia',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Western Kentucky Hilltoppers',
            'yahoo_name' => 'Western Kentucky Hilltoppers',
            'short_name' => 'Western Kentucky',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Western Michigan Broncos',
            'yahoo_name' => 'Western Michigan Broncos',
            'short_name' => 'Western Michigan',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Wisconsin Badgers',
            'yahoo_name' => 'Wisconsin Badgers',
            'short_name' => 'Wisconsin',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Wyoming Cowboys',
            'yahoo_name' => 'Wyoming Cowboys',
            'short_name' => 'Wyoming',
            'league' => 'NCAA',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Arizona Cardinals',
            'yahoo_name' => 'Arizona Cardinals',
            'short_name' => 'ARI Cardinals',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Atlanta Falcons',
            'yahoo_name' => 'Atlanta Falcons',
            'short_name' => 'ATL Falcons',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Baltimore Ravens',
            'yahoo_name' => 'Baltimore Ravens',
            'short_name' => 'BAL Ravens',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Buffalo Bills',
            'yahoo_name' => 'Buffalo Bills',
            'short_name' => 'BUF Bills',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Carolina Panthers',
            'yahoo_name' => 'Carolina Panthers',
            'short_name' => 'CAR Panthers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Chicago Bears',
            'yahoo_name' => 'Chicago Bears',
            'short_name' => 'CHI Bears',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Cincinnati Bengals',
            'yahoo_name' => 'Cincinnati Bengals',
            'short_name' => 'CIN Bengals',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Cleveland Browns',
            'yahoo_name' => 'Cleveland Browns',
            'short_name' => 'CLE Browns',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Dallas Cowboys',
            'yahoo_name' => 'Dallas Cowboys',
            'short_name' => 'DAL Cowboys',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Denver Broncos',
            'yahoo_name' => 'Denver Broncos',
            'short_name' => 'DEN Broncos',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Detroit Lions',
            'yahoo_name' => 'Detroit Lions',
            'short_name' => 'DET Lions',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Green Bay Packers',
            'yahoo_name' => 'Green Bay Packers',
            'short_name' => 'GB Packers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Houston Texans',
            'yahoo_name' => 'Houston Texans',
            'short_name' => 'HOU Texans',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Indianapolis Colts',
            'yahoo_name' => 'Indianapolis Colts',
            'short_name' => 'IND Colts',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Jacksonville Jaguars',
            'yahoo_name' => 'Jacksonville Jaguars',
            'short_name' => 'JAC Jaguars',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Kansas City Chiefs',
            'yahoo_name' => 'Kansas City Chiefs',
            'short_name' => 'KAN Chiefs',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Las Vegas Raiders',
            'yahoo_name' => 'Las Vegas Raiders',
            'short_name' => 'LAS Raiders',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Los Angeles Chargers',
            'yahoo_name' => 'Los Angeles Chargers',
            'short_name' => 'LAC Chargers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Los Angeles Rams',
            'yahoo_name' => 'Los Angeles Rams',
            'short_name' => 'LAR Rams',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Miami Dolphins',
            'yahoo_name' => 'Miami Dolphins',
            'short_name' => 'MIA Dolphins',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Minnesota Vikings',
            'yahoo_name' => 'Minnesota Vikings',
            'short_name' => 'MIN Vikings',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New England Patriots',
            'yahoo_name' => 'New England Patriots',
            'short_name' => 'NE Patriots',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New Orleans Saints',
            'yahoo_name' => 'New Orleans Saints',
            'short_name' => 'NO Saints',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New York Giants',
            'yahoo_name' => 'New York Giants',
            'short_name' => 'NYG Giants',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'New York Jets',
            'yahoo_name' => 'New York Jets',
            'short_name' => 'NYJ Jets',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Philadelphia Eagles',
            'yahoo_name' => 'Philadelphia Eagles',
            'short_name' => 'PHI Eagles',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Pittsburgh Steelers',
            'yahoo_name' => 'Pittsburgh Steelers',
            'short_name' => 'PIT Steelers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'San Francisco 49ers',
            'yahoo_name' => 'San Francisco 49ers',
            'short_name' => 'SF 49ers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Seattle Seahawks',
            'yahoo_name' => 'Seattle Seahawks',
            'short_name' => 'SEA Seahawks',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Tampa Bay Buccaneers',
            'yahoo_name' => 'Tampa Bay Buccaneers',
            'short_name' => 'TB Buccaneers',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Tennessee Titans',
            'yahoo_name' => 'Tennessee Titans',
            'short_name' => 'TEN Titans',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('teams')->insert([
            'odds_api_name' => 'Washington Commanders',
            'yahoo_name' => 'Washington Commanders',
            'short_name' => 'WAS Commanders',
            'league' => 'NFL',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
