<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * 
 */
class ProductAttribute extends Model
{
	protected $table = 'product_attribute';
	protected $fillable = [
			'attribute_id',
			'product_id'


	];
    public $timestamps = false;
	
    

}


 ?>