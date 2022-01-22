<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
	use HasFactory;

	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'blog_title',
		'category_id',
		'views',
		'status',
		'article_slug',
		'content',
	];

	/**
	 * Get the category that owns the BlogArticle
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(ArticleCategory::class, 'category_id');
	}
}
