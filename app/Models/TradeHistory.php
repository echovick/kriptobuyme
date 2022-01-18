<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeHistory extends Model
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
		'amount',
		'plan_id',
		'daily_percentage',
		'trade_profit',
		'trade_duration',
		'trade_source',
		'trade_bonus',
		'trade_end_date'
	];


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
