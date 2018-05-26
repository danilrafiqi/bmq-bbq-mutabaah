<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $prodis = Prodi::when($request->keyword, function ($query) use ($request) {
            $query->where('id', 'like', "%{$request->keyword}%");
        })->latest()->paginate(5);

        $prodis->appends($request->only('keyword'));

        return view('admin.prodis.index',compact('prodis'))->with('i', (request()->input('page', 1) - 1) * 5);          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.prodis.create');
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
        $prodi = new Prodi();
        $prodi->id = $request->get('id');
        $prodi->nama_prodi = $request->get('nama_prodi');
        $prodi->tahun_berdiri = $request->get('tahun_berdiri');
        $prodi->akreditasi = $request->get('akreditasi');                
        $prodi->save();
        return redirect('prodi')->with('success','Berhasil Tambah Data');        
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
        $prodi = Prodi::find($id);
        return view('admin.prodis.edit',compact('prodi','id'));
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
        $prodi = Prodi::find($id);
        $prodi->id = $request->get('id');
        $prodi->nama_prodi = $request->get('nama_prodi');
        $prodi->tahun_berdiri = $request->get('tahun_berdiri');
        $prodi->akreditasi = $request->get('akreditasi');                
        $prodi->save();
        return redirect('prodi')->with('success','Berhasil Tambah Data');  
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
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect('prodi')->with('success','Employee Has Been Deleted');          
    }
}
