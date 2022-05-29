<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\direktori;

class DirektoriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = direktori::all();
        return view('back.direktori',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new direktori;
        return view('back.direktori-create', compact(
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
        //Foto
        $nm1 = $request->foto_kepala_sekolah;
        $nm2 = $request->foto_guru;
        $nm3 = $request->foto_pegawai;
        $namaFile1 = time().rand(100,900).".".$nm1->getClientOriginalName();
        $namaFile2 = time().rand(100,900).".".$nm2->getClientOriginalName();
        $namaFile3 = time().rand(100,900).".".$nm3->getClientOriginalName();

        $model = new direktori;
        $model->nama_kepala_sekolah = $request->nama_kepala_sekolah;
        $model->nama_guru = $request->nama_guru;
        $model->nama_pegawai = $request->nama_pegawai;
        //Foto
        $model->foto_kepala_sekolah = $namaFile1;
        $model->foto_guru = $namaFile2;
        $model->foto_pegawai = $namaFile3;

        //Foto
        $nm1->move(public_path().'/img/direktori', $namaFile1);
        $nm2->move(public_path().'/img/direktori', $namaFile2);
        $nm3->move(public_path().'/img/direktori', $namaFile3);
        $model->save();

        return redirect('admin/direktori');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
