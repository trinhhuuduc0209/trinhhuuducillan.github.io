<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Orders extends Model
{
	protected $table = 'orders';
	protected $fillable = [
			'user_id',
			'status',
	];
	
    public function ord_detai()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasMany(Order_detail::class, 'order_id','id');
    }

    public function ord_user()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasOne(User::class, 'user_id','id');
    }

}


 ?>