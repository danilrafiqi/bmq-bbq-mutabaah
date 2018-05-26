<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use App\User;
use Illuminate\Support\Facades\DB;


class DashboardAdminController extends Controller
{
    //
    public function dashboard()
    {
   	    $prodi = Prodi::all()->count();
   	    $userprodi = DB::table('users')
   	    			->join('prodis', 'users.id_prodi', '=', 'prodis.id')
   	    			->select( 'prodis.nama_prodi',DB::raw("count(prodis.id) as jumlah"))
   	    			->groupBy('users.id_prodi')
   	    			->get();


   	    // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();


	    return view('admin.dashboard.index',compact('prodi', 'userprodi'));


    }
}
