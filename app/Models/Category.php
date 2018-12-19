<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class Category extends Model
{
	protected $table = 'category';
	
	protected $fillable = [
		'id','name','status',


	];
	public function prodts()
    {
				// hasOne(Category::class, 'id', 'category_id')
        return $this->hasMany(Product::class, 'category_id','id');
    }

}



 ?>