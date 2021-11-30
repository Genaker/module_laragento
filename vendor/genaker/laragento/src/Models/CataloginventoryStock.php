<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use IlluminateNew\Database\Eloquent\Collection;
use IlluminateNew\Database\Eloquent\Model;

/**
 * Class CataloginventoryStock
 * 
 * @property int $stock_id
 * @property int $website_id
 * @property string|null $stock_name
 * 
 * @property Collection|CataloginventoryStockItem[] $cataloginventory_stock_items
 *
 * @package Laragento\Models
 */
class CataloginventoryStock extends Model
{
	protected $table = 'cataloginventory_stock';
	protected $primaryKey = 'stock_id';
	public $timestamps = false;

	protected $casts = [
		'website_id' => 'int'
	];

	protected $fillable = [
		'website_id',
		'stock_name'
	];

	public function cataloginventory_stock_items()
	{
		return $this->hasMany(CataloginventoryStockItem::class, 'stock_id');
	}
}
