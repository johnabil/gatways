<?php

namespace Gatways\Http\Controllers;


use Gatways\Http\Resources\GatwayResource;
use Gatways\Models\Gatway;
use Illuminate\Http\Request;

class GatwaysController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'ip_address' => 'ipv4'
        ]);

        Gatway::create([
            's_no' => $request->serial_no,
            'name' => $request->name,
            'IPv4' => $request->ip_address
        ]);
        return response('gatway added successfully');
    }

    public function index($id)
    {
        $gatway = Gatway::where('id', $id)->firstOrFail();
        return new GatwayResource($gatway);
    }

    public function all()
    {
        return GatwayResource::collection(Gatway::all());
    }

}
