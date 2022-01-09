<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'reference_id',
		'charge',
		'user_id',
		'amount',
		'address_details',
		'withdrawal_method',
		'type',
		'status',
	];

	/**
	 * Get the withdrwalMethod that owns the Withdrawal
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function withdrwalMethod()
	{
		return $this->belongsTo(WithdrawalMethod::class, 'withdrawal_method');
	}

	/**
	 * Get the user that owns the Withdrawal
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
