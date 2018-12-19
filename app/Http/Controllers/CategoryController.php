<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

	/**
	 * 
	 */
	class CategoryController extends Controller
	{
		
		public function cat_list($ud,Request $rq)
		{
			$datas = Category::paginate(5); //all() là gọi tất cả, paginate(n) là gọi số dòng hiện ra từ đầu đến cuối(n là số dòng)
			// gọi đên view, đây là file, view nừm trong thư mực resources
			// $cates = Category::Where("id",$id)->get();
			// $gcat = Category::find($ud);
			$prodt = Product::Where("category_id",$ud);
			if ($rq->order_by) {
				$order_by = explode('-', $rq->order_by); //tách ra
				// dd($order_by);
				$prodt = $prodt->orderBy($order_by[0],$order_by[1]);
			}
			$limit = 8;
			if ($rq->limit) {
				$limit = $rq->limit;
			}
			if ($rq->price) {
				$price = explode('-', $rq->price);
				$prodt = $prodt->where('price','>=',$price[0])->where('price','<=',$price[1]);
			}

			$prodt = $prodt->paginate($limit);
			// $prdt = Product::Where("id",$category_id);
			return view('cat_list',[
				'cats' => $datas,

				'prods' => $prodt,





			]);
			// select * from Product Where category_id = 
			
		}
		public function prod_view_slug($view)
		{
			$prodt = Product::find($view);
			$datas = Category::paginate(5);
			$model = Product::where('view',$view)->first();
			return view('prod_view',[
				'model' => $model,
				'cats' => $datas,
				'prods' => $prodt,
				'pdos' => Product::Where("category_id",$model->category_id)->get(),
				// 'carts' => new Cart()
			]);
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

	}



	?>