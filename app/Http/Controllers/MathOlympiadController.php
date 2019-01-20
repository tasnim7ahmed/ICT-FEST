<?php

namespace App\Http\Controllers;

use App\MathOlympiad;
use Illuminate\Http\Request;

class MathOlympiadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $mo = MathOlympiad::all();
        return view('math_olympiad/list')->with('mos',$mo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('math_olympiad/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_mo = new MathOlympiad;
        $new_mo->name = $request->name;
        $new_mo->category = $request->category;
        $new_mo->contact = $request->contact;
        $new_mo->email = $request->email;
        $new_mo->institution = $request->institution;
        $new_mo->total = $request->total;
        $new_mo->paid = $request->paid;
        $new_mo->save();
        alert()->success('Participant has been admitted successfully.')->autoclose(3000);
       
        $mo = MathOlympiad::all();
        return view('math_olympiad/list')->with('mos',$mo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MathOlympiad  $mathOlympiad
     * @return \Illuminate\Http\Response
     */
    public function show(MathOlympiad $mathOlympiad)
    {
        //
    }

    public function delete($id)
    {
        $mo = MathOlympiad::find($id);
        $mo->delete();
        alert()->warning('Student has been discarded successfully', 'Deleted')->autoclose(3000);
        $mm=MathOlympiad::all();
        return view('math_olympiad/list')->with('mos',$mm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MathOlympiad  $mathOlympiad
     * @return \Illuminate\Http\Response
     */
    public function edit(MathOlympiad $mathOlympiad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MathOlympiad  $mathOlympiad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MathOlympiad $mathOlympiad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MathOlympiad  $mathOlympiad
     * @return \Illuminate\Http\Response
     */
    public function destroy(MathOlympiad $mathOlympiad)
    {
        //
    }
}
