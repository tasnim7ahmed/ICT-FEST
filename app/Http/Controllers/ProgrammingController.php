<?php

namespace App\Http\Controllers;

use App\Programming;
use Illuminate\Http\Request;

class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pc = Programming::all();
        return view('programming_contest/list')->with('pcs',$pc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programming_contest/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pc = new Programming;
        $new_pc->team_name = $request->team_name;
        $new_pc->institution = $request->institution;
        $new_pc->total = $request->total;
        $new_pc->paid = 0;
        $new_pc->selected = 'False';

        $new_pc->coach_name =    $request->coach_name;
        $new_pc->coach_contact = $request->coach_contact;
        $new_pc->coach_email =   $request->coach_email;
        $new_pc->coach_tshirt =  $request->coach_tshirt;


        $new_pc->member_1_name =    $request->member_1_name;
        $new_pc->member_1_contact = $request->member_1_contact;
        $new_pc->member_1_email =   $request->member_1_email;
        $new_pc->member_1_tshirt =  $request->member_1_tshirt;

        $new_pc->member_2_name =    $request->member_2_name;
        $new_pc->member_2_contact = $request->member_2_contact;
        $new_pc->member_2_email =   $request->member_2_email;
        $new_pc->member_2_tshirt =  $request->member_2_tshirt;

        $new_pc->member_3_name =    $request->member_3_name;
        $new_pc->member_3_contact = $request->member_3_contact;
        $new_pc->member_3_email =   $request->member_3_email;
        $new_pc->member_3_tshirt =  $request->member_3_tshirt;
        
        
        
        $new_pc->save();
        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $pc = Programming::all();
        return view('programming_contest/list')->with('pcs',$pc);
    }


    public function store_front(Request $request)
    {
        $new_pc = new Programming;
        $new_pc->team_name = $request->team_name;
        $new_pc->institution = $request->institution;
        $new_pc->total = $request->total;
        $new_pc->paid = 0;
        $new_pc->selected = 'False';

        $new_pc->coach_name =    $request->coach_name;
        $new_pc->coach_contact = $request->coach_contact;
        $new_pc->coach_email =   $request->coach_email;
        $new_pc->coach_tshirt =  $request->coach_tshirt;


        $new_pc->member_1_name =    $request->member_1_name;
        $new_pc->member_1_contact = $request->member_1_contact;
        $new_pc->member_1_email =   $request->member_1_email;
        $new_pc->member_1_tshirt =  $request->member_1_tshirt;

        $new_pc->member_2_name =    $request->member_2_name;
        $new_pc->member_2_contact = $request->member_2_contact;
        $new_pc->member_2_email =   $request->member_2_email;
        $new_pc->member_2_tshirt =  $request->member_2_tshirt;

        $new_pc->member_3_name =    $request->member_3_name;
        $new_pc->member_3_contact = $request->member_3_contact;
        $new_pc->member_3_email =   $request->member_3_email;
        $new_pc->member_3_tshirt =  $request->member_3_tshirt;
        
        $new_pc->save();
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }

    public function delete($id)
    {
        $pc = Programming::find($id);
        $pc->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $pp=Programming::all();
        return view('programming_contest/list')->with('pcs',$pp);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function show(Programming $programming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function edit(Programming $programming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programming $programming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programming $programming)
    {
        //
    }
}
