<?php  
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use View;

	/**
	 * 
	 */
	class ProductController extends Controller
	{
		
		public function prod_view($view)
		{
			$prodt = Product::find($view);
			$datas = Category::paginate(5); //all() là gọi tất cả, paginate(n) là gọi số dòng hiện ra từ đầu đến cuối(n là số dòng)
			// gọi đên view, đây là file, view nừm trong thư mực resources
			// $cates = Category::Where("id",$id)->get();
			// $gcat = Category::find($ud);
			// var_dump($prodt->pro_img);
			// dd($prodt->category_id);
			// $prdt = Product::Where("id",$category_id);
			return view('prod_view',[
				'cats' => $datas,
				'prods' => $prodt,
				'pdos' => Product::Where("category_id",$prodt->category_id)->take(10)->get(),
			]);
		}

	}



?>