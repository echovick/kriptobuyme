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

		// General Reference id
		$ref_id = time() . rand(10*45, 100*98);

		// Create chat array
		$content = array(
			array(
				'user_type' => 'User',
				'user_id' => auth()->user()->id,
				'message' => $details,
				'timestamp' => date('Y-m-d h:m:s'),
			),
		);



		Ticket::create([
			'user_id' => auth()->user()->id,
			'priority' => $priority,
			'ticket_id' => $ticket_id,
			'subject' => $subject,
			'content' => serialize($content),
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
	public function edit($id)
	{
		$ticket = Ticket::find($id);

		return view('user.manage-ticket')->with('ticket', $ticket);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$message = $request->input('message');
		$ticket = Ticket::find($id);

		$content = unserialize($ticket->content);

		if($request->input('user_type') == 'Admin'){
			$user_id = $request->input('user_id');
		}else{
			$user_id = auth()->user()->id;
		}

		// Create new array
		// Create chat array
		$new_content = array(
			'user_type' => $request->input('user_type'),
			'user_id' => $user_id,
			'message' => $message,
			'timestamp' => date('Y-m-d h:m:s'),
		);

		$content[] = $new_content;

		Ticket::where('id', $id)->update([
			'content' => serialize($content),
		]);

		if($request->input('user_type') == 'Admin'){
			return redirect()->route('admin.tickets.edit', ['id' => $id]);	
		}else{
			return redirect()->route('user.ticket.edit', ['id' => $id]);
		}
	}

	/**
	 * close the specified resource from storage.
	 *
	 * @param  \App\Models\Ticket  $ticket
	 * @return \Illuminate\Http\Response
	 */
	public function close($id)
	{
		Ticket::where('id', $id)->update(['status' => 'Closed']);

		return redirect()->route('user.tickets', ['id' => $id]);
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
