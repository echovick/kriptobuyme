<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
	use HasFactory;

	/**
	 * Get the sender that owns the Transfer
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function sender(): BelongsTo
	{
		return $this->belongsTo(User::class, 'sender_id');
	}

	/**
	 * Get the receiver that owns the Transfer
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function receiver(): BelongsTo
	{
		return $this->belongsTo(User::class, 'receiver_id');
	}
}
