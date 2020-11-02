<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Request\TicketRequest;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets=Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket=new Ticket;
        $ticket->nombre=$request->nombre;
        $ticket->tipo_tramite=$request->tipo_tramite;
        $ticket->fecha=now();
        $ticket->estado=0;

        $ticket->save();
        return redirect()->route('tickets.index')->with('mensaje','El ticket fue registrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
        $ticket= Ticket::find($ticket->id);
        return view('tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
        $ticket=Ticket::find($ticket->id);
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        //
        $ticket=Ticket::find($ticket->id);
        $ticket->nombre=$request->nombre;
        $ticket->tipo_tramite=$request->tipo_tramite;
        if($ticket->estado=0 != null){
            $ticket->estado=0;
        } else{
            $ticket->estado=1;
        }
        $ticket->save();
        return redirect()->route('tickets.index')->with('mensaje', 'El ticket fue modificado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
        Ticket::find($ticket->id)->delete();
        return back()->with('mensaje','El ticket fue eliminado!');
    }
    public function reporte()
    {
    	$noatendidos=Ticket::select(DB::raw('count(*) as mes_count_0, month(fecha) as mes_0'))
    		->where('estado',0)
    		->whereYear('fecha','2019')
    		->groupBy(DB::raw('month(fecha)'))
    		->get();
    	$atendidos=Ticket::select(DB::raw('count(*) as mes_count_1, month(fecha) as mes_1'))
    		->where('estado',1)
    		->whereYear('fecha','2019')
    		->groupBy(DB::raw('month(fecha)'))
    		->get();
    	return view('tickets.report',compact('noatendidos','atendidos'));
        //return $noatendidos;
    }
   
}
