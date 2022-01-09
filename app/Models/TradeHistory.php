<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeHistory extends Model
{
	use HasFactory;

	/**
	 * Get the user that owns the TradeHistory
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	/**
	 * Get the plan that owns the TradeHistory
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function plan()
	{
		return $this->belongsTo(Plan::class, 'plan_id');
	}
}
