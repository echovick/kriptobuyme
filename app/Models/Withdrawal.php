<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
	use HasFactory;

	/**
	 * Get the withdrwalMethod that owns the Withdrawal
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function withdrwalMethod(): BelongsTo
	{
		return $this->belongsTo(WithdrawalMethod::class, 'withdrawal_method');
	}

	/**
	 * Get the user that owns the Withdrawal
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
