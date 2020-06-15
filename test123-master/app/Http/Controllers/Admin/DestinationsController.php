<?php

namespace App\Http\Controllers;
use App\Destination;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Destination::latest()->paginate(5);
        return view('admin.destinations.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.create');
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
            'from'    =>  'required',
            'to'     =>  'required'
        ]);

        $form_data = array(
            'from'       =>   $request->from,
            'to'        =>   $request->to
        );

        Destination::create($form_data);

        return redirect('admin/destinations')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Destination::findOrFail($id);
        return view('admin.destinations.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('data'));
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
            'from'    =>  'required',
            'to'     =>  'required'
        ]);

        $form_data = array(
            'from'       =>   $request->from,
            'to'        =>   $request->to
        );

        Destination::whereId($id)->update($form_data);

        return redirect('admin/destinations')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Destination::findOrFail($id);
        $data->delete();

        return redirect('admin/destinations')->with('success', 'Data is successfully deleted');
    }
}
