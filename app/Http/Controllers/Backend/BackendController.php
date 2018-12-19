<?php  
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Auth; // dùng để đăng nhập
 // dùng để đăng nhập

/**
 * 
 */
class BackendController extends Controller
{
	
	public function index()
	{
		if(Auth::guard('admin')->check())
		{
			return view('backend.index');
		}
		else{
			return redirect()->route('backend_login');
		}
		// if (Auth::guard('admin')->check()) 
		// {
			
		// }else{	
		// 	if (Auth::guard('admin')->check()) 
		// 	{
		// 		return redirect()->route('backendnm');
		// 	}else{
		// 		return redirect()->route('backend_login');
		// 	}
		// }
	}
}





?>