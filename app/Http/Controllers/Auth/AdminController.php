<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	/**
	 * show admin dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('admin.index');
	}

	/**
	 * show admin dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showCustomersPage(){
		return view('admin.customers');
	}

	/**
	 * show admin tickets page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTicketsPage(){
		return view('admin.tickets');
	}

	/**
	 * show admin promotional emails page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showPromotionalEmailsPage(){
		return view('admin.promotional-emails');
	}

	/**
	 * show admin messages page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showMessagesPage(){
		return view('admin.messages');
	}

	public function showPaymentGatewaysPage(){
		return view('admin.payment-gateways');
	}

	public function showBankTransferPage(){
		return view('admin.bank-transfer');
	}

	public function showDepositLogsPage(){
		return view('admin.deposit-logs');
	}

	public function showPayoutMethodsPage(){
		return view('admin.payout-methods');
	}

	public function showPayoutsLogPage(){
		return view('admin.payout-logs');
	}

	public function showOpenTradesPage(){
		return view('admin.open-trades');
	}

	public function showClosedTradesPage(){
		return view('admin.closed-trades');
	}

	public function showPlansSettingsPage(){
		return view('admin.plans-settings');
	}

	public function showCouponsPage(){
		return view('admin.coupons');
	}

	public function showTransferLogsPage(){
		return view('admin.transfer-logs');
	}

	public function showReferalEarningsPage(){
		return view('admin.referal-earnings');
	}

	public function showBlogArticlesPage(){
		return view('admin.blog-articles');
	}

	public function showBlogCategoriesPage(){
		return view('admin.blog-categories');
	}

	public function showSettingsPage(){
		return view('admin.settings');
	}

	public function showHomepage(){
		return view('admin.homepage');
	}

	public function showLogoSettingspage(){
		return view('admin.logo-settings');
	}

	public function showReviewsPage(){
		return view('admin.reviews');
	}

	public function showServicesPage(){
		return view('admin.services');
	}

	public function showTeamPage(){
		return view('admin.team');
	}

	public function showPagesPage(){
		return view('admin.pages');
	}

	public function showCurrencyPage(){
		return view('admin.currency');
	}

	public function showFaqsPage(){
		return view('admin.faqs');
	}

	public function showTermsPage(){
		return view('admin.terms');
	}

	public function showPrivacyPolicyPage(){
		return view('admin.privacy-policy');
	}

	public function showAboutPage(){
		return view('admin.about-us');
	}

	public function showSocialLinksPage(){
		return view('admin.social-links');
	}
}
