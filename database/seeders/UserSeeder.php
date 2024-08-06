<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mark Miller',
            'email' => 'constenum@gmail.com',
            'password' => '$2y$10$hL6Qmuk63.ibd957J8NV5OeQyQksbKxzxB4udiPvZQZ46oIlWfcqm',
            'is_active' => true,
            'is_admin' => true,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2022-08-28 15:52:19',
            'updated_at' => '2022-08-28 15:53:18',
        ]);

        DB::table('users')->insert([
            'name' => 'Chris Shultz',
            'email' => 'Cshultz02@gmail.com',
            'password' => '$2y$10$SbTbQlB7vZcidlS86IA6VOUdNJQmQLrNeRNPhlO4/Cj73sk/G79ZS',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'a9rb01kyiO48A2D9z1MAv36tcj4PKimyeUWQHxytiXmODztMsI2qIwQ9fYA8',
            'created_at' => '2022-08-30 13:00:43',
            'updated_at' => '2022-09-20 12:00:03',
        ]);

        DB::table('users')->insert([
            'name' => 'Don Shultz',
            'email' => 'don.shultz@plaskolite.com',
            'password' => '$2y$10$tMo.3PXoup16HDU.PeTn/.Ijq0lahFZHeqgOV0wmYVoB8l/ML6DUe',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'A6DYY7TgdDrZHsDiTuwimAOqQe1wNCY59CIdeCSfgi90kGzm4pH34WDz6E5l',
            'created_at' => '2022-08-30 20:13:20',
            'updated_at' => '2022-08-30 20:13:20',
        ]);

        DB::table('users')->insert([
            'name' => 'Sgt. Hulka',
            'email' => 'oti118@yahoo.com',
            'password' => '$2y$10$n62aDxxXrq3X1FdvWzbGC.6TG4rpDvGBu7vJVCEgl2irt9WZGIQci',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => '4L2T7ckdwrVFeK6IHaGls5L4JPAZxzMqOuMwo6GEz5E4fNbDXYmFMnszvQsH',
            'created_at' => '2022-08-30 21:52:12',
            'updated_at' => '2023-12-12 12:00:03',
        ]);

        DB::table('users')->insert([
            'name' => 'Roger Hamilton',
            'email' => 'roger.hamilton@plaskolite.com',
            'password' => '$2y$10$oNoUHCCvuO1SF5BTwmPUeuoVuG9DW77k573/YrMgLz2N3UNzc1ABm',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'RGdIfl0upm8Z6oGAJQxo9SE56a3VrJhiQSdHmW6rex6FIb6YWGEiynxj911c',
            'created_at' => '2022-08-31 07:42:24',
            'updated_at' => '2022-08-31 07:42:24',
        ]);

        DB::table('users')->insert([
            'name' => 'Josh Keck',
            'email' => 'josh.keck@plaskolite.com',
            'password' => '$2y$10$t3z9wnFN2RLNXWR1BErl..iW6ma2eq33vopi8gmaDaYv9Tn7zz8aG',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'R8VpLCqaHgSWotQ1FrnEoDWOm0XbKoCdVyekIORvdxT1gAOI3SUrlpkATuFy',
            'created_at' => '2022-08-31 07:47:16',
            'updated_at' => '2022-08-31 07:47:16',
        ]);

        DB::table('users')->insert([
            'name' => 'Steve Lemasters',
            'email' => 'stevelemasters@gmail.com',
            'password' => '$2y$10$9rv0cx6Ozx/TCnoiN.j5n.B6ztEYld9PFOHW.cMmhw82.bxajwZJ2',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'bJ4SmLodV8SiurVPfwWRlSOK1k7BZac8inlQkr1CbkISd0IrIW0HTh7H1JMt',
            'created_at' => '2022-08-31 08:25:19',
            'updated_at' => '2022-08-31 08:25:19',
        ]);

        DB::table('users')->insert([
            'name' => 'Brad Hostasa',
            'email' => 'Brad.Hostasa@hy-tek.com',
            'password' => '$2y$10$aIS8OJ.xy4NsFYA4rAK3cOL7BYVibpBMar9eg2ikKQpA2DkSILUJ2',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2022-08-31 08:37:09',
            'updated_at' => '2022-08-31 08:37:09',
        ]);

        DB::table('users')->insert([
            'name' => 'Danny Butler',
            'email' => 'dbutler83@gmail.com',
            'password' => '$2y$10$bguUWT1DAASg9W.PewmXkuLamxt5rioLDSt8UJHpbmDbOlhBLZSLa',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'OBFA6AkhkNoEqWuoF7bS2f4DvPZ19RdekUJWgP8k9TydBR6Dlxl9tfklnYGD',
            'created_at' => '2022-08-31 09:03:00',
            'updated_at' => '2023-09-01 08:53:59',
        ]);

        DB::table('users')->insert([
            'name' => 'Jody Sims',
            'email' => 'jodylsims@yahoo.com',
            'password' => '$2y$10$5PYq9EAR9kgPtjuvWvTtJumsTxI6nwdixf3XW4.FC.UzOr0zxRAJu',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'N7iu4pvJya4b4BpJu2zQDsDT8PdAhlsLUqCvrFsHInHw0hoxJnQ6RMbCvyGP',
            'created_at' => '2022-08-31 09:14:40',
            'updated_at' => '2022-08-31 09:14:40',
        ]);

        DB::table('users')->insert([
            'name' => 'Chris Gutman',
            'email' => 'gutmanchris@gmail.com',
            'password' => '$2y$10$BLYfCiQaJXmLue1tg3MrJ.A7PS5dKfxuKNTzMqDVKeFrj87lUIGWi',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'IF165MPqfkVKcd0BihGhgb4isyfapDCK4eqL1BT169krWaMnYkUYWGToIi0l',
            'created_at' => '2022-08-31 09:28:10',
            'updated_at' => '2023-09-19 12:00:05',
        ]);

        DB::table('users')->insert([
            'name' => 'Michael Hilty',
            'email' => 'hiltymj@yahoo.com',
            'password' => '$2y$10$H.Zpl45D1XPxYFmaY7LfUu5Dk/ETc922GOjsfacjXmXRBxMZG7W3G',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'uwVRtfOvUg6W2Fj1fUC0RYsE7Ic2GweqIYpLtFjepoWj5X0ih1JmXgwAvlIl',
            'created_at' => '2022-08-31 09:42:28',
            'updated_at' => '2023-09-02 07:50:21',
        ]);

        DB::table('users')->insert([
            'name' => 'Matt Gutman',
            'email' => 'mjg7233@gmail.com',
            'password' => '$2y$10$mhnHvJiOvrVCnCjXiKykgOsjXd68oAgxASl47PsPAm596ajefvlYq',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'FRJ1xWfjQTONZbRUAEeI6V05h8T3Cxp6GMukXJfL5BmUPP21iwudHF8d0lKO',
            'created_at' => '2022-08-31 12:15:31',
            'updated_at' => '2022-08-31 12:15:31',
        ]);

        DB::table('users')->insert([
            'name' => 'Kyle Fleck',
            'email' => 'kylefleck@gmail.com',
            'password' => '$2y$10$.A5AAVO0LA6TeHvJTXMtEu83TXhZy9qe1UkNuDWyamPMUCA3D1hhm',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'vGz50KXfPCaLgJIfrwVzmqdtptkU6ElxAvPXBD4V7GQNtFDMDaSyKbiL44iq',
            'created_at' => '2022-08-31 14:03:52',
            'updated_at' => '2023-09-19 12:00:05',
        ]);

        DB::table('users')->insert([
            'name' => 'Tim Ryan',
            'email' => 'timmyp33@yahoo.com',
            'password' => '$2y$10$FOnoUdgflp8d.yLW4uE9GOBwFd.B2iDBmL99PuliLF2OXyHSpUuae',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'euVSb5r2NNEVUECXRYNajFx2qZPH6VhUxfSd9zl1avQPPNfnyqSSfz5i3mbZ',
            'created_at' => '2022-08-31 14:11:11',
            'updated_at' => '2022-08-31 14:11:11',
        ]);

        DB::table('users')->insert([
            'name' => 'Ron Tanner',
            'email' => 'rtanner70@yahoo.com',
            'password' => '$2y$10$lSnoLR.Sn0H0U.c4/nJGuuxmbOOn4rdaJ2xlaYjdWSvUfEWGMacUm',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'zCsn1wxgmX1gXjbYHB7E3rqr8cy4tkUFVVuulAz9KmX2dv81pfBSNvC4XKoE',
            'created_at' => '2022-08-31 14:37:11',
            'updated_at' => '2023-09-26 12:00:04',
        ]);

        DB::table('users')->insert([
            'name' => 'Mike Hardin',
            'email' => 'mlhardin34@gmail.com',
            'password' => '$2y$10$sih/LHPvVdeTj46A1Y7seOc./Xiilzu79d6AqLeaEcEChZZdwP4nm',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'z3u56JnEUwxvAzlb4YaPYLcBCuUlTqLR0s2LnWO5PnuAOknd4zqtnmwAakUy',
            'created_at' => '2022-08-31 16:38:13',
            'updated_at' => '2022-08-31 16:38:13',
        ]);

        DB::table('users')->insert([
            'name' => 'Nick Gutman',
            'email' => 'ngutman24@gmail.com',
            'password' => '$2y$10$M6NH6UvP52z6.fgU7/b1AuzYrIYJHdYCL0VU/NvmYlDrqwYfZCvsq',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'DDyrweuIgMlrlCmDMg1tTHXnalYeqnsvF3ssuDNpxMcXFlOE2Pq9YDIkj4aN',
            'created_at' => '2022-08-31 17:12:43',
            'updated_at' => '2023-10-24 12:00:04',
        ]);

        DB::table('users')->insert([
            'name' => 'Casey Nofziger',
            'email' => 'casey.nofziger@odwlogistics.com',
            'password' => '$2y$10$ejh8Z1RKnaW4L3Mlb8u1dOoLVXczUSIAvIz8riDIXXQyjmg92u1N6',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'N7MiAu2koaZpC1g2sjlWccrCnNuKW4dSgwoUGA1yp1eNkja4dlk5NhQnpxgK',
            'created_at' => '2022-08-31 19:08:10',
            'updated_at' => '2022-08-31 19:08:10',
        ]);

        DB::table('users')->insert([
            'name' => 'Scot Lewis',
            'email' => 'sdlconsultant@yahoo.com',
            'password' => '$2y$10$cE34/8gYYil0fdw0S792A.dEIXgTt.jPDBEzYp24cTFL4oLcpnGsy',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2022-09-01 00:24:02',
            'updated_at' => '2022-09-01 00:24:02',
        ]);

        DB::table('users')->insert([
            'name' => 'Jon Swift',
            'email' => 'jonswiftucf@gmail.com',
            'password' => '$2y$10$IkHjj2w/XqPTTmcVd0ubY.MvGyqzOdKa3iI2pdo70qdIr9UgPB26S',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'TMOpjNrp87w3ETTWe0mGiJlwnLhx3TiSyPgxYFnbn3SfJDqhhqsENbFlECeU',
            'created_at' => '2022-09-01 13:03:25',
            'updated_at' => '2023-08-18 12:10:36',
        ]);

        DB::table('users')->insert([
            'name' => 'Pete Gray',
            'email' => 'pete.gray@vantrustre.com',
            'password' => '$2y$10$GXSIv/zSkzW16cvMAa03m.2Q4JDXUON/d6sN1OFng1WdJQU1w9P/a',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2022-09-01 15:47:35',
            'updated_at' => '2023-12-19 12:00:06',
        ]);

        DB::table('users')->insert([
            'name' => 'David Pratt',
            'email' => 'david@hcmcinc.com',
            'password' => '$2y$10$UcsTRE6Rb/Pw6mjDiHV2Xe7mjnMYlaVDKVR28jQKAWSYSiU.L/NMC',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'MJQIsbXaNnqLfqZ57QFpQQ81cYTrU7jATA8rfrn5UmanlkPFMcI0GnfE3Osz',
            'created_at' => '2022-09-01 16:53:32',
            'updated_at' => '2022-09-01 16:53:32',
        ]);

        DB::table('users')->insert([
            'name' => 'Sean James',
            'email' => 'sean.desmond.james@gmail.com',
            'password' => '$2y$10$r2VUj17Kp.p.DgTnlzTc5OPnT30.iioBy8eLsA7dHd.DTT4yIorwy',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'Cf4KoR8Qz32BsMLM2PoLMAFHQg7laWo7OmmjZD41rWDUgJI8ZqfG7jzbpyqT',
            'created_at' => '2022-09-01 19:31:16',
            'updated_at' => '2023-08-25 21:15:10',
        ]);

        DB::table('users')->insert([
            'name' => 'Ken Shultz',
            'email' => 'kenny.shultz@rlgbuilds.com',
            'password' => '$2y$10$bPNELqPQWEDm1pHe/52.vOD3iXr49I3nezU29FRw/djBgm3buHFbq',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'ZcSXyyqoaNpPby4BPEWxn2A8URk0Q290yyqd5xTGtKyM97VfqRF5Tq9kPIMG',
            'created_at' => '2022-09-01 21:50:36',
            'updated_at' => '2022-09-01 21:50:36',
        ]);

        DB::table('users')->insert([
            'name' => 'Al Gutman',
            'email' => 'algutman28@hotmail.com',
            'password' => '$2y$10$z.pQCsGvgc/fLJODn.FAQOHzNKnmH8Oy6rgYCpNZ6hR5gVJPnQYWi',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => '7AlyAWO8gurXjy5TNT3IYEUviL579u9H9zVR5XHgPDZR1u1JeGufqQXJY3ch',
            'created_at' => '2022-09-01 22:04:26',
            'updated_at' => '2023-08-30 07:29:30',
        ]);

        DB::table('users')->insert([
            'name' => 'Luke Gutman',
            'email' => 'lukegutman72@gmail.com',
            'password' => '$2y$10$UtfImN5XKhpST/nORgmBB.sScx/4hcomzMjqy.N2KjsrOkdUhszZq',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'JmIPvR9rfj4M8MYrYzMIRwePV1bYzBI4RLfu6PhhbrRNHAcBp82f8B3F2GEV',
            'created_at' => '2022-09-01 22:51:17',
            'updated_at' => '2022-09-01 22:51:17',
        ]);

        DB::table('users')->insert([
            'name' => 'Ryan James',
            'email' => 'ryanjames1524@gmail.com',
            'password' => '$2y$10$5jgL64sv166vl76IKZa3oOZUfGbbm1l6KnkfQJx5umxdfhtfSHb.2',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'JPsFIIqQOFzCCMrgaQvWBGi2TSqhObSW8aE2SPZ6B7ThxnDZorpCUE9nepF1',
            'created_at' => '2022-09-02 17:59:42',
            'updated_at' => '2023-08-31 21:27:37',
        ]);

        DB::table('users')->insert([
            'name' => 'Brian Consolati',
            'email' => 'brian.consolati@plaskolite.com',
            'password' => '$2y$10$.RpYMfEyb9/KGkI6jF0NDOJOaMg78CEpxZqQ1owT9UpFggEK2Oq62',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => '8A88aqlYvv6HzTyaUrf2cfSJle2Ihag4JiWJrt2URP1WVQQcXJPDhx6j1DBz',
            'created_at' => '2022-09-02 18:21:54',
            'updated_at' => '2022-11-15 12:00:02',
        ]);

        DB::table('users')->insert([
            'name' => 'Stephen Nitschke',
            'email' => 'steviednitschke@gmail.com',
            'password' => '$2y$10$h3W/j2kdfLLmUgRWe0VzouZsMZfJkwPTmgl4RwQXkSWE.sT0yEZB2',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => '5sdIIwgtj5r9TbEh8DpDUGgcho8twUzXN5XBBIsW1yWaHnAYJGSyWShGU1P3',
            'created_at' => '2022-09-03 08:30:19',
            'updated_at' => '2022-09-03 08:30:19',
        ]);

        DB::table('users')->insert([
            'name' => 'Rich Van Hove',
            'email' => 'richvanhove1234@gmail.com',
            'password' => '$2y$10$It6iG4PzHyZb8AxuIgBCI.26RWu/HWoX33NNNydQp.MCvOOgBsD7K',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'y2WuQvD5jGzyJ9xDj6H3IgFq5df0sCYKs00MUHCItrtzyHRXB8hgS6Wuk8Iz',
            'created_at' => '2022-09-03 11:14:38',
            'updated_at' => '2022-10-01 10:13:59',
        ]);

        DB::table('users')->insert([
            'name' => 'David Koren',
            'email' => 'david.m.koren@gmail.com',
            'password' => '$2y$10$0seyFWRhq3ss7W58sbAqV.LjFdG4mmIT9nc7J.oee.MB8xhnY7di.',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'N5KfkyaqZP6t5wizliL0MNnsUfZ4XY4KtHHCpBcMnFnutV9On5LVLJAxWxiE',
            'created_at' => '2023-08-11 09:00:10',
            'updated_at' => '2023-08-11 09:00:10',
        ]);

        DB::table('users')->insert([
            'name' => 'Drew Cook',
            'email' => 'andrew.da.cook@gmail.com',
            'password' => '$2y$10$QLafTdWEThTzB6t3kKM69eWqMzB.vXW86CCt/9n1KfjtRI47iNEGi',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'CmQtxgFZR5q1y02eJFmRzmmPw2fr39a2hThiqsCEAPIoUbqMiLRAHUuYm3qx',
            'created_at' => '2023-08-24 11:41:11',
            'updated_at' => '2023-09-02 03:41:07',
        ]);

        DB::table('users')->insert([
            'name' => 'Jeremy Lewis',
            'email' => 'jeremy.lewis48@gmail.com',
            'password' => '$2y$10$M9VHFRxbtULvbprwpPOGp.dRhB7MWnhgX.J5NrYGcdkVhw6NNt38u',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2023-08-30 12:11:52',
            'updated_at' => '2023-08-30 12:11:52',
        ]);

        DB::table('users')->insert([
            'name' => 'Brian Sapp',
            'email' => 'sapp.90@osu.edu',
            'password' => '$2y$10$G6GqyER.VouF26WR7TQKHuNgPvGdWQObZWdsGzYZCr6r/CTmII57m',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'psCdgowp1WZjXRYgiQBJRpptMzvUD1tAV7nenwhINtHvzcZl13DYIOpfDG1U',
            'created_at' => '2023-08-30 13:23:16',
            'updated_at' => '2023-08-30 13:23:16',
        ]);

        DB::table('users')->insert([
            'name' => 'Stewart Lengerich',
            'email' => 'lengerich18@gmail.com',
            'password' => '$2y$10$I798BgKAjqQdHDZaC8PFZ.O8zcUvWLYmGzfRZUHvyg/ZAxbaHMeXe',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2023-08-31 18:22:34',
            'updated_at' => '2023-08-31 18:22:34',
        ]);

        DB::table('users')->insert([
            'name' => 'Jack Ryan',
            'email' => 'jpryan3415@gmail.com',
            'password' => '$2y$10$/Zu5Oj6xx52EOrtzVNaWQO0exd0bv7pelDp0z.2xsanXv2MwuZawW',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'tszJuEWTQiJdvxCROGFpjsvGJPDcPJNQUVAIZPgGaQudfWkeVN7aES5QN5j5',
            'created_at' => '2023-08-31 19:50:55',
            'updated_at' => '2023-08-31 19:50:55',
        ]);

        DB::table('users')->insert([
            'name' => 'J Po',
            'email' => 'jpolesovsky@gmail.com',
            'password' => '$2y$10$3rwWPWa3o8lGMmKPCtpoCuD1C3GhkH7jMJNIFpbkT1c1./DV8neWy',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'IyU6V5udz1Y8ucu3y6yRbCK1KwGi5gaBuhGMJSEWQCOMYOJ0XljsBo1COxEA',
            'created_at' => '2023-09-01 21:21:02',
            'updated_at' => '2023-09-01 21:21:02',
        ]);

        DB::table('users')->insert([
            'name' => 'Alex Micale',
            'email' => 'atmicale13@gmail.com',
            'password' => '$2y$10$lVNtftPFcdIWrjI4sm98eeGsYlNwas7CTw6I3Jf.pTznIDqoReB7u',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => 'fat4GDuuJagjBkgqp5qJbwx9poKH8GDTeANlwZ6JdgtpCXZGgGOBirDB3uhj',
            'created_at' => '2023-09-01 22:46:14',
            'updated_at' => '2023-12-19 12:00:06',
        ]);

        DB::table('users')->insert([
            'name' => 'Tyson Schnitkey',
            'email' => 'tschnitkey@gmail.com',
            'password' => '$2y$10$6lfXRUb5yqMTeTrjpTT0Q.XCJZNo68y8DbE2SWyBYjVHmnpga7TJS',
            'is_active' => true,
            'is_admin' => false,
            'winnings' => 0,
            'remember_token' => NULL,
            'created_at' => '2023-09-07 14:43:20',
            'updated_at' => '2023-09-07 14:43:20',
        ]);
    }
}
