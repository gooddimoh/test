<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run(){
        DB::table('Setting')->insert([
            'type_id' => 1,
            'name' => "name",
            'value' => "json",
        ]);
        DB::table('SettingType')->insert([
            'name' => "name",
            'value' => "json",
        ]);
    }
}
