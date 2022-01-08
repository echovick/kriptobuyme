<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBankDetail extends Model
{
	use HasFactory;

	/**
	 * Get the admin that owns the bank details.
	 */
	public function admin()
	{
		return $this->belongsTo(Admin::class, 'admin_id');
	}
}
