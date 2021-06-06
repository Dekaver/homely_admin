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

    public function filter(Request $request)
    {
        $house = House::where('harga', '>', 0);
        
        if ($request->has('min_harga')) {
            $house->where('harga', '>=', $request->min_harga);
        }
        if ($request->has('max_harga')) {
            $house->where('harga', '<=', $request->max_harga);
        }
        if ($request->has('tipe')) {
            $house->where('tipe', '=', $request->tipe);
        }
        if ($request->has('min_luas_tanah')) {
            $house->where('luas_tanah', '=', $request->min_luas_tanah);
        }
        if ($request->has('max_luas_tanah')) {
            $house->where('luas_tanah', '=', $request->max_luas_tanah);
        }
        if ($request->has('alamat')) {
            $house->where('alamat', 'LIKE', '%'. $request->alamat . '$');
        }

        $house = $house->get();

        $house->load('Images');
        $house->load('Ruangan');

        return response()->json($house, 201);
    }
}
