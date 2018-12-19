<?php 
namespace App\Http\Controllers\co_ban;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

/**
 * 
 */
class DemoController extends Controller
{
	
	
	public function hienthi()
	{
		return view('co-ban-thanh.hienthi');




	}
	public function sanpham()
	{
		return view('co-ban-thanh.sanpham',[
			'hocsinh' => Product::all(),


		]);
	}
	public function danhmuc()
	{
		return view('co-ban-thanh.danhmuc',[
			'sp' => Category::all(),

		]);
	}
	public function xoa($id)
	{
		Product::where('id',$id)->delete();
		
	}



}


 ?>