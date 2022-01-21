<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBankDetail extends Model
{
	use HasFactory;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'admin_id',
		'bank_name',
		'bank_address',
		'iban_code',
		'swift_code',
		'account_number',
	];

	/**
	 * Get the admin that owns the bank details.
	 */
	public function admin()
	{
		return $this->belongsTo(Admin::class, 'admin_id');
	}
}
