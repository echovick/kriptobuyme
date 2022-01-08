<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositMethod extends Model
{
	use HasFactory;

	protected $guard = 'admin';

	protected $table = 'deposit_methods';

	protected $primarykey = 'id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'display_name',
		'min',
		'max',
		'fixed_charge_amount',
		'percentage_charge',
		'status',
		'method_address',
	];

	/**
	 * Get the deposits for this deposit method.
	 */
	public function deposit()
	{
		return $this->hasMany(Deposit::class, 'deposit_method');
	}
}
