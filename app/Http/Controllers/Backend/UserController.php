<?php  
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth; // dùng để đăng nhập

/**
 * 
 */
class UserController extends Controller
{
	
	public function login()
	{

		return view('backend.login');
	}
	public function post_login(Request $req)
	{
		// return view('backend.login');
		$this->validate($req, [
			'email' => 'required|email',
			'password' => 'required'

		],[
			'required' => 'This :attribute is not blank !',
			'email' => 'The :attribute email validate !'
		]);

		
		if (Auth::guard('admin')->attempt($req->only('email','password'),$req->has('remember') )) 
		{
		// Kích vào nút checkbox remember thì là true không kích là false
		// dd(Auth::guard('admin')->user()->group_name);
			// if (Auth::guard('admin')->user()->group_name != 'admin') {
				return redirect()->route('backendnm');
			// }else{
				// return redirect()->route('backendnm');
			// }
		}else{
			return redirect()->back()->with('error','Login email or password failed!');
		}
	}
	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect()->route('backend_login')->with('success','Log out successfully !');
	}
}





?>