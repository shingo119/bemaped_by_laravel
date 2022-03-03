<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\SpotResource;
use App\Models\Spot;

class SpotController extends Controller
{
    public function getSpots()
    {
        return SpotResource::collection(Spot::all());
    }
}
