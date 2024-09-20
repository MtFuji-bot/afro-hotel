<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $param = [
            'guestName' => '小銭拾いおじさん',
            'address' => 'コリン星第八地区六番街3丁目',
            'tel' => '384-6750'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'guestName' => 'クレカ止まりおじさん',
            'address' => '田中君の家のとなり',
            'tel' => '334-0998'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'guestName' => '元日本代表おじさん',
            'address' => '長良川河川敷',
            'tel' => '117-7894'
        ];
        DB::table('guests')->insert($param);
    }
}
