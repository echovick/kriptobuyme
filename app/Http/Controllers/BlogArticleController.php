<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class BlogArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		// 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// $request->validate([
		// 	'featured_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		// ]);

		// $name = $request->file('featured_image')->getClientOriginalName();
		// $newImageName = time() . '-' . $name;
		
		// $request->file('featured_image')->move(base_path('public\assets\blog'), $newImageName);

		// Create post slug
		$slug = str_replace(" ", "-", strtolower($request->input('post_title')));

		BlogArticle::create([
			'blog_title' => $request->input('post_title'),
			'article_slug' => $slug,
			'content' => $request->input('post_content'),
			'category_id' => $request->input('category_id'),
			'status' => $request->input('status'),
		]);

		return redirect()->route('admin.blog-articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\BlogArticle  $blogArticle
	 * @return \Illuminate\Http\Response
	 */
	public function show(BlogArticle $blogArticle)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\BlogArticle  $blogArticle
	 * @return \Illuminate\Http\Response
	 */
	public function edit(BlogArticle $blogArticle)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\BlogArticle  $blogArticle
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, BlogArticle $blogArticle)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\BlogArticle  $blogArticle
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(BlogArticle $blogArticle)
	{
		//
	}
}
