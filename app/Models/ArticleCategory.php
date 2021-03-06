<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
	use HasFactory;

	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'category_name',
		'category_slug'
	];

	/**
	 * Get all of the blogArticles for the ArticleCategory
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function blogArticles()
	{
		return $this->hasMany(BlogArticle::class, 'category_id');
	}
}
