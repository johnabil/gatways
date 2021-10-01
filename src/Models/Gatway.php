<?php

namespace Gatways\Models;

use Illuminate\Database\Eloquent\Model;

class Gatway extends Model
{
    protected $fillable = ['s_no', 'name', 'IPv4'];

    public function devices()
    {
        return $this->hasMany(GatwayDevice::class);
    }
}
