<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Order_detail extends Model
{
	protected $table = 'order_detail';
	protected $fillable = [
			'order_id',
			'product_id',
			'price',
			'quantity'

	];
	public $timestamps = false;
	
	public function orders()
    {
        return $this->hasOne(Orders::class, 'id','order_id');
    }
    
    public function product()
    {
        return $this->hasOne(Product::class, 'id','product_id');
    }

}


 ?>