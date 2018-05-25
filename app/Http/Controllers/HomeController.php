<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutabaah;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.baru');
    }

    public function pdfku()
    {
        # code...
      $mutabaahs = Mutabaah::all();

      $pdf = PDF::loadView('pdf', compact('mutabaahs'));
      return $pdf->download('user.pdf');        

        // $data = ['title' => 'Welcome to HDTuto.com'];

        // $pdf = PDF::loadView('myPDF', $data);



        // return $pdf->download('hdtuto.pdf');        
    }
}
