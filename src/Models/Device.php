<?php

namespace Gatways\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['uid', 'vendor', 'status'];

    public function gatways()
    {
        $this->belongsToMany(Gatway::class, 'gatways_devices', 'device_id', 'gatway_id');
    }
}
