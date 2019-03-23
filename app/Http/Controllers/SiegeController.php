<?php

namespace App\Http\Controllers;

use App\Siege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class SiegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siege = Siege::all();
        return view('siege/list')->with('sieges',$siege);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siege/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siege = new Siege;
        $siege->team_name = $request->team_name;
        $siege->contact = $request->contact;
        $siege->email = $request->email;
        $siege->total = 1500;
        $siege->paid = 0;
        $siege->selected = 'False';


        $siege->member_1_name =    $request->member_1_name;
        $siege->member_1_ign = $request->member_1_ign;
        $siege->member_1_tshirt =  $request->member_1_tshirt;

        $siege->member_2_name =    $request->member_2_name;
        $siege->member_2_ign = $request->member_2_ign;
        $siege->member_2_tshirt =  $request->member_2_tshirt;

        $siege->member_3_name =    $request->member_3_name;
        $siege->member_3_ign = $request->member_3_ign;
        $siege->member_3_tshirt =  $request->member_3_tshirt;

        $siege->member_4_name =    $request->member_4_name;
        $siege->member_4_ign = $request->member_4_ign;
        $siege->member_4_tshirt =  $request->member_4_tshirt;

        $siege->member_5_name =    $request->member_5_name;
        $siege->member_5_ign = $request->member_5_ign;
        $siege->member_5_tshirt =  $request->member_5_tshirt;

        $siege->member_6_name =    $request->member_6_name;
        $siege->member_6_ign = $request->member_6_ign;
        $siege->member_6_tshirt =  $request->member_6_tshirt;
        
        
        
        $siege->save();

        $key = Crypt::encryptString('SIEGE-'.$siege->id);

        Mail::to($siege->email)->send(new RegisterMail($siege->team_name,'Rainbow Six Siege',$key));

        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $siege = Siege::all();
        return redirect()->route('siege_list')->with('sieges',$siege);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siege  $siege
     * @return \Illuminate\Http\Response
     */


    public function store_front(Request $request)
    {
        $siege = new Siege;
        $siege->team_name = $request->team_name;
        $siege->contact = $request->contact;
        $siege->email = $request->email;
        $siege->total = 1500;
        $siege->paid = 0;
        $siege->selected = 'False';


        $siege->member_1_name =    $request->member_1_name;
        $siege->member_1_ign = $request->member_1_ign;
        $siege->member_1_tshirt =  $request->member_1_tshirt;

        $siege->member_2_name =    $request->member_2_name;
        $siege->member_2_ign = $request->member_2_ign;
        $siege->member_2_tshirt =  $request->member_2_tshirt;

        $siege->member_3_name =    $request->member_3_name;
        $siege->member_3_ign = $request->member_3_ign;
        $siege->member_3_tshirt =  $request->member_3_tshirt;

        $siege->member_4_name =    $request->member_4_name;
        $siege->member_4_ign = $request->member_4_ign;
        $siege->member_4_tshirt =  $request->member_4_tshirt;

        $siege->member_5_name =    $request->member_5_name;
        $siege->member_5_ign = $request->member_5_ign;
        $siege->member_5_tshirt =  $request->member_5_tshirt;

        $siege->member_6_name =    $request->member_6_name;
        $siege->member_6_ign = $request->member_6_ign;
        $siege->member_6_tshirt =  $request->member_6_tshirt;
        
        
        
        $siege->save();

        $key = Crypt::encryptString('SIEGE-'.$siege->id);

        Mail::to($siege->email)->send(new RegisterMail($siege->team_name,'Rainbow Six Siege',$key));
        
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }



    public function delete($id)
    {
        $siege = Siege::find($id);
        $siege->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $r6siege=Siege::all();
        return redirect()->route('siege_list')->with('sieges',$r6siege);
    }

    public function selection($id)
    {
        Siege::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $r6siege=Siege::all();
        return redirect()->route('siege_list')->with('sieges',$r6siege);
    }

    public function payment($id)
    {
        Siege::find($id)->update(['paid' => Siege::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $r6siege=Siege::all();
        return redirect()->route('siege_list')->with('sieges',$r6siege);
    }

    public function show(Siege $siege)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siege  $siege
     * @return \Illuminate\Http\Response
     */
    public function edit(Siege $siege)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siege  $siege
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siege $siege)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siege  $siege
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siege $siege)
    {
        //
    }
}
