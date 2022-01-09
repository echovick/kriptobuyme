<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	use HasFactory;
	
	protected $guard = 'admin';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	/**
	 * Get the bank details associated with the admin.
	 */
	public function adminBankDetail()
	{
		return $this->hasOne(AdminBankDetail::class, 'admin_id');
	}

	/**
	 * Get all of the coupons for the Admin
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function coupons()
	{
		return $this->hasMany(Coupon::class, 'admin_id');
	}
}
