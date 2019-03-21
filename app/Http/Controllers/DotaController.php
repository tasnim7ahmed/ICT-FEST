<?php

namespace App\Http\Controllers;

use App\Dota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class DotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dota = Dota::all();
        return view('dota/list')->with('dotas',$dota);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dota/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dota = new Dota;
        $dota->team_name = $request->team_name;
        $dota->contact = $request->contact;
        $dota->email = $request->email;
        $dota->total = 2000;
        $dota->paid = 0;
        $dota->selected = 'False';


        $dota->member_1_name =    $request->member_1_name;
        $dota->member_1_ign = $request->member_1_ign;
        $dota->member_1_tshirt =  $request->member_1_tshirt;

        $dota->member_2_name =    $request->member_2_name;
        $dota->member_2_ign = $request->member_2_ign;
        $dota->member_2_tshirt =  $request->member_2_tshirt;

        $dota->member_3_name =    $request->member_3_name;
        $dota->member_3_ign = $request->member_3_ign;
        $dota->member_3_tshirt =  $request->member_3_tshirt;

        $dota->member_4_name =    $request->member_4_name;
        $dota->member_4_ign = $request->member_4_ign;
        $dota->member_4_tshirt =  $request->member_4_tshirt;

        $dota->member_5_name =    $request->member_5_name;
        $dota->member_5_ign = $request->member_5_ign;
        $dota->member_5_tshirt =  $request->member_5_tshirt;

        $dota->member_6_name =    $request->member_6_name;
        $dota->member_6_ign = $request->member_6_ign;
        $dota->member_6_tshirt =  $request->member_6_tshirt;
        
        
        
        $dota->save();

        $key = Crypt::encryptString('DOTA-'.$dota->id);

        Mail::to($dota->email)->send(new RegisterMail($dota->team_name,'DOTA 2',$key));

        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $dota2 = Dota::all();
        return redirect()->route('dota_list')->with('dotas',$dota2);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */


    public function store_front(Request $request)
    {
        $dota = new Dota;
        $dota->team_name = $request->team_name;
        $dota->contact = $request->contact;
        $dota->email = $request->email;
        $dota->total = 2000;
        $dota->paid = 0;
        $dota->selected = 'False';


        $dota->member_1_name =    $request->member_1_name;
        $dota->member_1_ign = $request->member_1_ign;
        $dota->member_1_tshirt =  $request->member_1_tshirt;

        $dota->member_2_name =    $request->member_2_name;
        $dota->member_2_ign = $request->member_2_ign;
        $dota->member_2_tshirt =  $request->member_2_tshirt;

        $dota->member_3_name =    $request->member_3_name;
        $dota->member_3_ign = $request->member_3_ign;
        $dota->member_3_tshirt =  $request->member_3_tshirt;

        $dota->member_4_name =    $request->member_4_name;
        $dota->member_4_ign = $request->member_4_ign;
        $dota->member_4_tshirt =  $request->member_4_tshirt;

        $dota->member_5_name =    $request->member_5_name;
        $dota->member_5_ign = $request->member_5_ign;
        $dota->member_5_tshirt =  $request->member_5_tshirt;

        $dota->member_6_name =    $request->member_6_name;
        $dota->member_6_ign = $request->member_6_ign;
        $dota->member_6_tshirt =  $request->member_6_tshirt;
        
        
        
        $dota->save();

        $key = Crypt::encryptString('DOTA-'.$dota->id);

        Mail::to($dota->email)->send(new RegisterMail($dota->team_name,'DOTA 2',$key));


        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }



    public function delete($id)
    {
        $dota = Dota::find($id);
        $dota->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $dota2=Dota::all();
        return redirect()->route('dota_list')->with('dotas',$dota2);
    }

    public function selection($id)
    {
        Dota::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $dota2=Dota::all();
        return redirect()->route('dota_list')->with('dotas',$dota2);
    }

    public function payment($id)
    {
        Dota::find($id)->update(['paid' => Dota::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $dota2=Dota::all();
        return redirect()->route('dota_list')->with('dotas',$dota2);
    }

    public function show(Dota $dota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function edit(Dota $dota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dota $dota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dota $dota)
    {
        //
    }
}
