<?php  
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Auth;

/**
 * 
 */
class CategoryController extends Controller
{
	public function index()
	{
		$datas = Category::paginate(3); //all() là gọi tất cả, paginate(n) là gọi số dòng hiện ra từ đầu đến cuối(n là số dòng)
		if(Auth::guard('admin')->check())
		{
			return view('backend.category.index',[
				'cats' => $datas,

			]);
		}else{
			return redirect()->route('backend_login');
		}
	}
	public function delete($id)
	{
		Category::destroy($id);
		return redirect()->back()->with('success','Xóa Thành Công');
	}

	public function delete_all(Request $req)
	{
			Category::destroy($req->id); //DELETE from category Where id IN($id)
			return redirect()->back()->with('success','Xóa Thành Công');
			
		}
		public function cate_add()
		{
			return view('backend.category.cate_add');
		}
		public function post_cate_add(Request $rq)
		{
			if ($cats = Category::create($rq->all())) {
				return redirect()->route('categoryend')->with('success', 'Thêm mới' . $cats->name . ' thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
			} else {
				return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
			}

		}
		public function cate_edit($id)
		{
			$model = Category::find($id)->paginate(3);
			return view('backend.category.cate_edit',[
				'model' => $model

			]);
		}

		public function post_cate_edit($id, Request $rq)
		{
			if ($cats = Category::find($id)->update($rq->all())) {
				return redirect()->route('categoryend')->with('success', 'Thêm mới thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
			} else {
				return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
			}

		}
	}





	?>