<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'roomGradeID' => 4,
            'roomNumber' => 501
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'roomGradeID' => 1,
            'roomNumber' => 103
        ];
        DB::table('rooms')->insert($param);
    }
}
