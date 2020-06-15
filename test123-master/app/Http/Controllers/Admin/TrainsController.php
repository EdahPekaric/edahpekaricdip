<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Train::latest()->paginate(5);
        return view('admin.trains.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trains.create');
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
            'brand'    =>  'required',
            'version'     =>  'required',
            'number_of_seats'    =>  'required',
            'type'     =>  'required'
        ]);

        $form_data = array(
            'brand'       =>   $request->brand,
            'version'        =>   $request->version,
            'number_of_seats'    =>  $request->number_of_seats,
            'type'     =>  $request->type
        );

        Train::create($form_data);

        return redirect('admin/trains')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Train::findOrFail($id);
        return view('admin.trains.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Train::findOrFail($id);
        return view('admin.trains.edit', compact('data'));
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
            'brand'    =>  'required',
            'version'     =>  'required',
            'number_of_seats'    =>  'required',
            'type'     =>  'required'
        ]);

        $form_data = array(
            'brand'       =>   $request->brand,
            'version'        =>   $request->version,
            'number_of_seats'    =>  $request->number_of_seats,
            'type'     =>  $request->type
        );

        Train::whereId($id)->update($form_data);

        return redirect('admin/trains')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Train::findOrFail($id);
        $data->delete();

        return redirect('admin/trains')->with('success', 'Data is successfully deleted');
    }
}
