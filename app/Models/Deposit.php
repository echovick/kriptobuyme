<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
   use HasFactory;

	/**
	 * Get the deposit method that owns the deposit.
	 */
	public function depositMethod()
	{
		return $this->belongsTo(DepositMethod::class, 'deposit_method');
	}
	
	/**
	 * Get the user that owns the Deposit
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
