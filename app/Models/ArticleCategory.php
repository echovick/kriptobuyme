<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
	use HasFactory;

	/**
	 * Get all of the blogArticles for the ArticleCategory
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function blogArticles(): HasMany
	{
		return $this->hasMany(BlogArticle::class, 'category_id');
	}
}
