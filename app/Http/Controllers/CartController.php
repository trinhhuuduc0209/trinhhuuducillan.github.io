<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Helper\Cart;
use Auth;
use App\Models\Orders;
use App\Models\Order_detail;


/**
 * 
 */
class CartController extends Controller
{
	public function add_cart($id,Cart $cart )
	{

		$prod = Product::find($id)->toArray();
		// 'pdos' => Product::Where("category_id",$prod->category_id)->take(10)->get(),

		$cart->add($prod);
		return redirect()->back();		
	}

	public function remode_cart($id,Cart $cart )
	{
		// $prod = Product::find($id)->toArray();
		$cart->remode_cart($id);
		return redirect()->back();		
	}
	public function update_cart(Request $req,Cart $cart )
	{
		$cart->update($req->all());
		return redirect()->back();	
	}
	public function check_cart()
	{
		return view('check_cart');
	}
	public function buy_cart()
	{
		return view('buy_cart');


	}

	public function post_buy_cart( Request $rq)
	{
		if(Auth::check()){
			$user = Auth::user()->id;
			if($orders = Orders::create(['user_id' => $user])){
				if($orders){

					$carts = session('cart') ? session('cart') : [];
					// dd($carts);
					$order_id = $orders->id;
					foreach ($carts as $key => $cart) {
						$qty = $cart['quantity'];
						$price = $cart['price'];
						$product_id = $cart['id'];
						Order_detail::create([
							'order_id' => $order_id,
							'product_id' => $product_id,
							'price' => $price,
							'quantity' => $qty
						]);
					}
				}
			}
		}
	}

	public function history_cart()
	{
		if (Auth::check()) {
			$user = Auth::user()->id;

			return view('history_cart',[
				'order' => Orders::Where('user_id',Auth::user()->id)->get(),
			]);
		}
	}
	public function view_cart($id)
	{
		if (Auth::check()) {
			return view('view_cart',[
				'view_cart' => Order_detail::Where('order_id',$id)->get(),
			]);
		}
	}



}









?>