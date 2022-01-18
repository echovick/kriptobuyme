<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'user_id',
		'reference_id',
		'sender_id',
		'receiver_id', 
		'amount',
		'charge', 
		'status',
	];

	/**
	 * Get the sender that owns the Transfer
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function sender()
	{
		return $this->belongsTo(User::class, 'sender_id');
	}

	/**
	 * Get the receiver that owns the Transfer
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function receiver()
	{
		return $this->belongsTo(User::class, 'receiver_id');
	}
}
