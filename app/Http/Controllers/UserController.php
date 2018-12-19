<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\Cart;
use Auth;


//sử dụng thư viện request

/**
 *
 */
class UserController extends Controller {

	// public function index() {
	// 	return view('user.index', [
	// 		'users' => User::paginate(3),
	// 		//Phương thức all() là lấy toàn bộ các dòng dữ liệu
	// 		//Phương thức paginate(3) là lấy 3 dòng dữ liệu trên một trang
	// 	]);
	// }
	// =================================================================================================
							// ===================Đăng nhập=========================

	public function index()
	{

		if (Auth::check()) {
			return redirect()->route('homenm');
		}else{
			return view('user.login',[
				'carts' => new Cart(),


			]);
		}
	}
	public function post_index(Request $req)
	{
		
		// return view('backend.login');
		$this->validate($req, [
			'email' => 'required|email',
			'password' => 'required'

		],[
			'required' => 'This :attribute is not blank !',
			'email' => 'The :attribute email validate !'
		]);
		if (Auth::attempt($req->only('email','password'),$req->has('remember') )) {// Kích vào nút checkbox remember thì là true không kích là false
			return redirect()->route('homenm')->with('success', 'Đăng nhập thành công');;
		}else{
			return redirect()->back()->with('error','Login email or password failed!');
		}
	}
	// =================================================================================================
							// ===================Đăng xuất=========================


	public function post_logout()
	{
		Auth::logout();
		return redirect()->route('homenm')->with('success','Log out successfully !');
	}
	// =================================================================================================
							// ===================Đăng ký=========================

	public function register() {
		if (Auth::check()) {
			return redirect()->route('homenm');
		}else{

			return view('user.register',[
				'carts' => new Cart(),

		]); //Hiển thị form nhập dữ liệu
		}
	}
	public function post_register(Request $rq) {
		// dd($rq->email);sử dụng hàm dd() để bug dữ liệu --die;
		
		$this->validate($rq, [//mảng các validate cần khai báo
			'name' => 'required|min:5',
			'email' => 'required|email|unique:users,email',
			'phone' => 'required|unique:users,phone',
			'password' => 'required|min:8',
			'confirm_password' => 'required|same:password',
			'birthday' => 'required',
		], [//mảng hiển thị tin nhắn
		// viết ngắn gọn hơn :::
		//|==============================================================|
		//|	'required' => ':attribute không được để trống',			     |
		//|	'email' => ':attribute bạn nhập vào chưa đúng định dạng!',   |
		//|	'unique' => ':attribute bạn nhập không khả dụng!',		     |
		//|	'min' => ':attribute phải có ít nhất 8 kí tự!',			     |
		//|	'same' => ':attribute bạn nhập không trùng khớp với :other!',|
		//|==============================================================|



		'name.min' => 'Trường name phải có ít nhất :min kí tự !',
		'name.required' => 'Trường name không được để rỗng !',
		'email.required' => 'Trường email không được để rỗng !',
		'email.email' => 'Email bạn nhập vào chưa đúng định dạng!',
		'email.unique' => 'Email bạn nhập không khả dụng!',
		'phone.required' => 'Trường phone không được để rỗng !',
		'password.required' => 'Trường password không được để rỗng !',
		'password.min' => 'Mật khẩu bạn nhập phải có ít nhất :min kí tự !',
		'confirm_password.same' => 'Mật khẩu bạn nhập không trùng khớp với :other! !',
			//tin nhắn lỗi hiển thị trên form
	]);
		// sử dụng validate dữ liệu cho form này
		$img= '';
		if ($rq->hasFile('file_upload')){
			$file = $rq->file_upload;
			$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
			$img = $file->getClientOriginalName();
		}
		$rq->merge(['image'=> $img]);
		
		if ($user = User::create([
			'image' => $img, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'name' => $rq->name, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'email' => $rq->email, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'phone' => $rq->phone, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'password' => bcrypt($rq->password), //cách mã hóa mật khẩu trong laravel
			'birthday' => $rq->birthday, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'gender' => $rq->gender, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
			'remember_token' => $rq->_token, // thay thế cấc giá trị trên form cho dữ liệu fix cứng
		])) {
			return redirect()->route('homenm')->with('success', 'Thêm mới' . $user->email . ' thành công');
			// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
		} else {
			return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
		}
	}
	// =================================================================================================
	public function edit_account()
	{
		if(Auth::check()){
			return view('edit_account');
		}
		else{
			return redirect()->route('user_login');
		}
	}
	public function post_edit_account($id, Request $rq)
	{
		$this->validate($rq, [//mảng các validate cần khai báo
			'name' => 'required|min:5',
			'email' => 'required|email|unique:users,email',
			'phone' => 'required|unique:users,phone',
		], [

			'name.min' => 'Trường name phải có ít nhất :min kí tự !',
			'name.required' => 'Trường name không được để rỗng !',
			'email.required' => 'Trường email không được để rỗng !',
			'email.email' => 'Email bạn nhập vào chưa đúng định dạng!',
			'email.unique' => 'Email bạn nhập không khả dụng!',
			'phone.required' => 'Trường phone không được để rỗng !',
		
	]);
		$model = User::find($id);

		$img = $model->image;
		if ($rq->hasFile('img_edit')){
			$file = $rq->img_edit;
			$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
			$img = $file->getClientOriginalName();
		}
		$rq->merge(['image'=> $img]);
		if ($model->update($rq->all())) {
			return redirect()->route('homenm')->with('success', 'Thay đổi thông tin cá nhân thành công');
		} else {
			return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
		}


	}
	public function chane_pass()
	{
		if(Auth::check()){
			return view('chane_pass');
		}
		else{
			return redirect()->route('user_login');
		}
	}
	public function post_chane_pass($id, Request $req)
	{
		$this->validate($req, [//mảng các validate cần khai báo
			'old_password' => 'required|OldPasswold',
			'password' => 'required|min:8',
			'confirm_password' => 'required|same:password',
		], [
			'password.required' => 'Mật khẩu của bạn không được để rỗng !',
			'password.min' => 'Mật khẩu bạn nhập phải có ít nhất :min kí tự !',
			'confirm_password.same' => 'Mật khẩu bạn nhập không trùng khớp!',
			'old_passwold' => 'Mật khẩu bạn nhập không không đúng !',
		]);
		Auth::user()->update([

			'password' => bcrypt($req->password)

		]);
		return redirect()->route('chane_pass')->with('success', 'Thay đổi mật khẩu thành công!');
	}


}

?>