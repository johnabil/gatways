<?php

class GatwaySeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(\Gatways\Models\Gatway::class, 3)->create();
    }
}
