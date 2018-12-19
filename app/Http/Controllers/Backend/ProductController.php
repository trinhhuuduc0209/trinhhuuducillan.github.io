<?php  
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Attribute;
use App\Models\ProductAttribute;
use Auth;
// use Illuminate\Database\Query\Builder;

/**
 * 
 */
class ProductController extends BackendController
{
	public function index()
	// Product::otdeBy('id',"desc")->paginate()
	{
		$datas = Product::orderBy('name',"ASC")->paginate(10); //all() là gọi tất cả, paginate(n) là gọi số dòng hiện ra từ đầu đến cuối(n là số dòng)
		if(Auth::guard('admin')->check())
		{
			return view('backend.product.index',[
			'prods' => $datas,
			'cats'	=> Category::all()

		]);
		}else{
			return redirect()->route('backend_login');
		}
	}


	public function delete($id)
	{
		Product::destroy($id);
		return redirect()->back()->with('success','Xóa Thành Công');
	}

	public function delete_all(Request $req)
	{
		Product::destroy($req->id); //DELETE from product Where id IN($id)
		return redirect()->back()->with('success','Xóa Thành Công');
		
	}
	public function prodel_img($img)
	{
		Product_image::destroy($img);
		return redirect()->back()->with('delee','Xóa Thành Công');
	}
	 	
	 // public function prodel_img($img)  
	 //   {  
	 //     if ($this->prodel_img($img)) Product_image::destroy($this->uploadFolder. $img); 
		// 	return redirect()->back();

	 //   }  
	
	public function prod_add()
	{

		return view('backend.product.prod_add',[
			'cats'	=> Category::all(),
			'colors' => Attribute::where('type','color')->get(),
			'sizes' =>  Attribute::where('type','size')->get(),

		]);
		

	}
	public function post_prod_add(Request $rq)
	{
		// base_path() Đường dẫn
		// dd(base_path('public\assets\img\product'));
		$this->validate($rq,[
			'name' => 'required',
			'slug' => 'required|unique:product,slug'



		],[
			'name.require' => 'Tên sản phẩm không được để trông',
			'slug.require' => 'Đường dẫn tĩnh không được để trông',
			'slug.unique' => 'Đường dẫn này đã được sử dụng	'



		]);
		$img= '';
		if ($rq->hasFile('file_upload')){
			$file = $rq->file_upload;
			$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
			$img = $file->getClientOriginalName();
		}
		$rq->merge(['image'=> $img]);
		if ($prods = Product::create($rq->all())) {
			$product_id = $prods->id;
				foreach ($rq->other_image as $other) {
					$other->move(base_path('public\assets\img\product'),$other->getClientOriginalName());
					$other_link = $other->getClientOriginalName();
					Product_image::create([
						'link_img' => $other_link,
						'product_id' => $product_id
					]);
				} 
				foreach ($rq->color as $cl) {
					ProductAttribute::create([
						'product_id' => $product_id,
						'attribute_id' => $cl,
					]);

				}
				foreach ($rq->size as $sz) {
					ProductAttribute::create([
						'product_id' => $product_id,
						'attribute_id' => $sz,
					]);

				}

			return redirect()->route('productend')->with('success', 'Thêm mới' . $prods->name . ' thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
		} else {
			return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
		}

	}
	public function prod_edit($id)
	{
		$model = Product::find($id);
		$attris = ProductAttribute::where('product_id',$id)->get();
		$atrarry = [];
		foreach ($attris as $atis) {
			$atrarry[] = $atis->attribute_id;
		}
		// $colors = Attribute::where('type','color')->get();
		// $cloarry = [];
		// foreach ($colors as $clo) {
		// 	$cloarry[] = $clo->id;
		// }
		// dd($cloarry);
		return view('backend.product.prod_edit',[
			'model' => $model,
			'cats'	=> Category::all(),
			'colors' => Attribute::where('type','color')->get(),
			'sizes' =>  Attribute::where('type','size')->get(),
			'atrarrys' => $atrarry


		]);
	}

	public function post_prod_edit($id, Request $rq)
	{
		$model = Product::find($id);

		$img = $model->image;
		if ($rq->hasFile('file_upload')){
			$file = $rq->file_upload;
			$file->move(base_path('public\assets\img\product'),$file->getClientOriginalName());
			$img = $file->getClientOriginalName();
		}
		$rq->merge(['image' => $img]);

		if ($model->update($rq->all())) {
					ProductAttribute::where('product_id',$id)->delete();
					// Sửa 1 ảnh đã có
					if ($rq->old_img) {
						foreach ($rq->old_img as $id_img => $one_img) {
							$one_img->move(base_path('public\assets\img\product'),$one_img->getClientOriginalName());

							$one_img_link = $one_img->getClientOriginalName();

							Product_image::where('id',$id_img)->update([
								'link_img' => $one_img_link
							]);
						}
					}
					//Thêm nhiều ảnh khác
					if($rq->other_img != null){
						foreach ($rq->other_img as $all_img) {
							$all_img->move(base_path('public\assets\img\product'),$all_img->getClientOriginalName());
							$all_img_link = $all_img->getClientOriginalName();

							Product_image::create([
								'link_img' => $all_img_link,
								'product_id' => $id
							]);
						} 
					}
					foreach ($rq->color as $cl) {
						ProductAttribute::create([
							'product_id' => $id,
							'attribute_id' => $cl,
						]);
					}
					foreach ($rq->size as $sz) {
						ProductAttribute::create([
							'product_id' => $id,
							'attribute_id' => $sz,
						]);

					}

		return redirect()->route('productend')->with('success', 'Thêm mới thành công');
				// chuyển tới trang danh sách với một lười nhắn có key là succes và một lời nhắn
		} else {
			return redirect()->back()->with('error', 'Thêm mới không thành công, vui lòng thử lại!');
		}

	}
		// Product::table('product')->join('category', 'product.category_id','=','category.id')->select('category.name')->get()

}





?>