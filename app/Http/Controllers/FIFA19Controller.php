<?php

namespace App\Http\Controllers;

use App\FIFA19;
use Illuminate\Http\Request;

class FIFA19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fifa = FIFA19::all();
        return view('fifa19/list')->with('fifas',$fifa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fifa19/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_fifa = new FIFA19;
        $new_fifa->name = $request->name;
        $new_fifa->contact = $request->contact;
        $new_fifa->email = $request->email;
        $new_fifa->device = $request->device;
        $new_fifa->total = $request->total;
        $new_fifa->paid = 0;
        $new_fifa->selected = 'False';
        $new_fifa->tshirt = $request->tshirt;
        $new_fifa->save();
        alert()->success('Participant has been admitted successfully.')->autoclose(3000);
       
        $fifa = FIFA19::all();
        return redirect()->route('fifa_list')->with('fifas',$fifa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FIFA19  $new_fifa19
     * @return \Illuminate\Http\Response
     */


    public function store_front(Request $request)
    {
        $new_fifa = new FIFA19;
        $new_fifa->name = $request->name;
        $new_fifa->contact = $request->contact;
        $new_fifa->email = $request->email;
        $new_fifa->device = $request->device;
        $new_fifa->total = $request->total;
        $new_fifa->paid = 0;
        $new_fifa->selected = 'False';
        $new_fifa->tshirt = $request->tshirt;
        $new_fifa->save();
        alert()->success('Dear '.$request->name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }


    public function delete($id)
    {
        $fifa = FIFA19::find($id);
        $fifa->delete();
        alert()->warning('Participant has been discarded successfully', 'Deleted')->autoclose(3000);
        $fifa19=FIFA19::all();
        return redirect()->route('fifa_list')->with('fifas',$fifa19);
    }

    public function selection($id)
    {
        FIFA19::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Participant has been selected successfully', 'Done')->autoclose(3000);
        $fifa19=FIFA19::all();
        return redirect()->route('fifa_list')->with('fifas',$fifa19);
    }

    public function payment($id)
    {
        FIFA19::find($id)->update(['paid' => FIFA19::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $fifa19=FIFA19::all();
        return redirect()->route('fifa_list')->with('fifas',$fifa19);
    }

    public function show(FIFA19 $new_fifa19)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FIFA19  $new_fifa19
     * @return \Illuminate\Http\Response
     */
    public function edit(FIFA19 $new_fifa19)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FIFA19  $new_fifa19
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FIFA19 $new_fifa19)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FIFA19  $new_fifa19
     * @return \Illuminate\Http\Response
     */
    public function destroy(FIFA19 $new_fifa19)
    {
        //
    }
}
