<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
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
		$slug = str_replace(" ", "-", strtolower($request->input('name')));

		ArticleCategory::create([
			'category_name' => $request->input('name'),
			'category_slug' => $slug,
		]);

		return redirect()->route('admin.blog-categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\ArticleCategory  $articleCategory
	 * @return \Illuminate\Http\Response
	 */
	public function show(ArticleCategory $articleCategory)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\ArticleCategory  $articleCategory
	 * @return \Illuminate\Http\Response
	 */
	public function edit(ArticleCategory $articleCategory)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\ArticleCategory  $articleCategory
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$slug = str_replace(" ", "-", strtolower($request->input('name')));

		ArticleCategory::where('id', $id)->update([
			'category_name' => $request->input('name'),
			'category_slug' => $slug,
		]);

		return redirect()->route('admin.blog-categories');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\ArticleCategory  $articleCategory
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$ArticleCategory = ArticleCategory::find($id);

		$ArticleCategory->delete();
		return redirect()->route('admin.blog-categories');
	}
}
