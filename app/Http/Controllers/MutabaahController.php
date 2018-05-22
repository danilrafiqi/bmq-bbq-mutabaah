<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutabaah;
use Excel;

class MutabaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request)
    {
        //


        $mutabaahs = Mutabaah::when($request->keyword, function ($query) use ($request) {
            $query->where('id', 'like', "%{$request->keyword}%");
        })->orderBy('npm')->orderBy('minggu')->latest()->paginate(5);

        $mutabaahs->appends($request->only('keyword'));

        return view('mutabaahs.index',compact('mutabaahs'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('mutabaahs.create', compact('npm'));        
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
        $mutabaah = new Mutabaah();
        $mutabaah->sholat_wajib = $request->get('sholat_wajib');
        $mutabaah->jamaah_awal_waktu = $request->get('jamaah_awal_waktu');
        $mutabaah->subuh_jamaah = $request->get('subuh_jamaah');
        $mutabaah->qiyamul_lail = $request->get('qiyamul_lail');
        $mutabaah->witir = $request->get('witir');
        $mutabaah->istighfar = $request->get('istighfar');
        $mutabaah->puasa_sunah = $request->get('puasa_sunah');
        $mutabaah->tilawah = $request->get('tilawah');
        $mutabaah->matsurat = $request->get('matsurat');
        $mutabaah->duha = $request->get('duha');
        $mutabaah->baca_buku_islam = $request->get('baca_buku_islam');
        $mutabaah->hafalan_quran = $request->get('hafalan_quran');
        $mutabaah->hafalan_hadis = $request->get('hafalan_hadis');
        $mutabaah->minggu = $request->get('minggu');
        $mutabaah->npm = $request->get('npm');
        $mutabaah->save();

        return redirect('mutabaah')->with('success','Berhasil Tambah Data');
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
        $mutabaah = Mutabaah::find($id);
        return view('mutabaahs.edit',compact('mutabaah','id'));
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
        $mutabaah = Mutabaah::find($id);
        $mutabaah->sholat_wajib = $request->get('sholat_wajib');
        $mutabaah->jamaah_awal_waktu = $request->get('jamaah_awal_waktu');
        $mutabaah->subuh_jamaah = $request->get('subuh_jamaah');
        $mutabaah->qiyamul_lail = $request->get('qiyamul_lail');
        $mutabaah->witir = $request->get('witir');
        $mutabaah->istighfar = $request->get('istighfar');
        $mutabaah->puasa_sunah = $request->get('puasa_sunah');
        $mutabaah->tilawah = $request->get('tilawah');
        $mutabaah->matsurat = $request->get('matsurat');
        $mutabaah->duha = $request->get('duha');
        $mutabaah->baca_buku_islam = $request->get('baca_buku_islam');
        $mutabaah->hafalan_quran = $request->get('hafalan_quran');
        $mutabaah->hafalan_hadis = $request->get('hafalan_hadis');
        $mutabaah->minggu = $request->get('minggu');
        $mutabaah->save();
        return redirect('mutabaah')->with('success','Berhasil Edit Data');        
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
        $mutabaah = Mutabaah::find($id);
        $mutabaah->delete();
        return redirect('mutabaah')->with('success','Employee Has Been Deleted');        
    }

    // untuk end user
    // public function mingguan(Request $request)
    // {
    //     //
    //     $npm = $request->user()->npm;
    //     return view('mutabaahs/create', compact('npm'));        
    // }    
    // public function list(\Illuminate\Http\Request $request)
    // {
    //     //
    //     $mutabaahs = Mutabaah::when($request->keyword, function ($query) use ($request) {
    //         $query->where('id', 'like', "%{$request->keyword}%");
    //     })->latest()->paginate(5);

    //     $mutabaahs->appends($request->only('keyword'));

    //     return view('mutabaahs.index',compact('mutabaahs'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }


    //Export Excel
    public function downloadExcel($type)
    {
        $data = Mutabaah::get()->toArray();
        return Excel::create('laporan', function($excel) use ($data) {
            $excel->sheet('mutabaah', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }


}
