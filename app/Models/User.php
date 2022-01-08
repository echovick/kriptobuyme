<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'username',
		'city',
		'country',
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
	 * Get all of the deposits for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function deposits(): HasMany
	{
		return $this->hasMany(Deposit::class, 'user_id');
	}

	/**
	 * Get all of the Withdrawals for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function withdrawals(): HasMany
	{
		return $this->hasMany(Withdrawal::class, 'user_id');
	}

	/**
	 * Get all of the tradeHistories for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tradeHistories(): HasMany
	{
		return $this->hasMany(TradeHistory::class, 'user_id');
	}

	/**
	 * Get all of the transfers for the User as sender
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function transferSenders(): HasMany
	{
		return $this->hasMany(Transfer::class, 'sender_id');
	}

	/**
	 * Get all of the transfers for the User as receiver
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function transferReceivers(): HasMany
	{
		return $this->hasMany(Transfer::class, 'receiver_id');
	}

	/**
	 * Get all of the tickets for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tickets(): HasMany
	{
		return $this->hasMany(Ticket::class, 'user_id');
	}

	/**
	 * Get all of the auditLogs for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function auditLogs(): HasMany
	{
		return $this->hasMany(AuditLog::class, 'user_id');
	}

	/**
	 * Get all of the messages for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function messages(): HasMany
	{
		return $this->hasMany(Message::class, 'user_id');
	}

	/**
	 * Get all of the wallets for the User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function wallets(): HasMany
	{
		return $this->hasMany(UserWallet::class, 'user_id');
	}
}
