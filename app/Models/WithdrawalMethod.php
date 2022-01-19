<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalMethod extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'status',
	];

	/**
	 * Get all of the withdrawals for the WithdrawalMethod
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function withdrawals()
	{
		return $this->hasMany(Withdrawal::class, 'withdrawal_method');
	}
}
