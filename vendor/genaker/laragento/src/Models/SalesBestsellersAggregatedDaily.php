<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use Carbon\Carbon;
use IlluminateNew\Database\Eloquent\Model;

/**
 * Class SalesBestsellersAggregatedDaily
 * 
 * @property int $id
 * @property Carbon|null $period
 * @property int|null $store_id
 * @property int|null $product_id
 * @property string|null $product_name
 * @property float $product_price
 * @property float $qty_ordered
 * @property int $rating_pos
 * 
 * @property Store|null $store
 *
 * @package Laragento\Models
 */
class SalesBestsellersAggregatedDaily extends Model
{
	protected $table = 'sales_bestsellers_aggregated_daily';
	public $timestamps = false;

	protected $casts = [
		'store_id' => 'int',
		'product_id' => 'int',
		'product_price' => 'float',
		'qty_ordered' => 'float',
		'rating_pos' => 'int'
	];

	protected $dates = [
		'period'
	];

	protected $fillable = [
		'period',
		'store_id',
		'product_id',
		'product_name',
		'product_price',
		'qty_ordered',
		'rating_pos'
	];

	public function store()
	{
		return $this->belongsTo(Store::class);
	}
}
