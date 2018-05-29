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
   	    // $prodi = Prodi::all()->count();
   	    // $userprodi = DB::table('users')
   	    // 			->join('prodis', 'users.id_prodi', '=', 'prodis.id')
   	    // 			->select( 'prodis.nama_prodi',DB::raw("count(prodis.id) as jumlah"))
   	    // 			->groupBy('users.id_prodi')
   	    // 			->get();

   	    $prodi = Prodi::all()->count();
   	    $userprodi = DB::table('users')
   	    			->join('prodis', 'users.id_prodi', '=', 'prodis.id')
   	    			->select( 'prodis.nama_prodi as namaprodi',DB::raw("count(prodis.id) as jumlah"))
   	    			->groupBy('users.id_prodi')
   	    			->get()->toArray();

   	    $v_jumlahprodi = array_column($userprodi, 'jumlah');
   	    $v_nama_prodi = array_column($userprodi, 'namaprodi');


	    return view('admin.dashboard.index')
	    	// ->with('prodi');
		    ->with('prodi',$prodi)
	    	->with('jumlah',json_encode($v_jumlahprodi,JSON_NUMERIC_CHECK))
	    	// ->with('namaprodi',json_encode($v_nama_prodi,JSON_NUMERIC_CHECK));
	    	->with('namaprodi',$v_nama_prodi);	    	
    }
}
