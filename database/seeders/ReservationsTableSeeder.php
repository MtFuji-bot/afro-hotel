<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'userID' => 1,
            'number' => 3,
            'checkIn' => '2024-05-18',
            'checkOut' => '2024-05-19'
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'userID' => 2,
            'number' => 2,
            'checkIn' => '2024-06-13',
            'checkOut' => '2024-06-15'
        ];
        DB::table('reservations')->insert($param);
    }
}
