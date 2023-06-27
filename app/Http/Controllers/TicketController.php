<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Notifications\ticketNotification;
use Illuminate\Database\ConnectionInterface as DB;

class TicketController extends Controller
{
    public $db;
    public $ticket;

    public const NEW_STATUS = 1;

    public function __construct(DB $db, Ticket $ticket)
    {
        $this->db = $db;
        $this->ticket = $ticket;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ticket');
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
        $this->db->beginTransaction();

        $user = $request->user();

        $ticket_number = $this->generateTicketNumber();

        while ($this->ticket->where('ticket_no', $ticket_number)->exists()) {
            $ticketNumber = generateTicketNumber();
        }

        $ticket = new $this->ticket();
        $ticket->query = $ticket_number;
        $ticket->coordinates = $request->ip();
        $ticket->status = self::NEW_STATUS;
        $ticket->ticket_no = $request->query_reason;
        $ticket->category = $request->category;
        $ticket->user()->associate($user);
        $ticket->save();

        $user->notify(new ticketNotification($ticket));

        $this->db->commit();

        return back()->with('success', 'success');
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

    private function generateTicketNumber($length = 10) 
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $ticketNumber = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomCharacter = $characters[rand(0, strlen($characters) - 1)];
            $ticketNumber .= $randomCharacter;
        }
    
        return $ticketNumber;
    }
}
