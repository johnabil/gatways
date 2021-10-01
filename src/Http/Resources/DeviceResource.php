<?php

class DeviceResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request)
    {
        return [
            'uid' => $this->uid,
            'vendor' => $this->vendor,
            'status' => $this->status
        ];
    }
}
