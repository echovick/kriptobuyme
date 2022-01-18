<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class TicketController extends Controller
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
		// get input info
		$subject = $request->input('subject');
		$priority = $request->input('priority');
		$details = $request->input('details');

		// genrate ticket id
		$ticket_id = time() . rand(10*45, 100*98);

		Ticket::create([
			'user_id' => auth()->user()->id,
			'priority' => $priority,
			'ticket_id' => $ticket_id,
			'subject' => $subject,
			'content' => $details,
			'status' => 'Open',
		]);

		AuditLog::create([
			'user_id' => auth()->user()->id,
			'reference_id' => 'AUD' . $ref_id,
			'log' => 'Opened New Ticket. ID: '. $ticket_id,
		]);

		return redirect()->route('user.tickets', ['message' => 'successfull']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function show(Ticket $ticket)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Ticket $ticket)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Ticket $ticket)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Ticket $ticket)
	{
		//
	}
}
