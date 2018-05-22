<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutabaah;
use App\Prodi;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        //

        $npm = $request->user()->npm;
        $mahasiswas = Mutabaah::when(
            $request->keyword, 
            function ($query) use ($request) {
                $query->where('id', 'like', "%{$request->keyword}%");
            })
        ->where('npm', $npm)
        ->orderBy('minggu')
        ->paginate(5);

        $mahasiswas->appends($request->only('keyword'));

        return view('mahasiswas.index',compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $npm = $request->user()->npm;
        return view('mahasiswas/create', compact('npm'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mahasiswa = new Mutabaah();
        $mahasiswa->npm = $request->get('npm');        
        $mahasiswa->sholat_wajib = $request->get('sholat_wajib');
        $mahasiswa->jamaah_awal_waktu = $request->get('jamaah_awal_waktu');
        $mahasiswa->subuh_jamaah = $request->get('subuh_jamaah');
        $mahasiswa->qiyamul_lail = $request->get('qiyamul_lail');
        $mahasiswa->witir = $request->get('witir');
        $mahasiswa->istighfar = $request->get('istighfar');
        $mahasiswa->puasa_sunah = $request->get('puasa_sunah');
        $mahasiswa->tilawah = $request->get('tilawah');
        $mahasiswa->matsurat = $request->get('matsurat');
        $mahasiswa->duha = $request->get('duha');
        $mahasiswa->baca_buku_islam = $request->get('baca_buku_islam');
        $mahasiswa->hafalan_quran = $request->get('hafalan_quran');
        $mahasiswa->hafalan_hadis = $request->get('hafalan_hadis');
        $mahasiswa->minggu = $request->get('minggu');
        $mahasiswa->save();

        return redirect('mahasiswa')->with('success','Berhasil Tambah Data');        
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
        $mahasiswa = Mutabaah::find($id);
        return view('mahasiswas.edit',compact('mahasiswa','id'));           
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
        $mahasiswa = Mutabaah::find($id);
        $mahasiswa->sholat_wajib = $request->get('sholat_wajib');
        $mahasiswa->jamaah_awal_waktu = $request->get('jamaah_awal_waktu');
        $mahasiswa->subuh_jamaah = $request->get('subuh_jamaah');
        $mahasiswa->qiyamul_lail = $request->get('qiyamul_lail');
        $mahasiswa->witir = $request->get('witir');
        $mahasiswa->istighfar = $request->get('istighfar');
        $mahasiswa->puasa_sunah = $request->get('puasa_sunah');
        $mahasiswa->tilawah = $request->get('tilawah');
        $mahasiswa->matsurat = $request->get('matsurat');
        $mahasiswa->duha = $request->get('duha');
        $mahasiswa->baca_buku_islam = $request->get('baca_buku_islam');
        $mahasiswa->hafalan_quran = $request->get('hafalan_quran');
        $mahasiswa->hafalan_hadis = $request->get('hafalan_hadis');
        $mahasiswa->minggu = $request->get('minggu');
        $mahasiswa->save();
        return redirect('mahasiswa')->with('success','Berhasil Edit Data');        
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
        $mahasiswa = Mutabaah::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('success','Employee Has Been Deleted');        
    }
}
