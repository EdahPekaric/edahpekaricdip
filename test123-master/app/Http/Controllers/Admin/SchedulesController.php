<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Schedule;
use Illuminate\Support\Facades\DB;


class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*        $data = Schedule::all();

        return view('admin.schedules.index', compact('data'));*/
        $data = Schedule::all();
       // dd(compact('data'));
        return view('admin.schedules.index', compact('data'));
/*        $data = Schedule::latest()->paginate(5);
        dd(compact('data'));
        return view('admin.schedules.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'destinations' =>  Destination::all(),
            'trains' =>  Train::all()
        );
        return view('admin.schedules.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'departure_time'    =>  'required',
            'arrival_time'     =>  'required',
            'price'     =>  'required',
            'destination_id'    =>  'required',
            'train_id'     =>  'required'
        ]);

        $train = DB::table('trains')->where('id', $request->train_id)->first();;

        $form_data = array(
            'departure_time'       => Carbon::createFromFormat('m/d/Y h:i', $request->departure_time)->format('Y-m-d H:i'),
            'arrival_time'        =>   Carbon::createFromFormat('m/d/Y h:i', $request->arrival_time)->format('Y-m-d H:i'),
            'occupation'    =>  $train->number_of_seats,
            'price'     =>  $request->price,
            'destination_id'    =>  $request->destination_id,
            'train_id'     =>  $request->train_id
        );

        Schedule::create($form_data);

        return redirect('admin/schedules')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Schedule::findOrFail($id);
        return view('admin.schedules.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'schedule' => Schedule::findOrFail($id),
            'destinations' =>  Destination::all(),
            'trains' =>  Train::all()
        );
        return view('admin.schedules.edit', compact('data'));
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
        $request->validate([
            'departure_time'    =>  'required',
            'arrival_time'     =>  'required',
            'price'     =>  'required',
            'destination_id'    =>  'required',
            'train_id'     =>  'required'
        ]);

        $form_data = array(
            'departure_time'       =>   Carbon::createFromFormat('m/d/Y h:i', $request->departure_time)->format('Y-m-d H:i'),
            'arrival_time'        =>   Carbon::createFromFormat('m/d/Y h:i', $request->arrival_time)->format('Y-m-d H:i'),
            'price'     =>  $request->price,
            'destination_id'    =>  $request->destination_id,
            'train_id'     =>  $request->train_id
        );

        Schedule::whereId($id)->update($form_data);

        return redirect('admin/schedules')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Schedule::findOrFail($id);
        $data->delete();

        return redirect('admin/schedules')->with('success', 'Data is successfully deleted');
    }
}
