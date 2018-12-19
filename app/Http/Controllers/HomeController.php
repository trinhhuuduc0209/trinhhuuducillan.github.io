<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
// use App\Helper\Cart;
use View;
use Auth;

/**
 *
 */
class HomeController extends Controller {
	 
	public function home(){
		
		$datas = Category::paginate(5);
		return view('home', [
			'cats' => $datas,
			'prods' => Product::Where('status',0)->orderBy('id','DESC')->limit(3)->get(),
			// 'carts' => new Cart(),
		]);


	}
	public function product_slug($slug)
	{
		$prodt = Product::find($slug);
		$datas = Category::paginate(5);
		$model = Product::where('slug',$slug)->first();
		return view('prod_view',[
			'model' => $model,
			'cats' => $datas,
			'prods' => $prodt,
			'pdos' => Product::Where("category_id",$model->category_id)->get(),
			// 'carts' => new Cart()
		]);
	}
	//-------------------------------------

	// funcition home() là home sau @ ở web
	// view('contact') là ở layouts trong view
	// 'contact' name tùy chọn @contact nếu
	// muốn lấy dữ liệu vào trang

	//-------------------------------------
	public function search(Request $req) 
	{
		if ($req->search_key) {
			$name = $req->search_key;
			$datas = Category::paginate(5);

			$prods = Product::Where('name','LIKE','%'.$name.'%')->orderBy('id','DESC')->paginate(8);


			return view('search', [
			'cats' => $datas,
			'prods' => $prods,
			'carts' => new Cart(),
		]);
		}else{
			return redirect()->back();
		}

		$name = $req->search_key;
			$datas = Category::paginate(5);

			$prods = Product::Where('name','LIKE','%'.$name.'%');
			if ($req->search_cats) {
				$prods = $prods->Where('category_id',$req->search_cats);
			}
			$prods = $prods->orderBy('id','DESC')->paginate(8);


			return view('search', [
			'cats' => $datas,
			'prods' => $prods,
			// 'carts' => new Cart(),
			]);



		// dd($req->search_key);
	} // Gọi tới route test có tham số nhưng chưa truyền giá trị thì sẽ báo lỗi
}
?>