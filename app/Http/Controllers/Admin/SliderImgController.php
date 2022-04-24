<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sliderimg;

class SliderImgController extends Controller
{
    public function slider(){
        $data = sliderimg::all();
        return view('back.sliderimg',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new sliderimg;
        return view('back.create-sliderimg', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Gambar
        $nm = $request->gambar;
        $namaFile = time().rand(100,900).".".$nm->getClientOriginalName();

        $model = new sliderimg;
        $model->judul = $request->judul;
        $model->isi = $request->isi;
        $model->gambar = $namaFile;
        
        //Gambar
        $nm->move(public_path().'/img/slideimg', $namaFile);
        $model->save();

        return redirect('admin/sliderimg');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = sliderimg::find($id);
        return view('back.edit-sliderimg', compact(
            'model'
        ));
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
        $model = sliderimg::find($id);
        $model->judul = $request->judul;
        $model->isi = $request->isi;
        $model->save();

        return redirect('admin/sliderimg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = sliderimg::find($id);
        $model->delete();
        return redirect('admin/sliderimg');
    }
}
