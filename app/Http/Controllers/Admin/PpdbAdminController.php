<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ppdb;

class PpdbAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ppdb::all();
        return view('back.ppdb',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new ppdb;
        return view('back.create-ppdb', compact(
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
    {   //Gambar
        $nm1 = $request->ijazah_tk;
        $nm2 = $request->akta_kelahiran;
        $nm3 = $request->ktp_orang_tua;
        $nm4 = $request->kartu_keluarga;
        $nm5 = $request->sertifikat_penghargaan;
        $namaFile1 = time().rand(100,900).".".$nm1->getClientOriginalName();
        $namaFile2 = time().rand(100,900).".".$nm2->getClientOriginalName();
        $namaFile3 = time().rand(100,900).".".$nm3->getClientOriginalName();
        $namaFile4 = time().rand(100,900).".".$nm4->getClientOriginalName();
        $namaFile5 = time().rand(100,900).".".$nm5->getClientOriginalName();
        

        $model = new ppdb;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->nama_panggilan = $request->nama_panggilan;
        $model->alamat = $request->alamat;
        $model->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $model->nama_panggilan = $request->nama_panggilan;
        $model->pesan = $request->pesan;
        $model->sertifikat_penghargaan = $request->sertifikat_penghargaan;

        //Gambar
        $model->ijazah_tk = $namaFile1;
        $model->akta_kelahiran = $namaFile2;
        $model->ktp_orang_tua = $namaFile3;
        $model->kartu_keluarga = $namaFile4;
        $model->sertifikat_penghargaan = $namaFile5;

        //Gambar
        $nm1->move(public_path().'/img/ppdb', $namaFile1);
        $nm2->move(public_path().'/img/ppdb', $namaFile2);
        $nm3->move(public_path().'/img/ppdb', $namaFile3);
        $nm4->move(public_path().'/img/ppdb', $namaFile4);
        $nm5->move(public_path().'/img/ppdb', $namaFile5);
        $model->save();

        return redirect('admin/ppdb');


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
