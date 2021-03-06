<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $house = House::find($id);
        $image = $house->images;
        return response()->json(House::find($id)->Images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($images, $id)
    {
        for ($i=0; $i < count($images); $i++) { 
            $image = $images[$i];
            $nama_image = \Carbon\Carbon::now()->setTimezone('GMT+8')->format('ymdHis').$i.'.'.$image->extension();
            $image->move(public_path('images'), $nama_image);
            $image = Image::create([
                'id_house' => $id,
                'nama' => $nama_image,
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
        $image = Image::find($id);
        return redirect('images/'.$image->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::find($id)->delete();
        return redirect()->back();
    }
}
