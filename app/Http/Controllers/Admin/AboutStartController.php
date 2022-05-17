<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutstart;

class AboutStartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = aboutstart::all();
        return view('back.aboutstart',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new aboutstart;
        return view('back.create-aboutstart', compact(
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
        $nm1 = $request->gambar1;
        $nm2 = $request->gambar2;
        $nm3 = $request->gambar3;
        $nm4 = $request->gambar4;
        $namaFile1 = time().rand(100,900).".".$nm1->getClientOriginalName();
        $namaFile2 = time().rand(100,900).".".$nm2->getClientOriginalName();
        $namaFile3 = time().rand(100,900).".".$nm3->getClientOriginalName();
        $namaFile4 = time().rand(100,900).".".$nm4->getClientOriginalName();

        $model = new aboutstart;
        $model->judul = $request->judul;
        $model->isi = $request->isi;
        $model->gambar1 = $namaFile1;
        $model->gambar2 = $namaFile2;
        $model->gambar3 = $namaFile3;
        $model->gambar4 = $namaFile4;
        
        //Gambar
        $nm1->move(public_path().'/img/aboutstart', $namaFile1);
        $nm2->move(public_path().'/img/aboutstart', $namaFile2);
        $nm3->move(public_path().'/img/aboutstart', $namaFile3);
        $nm4->move(public_path().'/img/aboutstart', $namaFile4);
        $model->save();

        return redirect('admin/aboutstart');
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
        $model = aboutstart::find($id);
        return view('back.edit-aboutstart', compact(
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
        //Gambar
        $nm1 = $request->gambar1;
        $nm2 = $request->gambar2;
        $nm3 = $request->gambar3;
        $nm4 = $request->gambar4;
        $namaFile1 = time().rand(100,900).".".$nm1->getClientOriginalName();
        $namaFile2 = time().rand(100,900).".".$nm2->getClientOriginalName();
        $namaFile3 = time().rand(100,900).".".$nm3->getClientOriginalName();
        $namaFile4 = time().rand(100,900).".".$nm4->getClientOriginalName();

        $model = aboutstart::find($id);
        $model->judul = $request->judul;
        $model->isi = $request->isi;
        $model->gambar1 = $namaFile1;
        $model->gambar2 = $namaFile2;
        $model->gambar3 = $namaFile3;
        $model->gambar4 = $namaFile4;
        
        //Gambar
        $nm1->move(public_path().'/img/aboutstart', $namaFile1);
        $nm2->move(public_path().'/img/aboutstart', $namaFile2);
        $nm3->move(public_path().'/img/aboutstart', $namaFile3);
        $nm4->move(public_path().'/img/aboutstart', $namaFile4);
        $model->save();

        return redirect('admin/aboutstart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = aboutstart::find($id);
        $model->delete();
        return redirect('admin/aboutstart');
    }
}
