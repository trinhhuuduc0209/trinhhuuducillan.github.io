<?php  
namespace App\Helper;

/**
 * 
 */
class Cart
{
	public $items = [];
	public $totalQty = 0;
	public $totalAmount = 0;
	public function __construct()
	{
		$this->items = session('cart') ? session('cart') : [];
		$this->totalQty = $this->get_totalqty();
		$this->totalAmount = $this->get_totalamount();

		// echo $this->totalQty;
		// dd($this->items[$prod['id']]));

	}
	public function add($prod)
	{
		if (isset($this->items[$prod['id']])) {
			$this->items[$prod['id']]['quantity'] += 1 ;
			// dd($this->items[$prod['id']]);
		}else{
			$this->items[$prod['id']] = [
				"id" => $prod['id'],
				"name" => $prod['name'],
				"category_id" => $prod['category_id'],
				"description" => $prod['description'],
				"image" => $prod['image'],
				"price" => $prod['sale_price'] > 0 ? $prod['sale_price'] : $prod['price'],
				"quantity" => 1
			];
			// dd($items);
		}
		session(['cart' => $this->items]);
		// dd($this->items[$prod['id']]);
		// echo $this->items[$prod['id']]['quantity']+=1;

	}
	public function remode_cart($id)
	{
		if (isset($this->items[$id])) {
			unset($this->items[$id]);
		}
		session(['cart' => $this->items]);
	}
	public function update($data)
	{
		for ($i = 0; $i < count($data['id']);$i++)  {
			if (isset($this->items[$data['id'][$i]])) {
			$this->items[$data['id'][$i]]['quantity'] = $data['quantity'][$i];
		}
		session(['cart' => $this->items]);
		}
	}
	protected function get_totalqty(){
		foreach ($this->items as $item) {
				$this->totalQty = $this->totalQty + $item['quantity'];
		}
		return $this->totalQty;

	}
	protected function get_totalamount(){
		foreach ($this->items as $item) {
				$this->totalAmount = $this->totalAmount + ($item['quantity']* $item['price']);
		}
		return $this->totalAmount;

	}

}

?>