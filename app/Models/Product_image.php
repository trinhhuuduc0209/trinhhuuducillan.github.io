<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Product_image extends Model
{
	protected $table = 'product_image';
	protected $fillable = [
		'link_img','product_id'


	];
    public $timestamps = false;
	public function prodts()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasMany(Product::class, 'category_id','id');
    }
    

}


 ?>