<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $house = House::find($id);
        $ruangan = $house->Ruangan;
        return response()->json(House::find($id)->Ruangan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($ruangan, $jumlah, $id)
    {
        for ($i=0; $i < count($ruangan); $i++) { 
            $nama_ruangan = $ruangan[$i];
            $jumlah_ruangan = $jumlah[$i];
            Ruangan::create([
                'id_house' => $id,
                'nama' => $nama_ruangan,
                'jumlah' => $jumlah_ruangan,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangan = Ruangan::find($id);
        return redirect('ruangan/'.$ruangan->name.'show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruangan::find($id)->delete();
        return redirect()->back();
    }
}
