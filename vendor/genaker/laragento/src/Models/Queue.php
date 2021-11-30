<?php

/**
 * Laragento 2020.
 */

namespace Laragento\Models;

use IlluminateNew\Database\Eloquent\Collection;
use IlluminateNew\Database\Eloquent\Model;

/**
 * Class Queue
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property Collection|QueueMessageStatus[] $queue_message_statuses
 *
 * @package Laragento\Models
 */
class Queue extends Model
{
	protected $table = 'queue';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function queue_message_statuses()
	{
		return $this->hasMany(QueueMessageStatus::class);
	}
}
