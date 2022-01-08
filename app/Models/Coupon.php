<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
	use HasFactory;

	/**
	 * Get the admin that owns the Coupon
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function admin(): BelongsTo
	{
		return $this->belongsTo(Admin::class, 'admin_id');
	}
}
