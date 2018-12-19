<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Product extends Model
{
	protected $table = 'product';
	
	protected $fillable = [
		'id','name','image','description','category_id','price','parent','status','slug'


	];
	// ORM (relationships) quan he
	// n sanr phaamr cos 1 danh muc thif ta viet
	// belongTo










	public function cates()
    {
				// hasMany(Product::class, 'category_id','id' )
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function pro_img()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasMany(Product_image::class, 'product_id','id');
    }

    public function ord_detail()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasMany(Order_detail::class, 'product_id','id');
    }
    
}


 ?>