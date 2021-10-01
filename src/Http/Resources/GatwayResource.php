<?php

namespace Gatways\Http\Resources;

class GatwayResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request)
    {
        return [
            'serial_number' => $this->s_no,
            'name' => $this->name,
            'IPv4' => $this->IPv4,
            'devices' => \DeviceResource::collection($this->devices)
        ];
    }
}
