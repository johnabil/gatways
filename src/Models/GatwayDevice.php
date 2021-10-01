<?php

namespace Gatways\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GatwayDevice extends Pivot
{
    protected $fillable = ['device_id', 'gateway_id'];
}
