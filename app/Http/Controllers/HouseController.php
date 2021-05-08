<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Http\Controllers\ImageController;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        return view('house-view', compact("houses"));
    }

    public function create()
    {
        return view('house-create-form');
    }

    public function edit($id)
    {
        $house = House::find($id);
        return view('house-edit-form', compact('house'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $house = House::create([
            'tipe' => $request->tipe,
            'lantai' => $request->lantai,
            'sertifikasi' => $request->sertifikasi,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'lokasi_gps' => $request->lokasi_gps,
            'deskripsi' => $request->deskripsi,
            'kontak' => $request->kontak,
        ]);
        
        $image = new ImageController;
        $image->store($request->images, $house->id);

        $ruangan = new RuanganController;
        $ruangan->store($request->nama_ruangan, $request->jumlah_ruangan, $house->id);
        return redirect()->route('houses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house = House::find($id);
        return view('house-detail', compact("house"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $house = House::find($id);
        $house->tipe = $request->tipe;
        $house->lantai = $request->lantai;
        $house->sertifikasi = $request->sertifikasi;
        $house->luas_tanah = $request->luas_tanah;
        $house->luas_bangunan = $request->luas_bangunan;
        $house->harga = $request->harga;
        $house->alamat = $request->alamat;
        $house->lokasi_gps = $request->lokasi_gps;
        $house->deskripsi = $request->deskripsi;
        $house->kontak = $request->kontak;
        $house->save();

        $image = new ImageController;
        $image->store($request->images, $id);
        
        return redirect()->route('houses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::find($id);
        $house->delete();
        return redirect()->route('houses.index')->with('message', 'success delete house');
    }
}
