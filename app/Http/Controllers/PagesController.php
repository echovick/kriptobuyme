<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * Show the application homepage.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('home');
	}

	/**
	 * Show the website about page
	 * 
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function showAboutPage(){
		return view('about');
	}

	public function showServicesPage(){
		return view('services');
	}

	public function showContactPage(){
		return view('contact');
	}

	public function showFaqPage(){
		return view('faq');
	}

	public function showTermsPage(){
		return view('terms');
	}

	public function showPrivacyPolicyPage(){
		return view('privacy-policy');
	}
}
