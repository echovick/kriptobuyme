<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	use HasFactory;

	/**
	 * Get all of the tradeHistories for the Plan
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tradeHistories()
	{
		return $this->hasMany(TradeHistory::class, 'plan_id');
	}
}
