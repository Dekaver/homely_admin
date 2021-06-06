<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        $houses->load('Images');
        $houses->load('Ruangan');
        return response()->json($houses, 201);
    }
}
