<?php

class DeviceSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(\Gatways\Models\Device::class, 4)->create();
        \Illuminate\Support\Facades\DB::table('gatways_devices')->insert(['gatway_id' => 1, 'device_id' => 1]);
    }
}
