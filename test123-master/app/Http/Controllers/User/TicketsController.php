<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Schedule;
use App\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Ticket::where("user_id", $user->id)->get();

        return view('user.tickets.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Destination::all();
        return view('user.tickets.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'    =>  'required',
            'travel_date' => 'required',
            'type' => 'required',
            'destination_id' => 'required'
        ]);

        $schedule = DB::table('schedules')->where('id', $request->id)->first();

        if($schedule->occupation == 0 || ($schedule->occupation - $request->number_of_passengers) < 0)
            return redirect('user/tickets')->with('message', 'No free seats for this train!');

        $form_data = array(
            'date' => Carbon::createFromFormat('m/d/Y', $request->travel_date)->format('Y-m-d'),
            'price' => $schedule->price * $request->number_of_passengers,
            'number_of_passengers' => $request->number_of_passengers,
            'type' => $request->type,
            'schedule_id'    =>  $request->id,
            'user_id'  => Auth::user()->id,
            'destination_id'    =>  $request->destination_id
        );

        //dd($form_data);

        $schedule_data = array(
            'occupation' => $schedule->occupation - $request->number_of_passengers,
        );

        Schedule::whereId($request->id)->update($schedule_data);


        Ticket::create($form_data);

        return redirect('user/tickets')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ticket::findOrFail($id);
        return view('user.tickets.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return void
     */

    public function search(Request $request)
    {
        $request->validate([
            'travel_date'    =>  'required',
            'number_of_passengers'     =>  'required',
            'type'     =>  'required',
            'destination_id'    =>  'required'
        ]);

        $schedule = Schedule::where([['departure_time', '>=', Carbon::createFromFormat('m/d/Y', $request->travel_date)->format('Y-m-d'). ' 00:00:00'], ['departure_time', '<=', Carbon::createFromFormat('m/d/Y', $request->travel_date)->format('Y-m-d'). ' 23:59:59'], ['destination_id', $request->destination_id]])->get();

        $search_data = array(
            'travel_date' => $request->travel_date,
            'number_of_passengers' => $request->number_of_passengers,
            'type' => $request->type,
            'destination_id'    =>  $request->destination_id
        );

        $data = array(
            'schedule' =>  $schedule,
            'search_data' =>  $search_data
        );

        return view('user.tickets.searchResults', compact('data'));

    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
