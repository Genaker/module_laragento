<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use IlluminateNew\Database\Eloquent\Model;

/**
 * Class CustomerEntityVarchar
 * 
 * @property int $value_id
 * @property int $attribute_id
 * @property int $entity_id
 * @property string|null $value
 * 
 * @property EavAttribute $eav_attribute
 * @property CustomerEntity $customer_entity
 *
 * @package Laragento\Models
 */
class CustomerEntityVarchar extends Model
{
	protected $table = 'customer_entity_varchar';
	protected $primaryKey = 'value_id';
	public $timestamps = false;

	protected $casts = [
		'attribute_id' => 'int',
		'entity_id' => 'int'
	];

	protected $fillable = [
		'attribute_id',
		'entity_id',
		'value'
	];

	public function eav_attribute()
	{
		return $this->belongsTo(EavAttribute::class, 'attribute_id');
	}

	public function customer_entity()
	{
		return $this->belongsTo(CustomerEntity::class, 'entity_id');
	}
}
