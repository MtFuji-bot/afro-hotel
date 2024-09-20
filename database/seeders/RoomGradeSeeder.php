<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'roomName' => 'bronze',
            'ableNum' => 2
        ];
        DB::table('room_grades')->insert($param);

        $param = [
            'roomName' => 'silver',
            'ableNum' => 4
        ];
        DB::table('room_grades')->insert($param);

        $param = [
            'roomName' => 'gold',
            'ableNum' => 4
        ];
        DB::table('room_grades')->insert($param);

        $param = [
            'roomName' => 'platinum',
            'ableNum' => 4
        ];
        DB::table('room_grades')->insert($param);
    }
}
