<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use IlluminateNew\Database\Eloquent\Model;

/**
 * Class CatalogProductIndexEavDecimalReplica
 * 
 * @property int $entity_id
 * @property int $attribute_id
 * @property int $store_id
 * @property float $value
 * @property int $source_id
 *
 * @package Laragento\Models
 */
class CatalogProductIndexEavDecimalReplica extends Model
{
	protected $table = 'catalog_product_index_eav_decimal_replica';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entity_id' => 'int',
		'attribute_id' => 'int',
		'store_id' => 'int',
		'value' => 'float',
		'source_id' => 'int'
	];
}
