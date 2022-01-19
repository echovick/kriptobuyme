<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'plan_name',
		'daily_percentage',
		'min_amount',
		'max_amount',
		'plan_duration',
		'referral_percentage',
		'bonus_percentage',
		'status',
	];

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
