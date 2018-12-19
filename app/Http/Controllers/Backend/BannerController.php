<?php  
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;

/**
 * 
 */
class BannerController extends BackendController
{
	public function index()
	{
		$datas = Banner::paginate(5); //all() là gọi tất cả, paginate(n) là gọi số dòng hiện ra từ đầu đến cuối(n là số dòng)
		return view('backend.banner.index',[
			'bans' => $datas,

		]);
	}
	public function delete($id)
	{
		Banner::destroy($id);
		return redirect()->back()->with('success','Xóa Thành Công');
	}

	public function delete_all(Request $req)
	{
			Banner::destroy($req->id); //DELETE from banner Where id IN($id)
			return redirect()->back()->with('success','Xóa Thành Công');
			
		}
		public function bane_add()
		{
			return view('backend.banner.bane_add');
		}
		public function post_bane_add(Request $rq)
		{
			$img= '';
			if ($rq->hasFile('file_upload')){
				$file = $rq->file_upload;
				$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
				$img = $file->getClientOriginalName();
			}
			$rq->merge(['link_images'=> $img]);
			if ($bans = Banner::create($rq->all())) {
				return redirect()->route('bannerend')->with('success', 'Thêm mới' . $bans->name . ' thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
			} else {
				return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
			}

		}
		public function bane_edit($id)
		{

			$model = Banner::find($id);
			return view('backend.banner.bane_edit',[
				'model' => $model

			]);
		}

		public function post_bane_edit($id, Request $rq)
		{
			$img= '';
			if ($rq->hasFile('file_upload')){
				$file = $rq->file_upload;
				$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
				$img = $file->getClientOriginalName();
			}
			$rq->merge(['link_images'=> $img]);

			if ($bans = Banner::find($id)->update($rq->all())) {
				return redirect()->route('bannerend')->with('success', 'Thêm mới thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
			} else {
				return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
			}

		}
	}





	?>