<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use Carbon\Carbon;
use IlluminateNew\Database\Eloquent\Model;

/**
 * Class SalesInvoicedAggregatedOrder
 * 
 * @property int $id
 * @property Carbon|null $period
 * @property int|null $store_id
 * @property string $order_status
 * @property int $orders_count
 * @property float|null $orders_invoiced
 * @property float|null $invoiced
 * @property float|null $invoiced_captured
 * @property float|null $invoiced_not_captured
 * 
 * @property Store|null $store
 *
 * @package Laragento\Models
 */
class SalesInvoicedAggregatedOrder extends Model
{
	protected $table = 'sales_invoiced_aggregated_order';
	public $timestamps = false;

	protected $casts = [
		'store_id' => 'int',
		'orders_count' => 'int',
		'orders_invoiced' => 'float',
		'invoiced' => 'float',
		'invoiced_captured' => 'float',
		'invoiced_not_captured' => 'float'
	];

	protected $dates = [
		'period'
	];

	protected $fillable = [
		'period',
		'store_id',
		'order_status',
		'orders_count',
		'orders_invoiced',
		'invoiced',
		'invoiced_captured',
		'invoiced_not_captured'
	];

	public function store()
	{
		return $this->belongsTo(Store::class);
	}
}
