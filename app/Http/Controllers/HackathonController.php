<?php

namespace App\Http\Controllers;

use App\Hackathon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class HackathonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hackathon = Hackathon::all();
        return view('hackathon/list')->with('hackathons',$hackathon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hackathon/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hackathon = new Hackathon;
        $hackathon->team_name = $request->team_name;
        $hackathon->category = $request->category;
        $hackathon->institution = $request->institution;
        $hackathon->contact = $request->contact;
        $hackathon->email = $request->email;
        $hackathon->total = 3000;
        $hackathon->paid = 0;
        $hackathon->selected = 'False';


        $hackathon->member_1_name =    $request->member_1_name;
        $hackathon->member_1_tshirt =  $request->member_1_tshirt;

        $hackathon->member_2_name =    $request->member_2_name;
        $hackathon->member_2_tshirt =  $request->member_2_tshirt;

        $hackathon->member_3_name =    $request->member_3_name;
        $hackathon->member_3_tshirt =  $request->member_3_tshirt;

        $hackathon->member_4_name =    $request->member_4_name;
        $hackathon->member_4_tshirt =  $request->member_4_tshirt;

        
        
        
        $hackathon->save();

        $key = Crypt::encryptString('HACKATHON-'.$hackathon->id);

        Mail::to($hackathon->email)->send(new RegisterMail($hackathon->team_name,'Hackathon',$key));
        

        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $hackathon2 = Hackathon::all();
        return redirect()->route('hackathon_list')->with('hackathons',$hackathon2);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */

    public function store_front(Request $request)
    {
        $hackathon = new Hackathon;
        $hackathon->team_name = $request->team_name;
        $hackathon->category = $request->category;
        $hackathon->institution = $request->institution;
        $hackathon->contact = $request->contact;
        $hackathon->email = $request->email;
        $hackathon->total = 3000;
        $hackathon->paid = 0;
        $hackathon->selected = 'False';


        $hackathon->member_1_name =    $request->member_1_name;
        $hackathon->member_1_tshirt =  $request->member_1_tshirt;

        $hackathon->member_2_name =    $request->member_2_name;
        $hackathon->member_2_tshirt =  $request->member_2_tshirt;

        $hackathon->member_3_name =    $request->member_3_name;
        $hackathon->member_3_tshirt =  $request->member_3_tshirt;

        $hackathon->member_4_name =    $request->member_4_name;
        $hackathon->member_4_tshirt =  $request->member_4_tshirt;

        
        
        
        $hackathon->save();

        $key = Crypt::encryptString('HACKATHON-'.$hackathon->id);

        Mail::to($hackathon->email)->send(new RegisterMail($hackathon->team_name,'Hackathon',$key));
        
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }



    public function delete($id)
    {
        $hackathon = Hackathon::find($id);
        $hackathon->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $hackathon2=Hackathon::all();
        return redirect()->route('hackathon_list')->with('hackathons',$hackathon2);
    }

    public function selection($id)
    {
        Hackathon::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $hackathon2=Hackathon::all();
        return redirect()->route('hackathon_list')->with('hackathons',$hackathon2);
    }

    public function payment($id)
    {
        Hackathon::find($id)->update(['paid' => Hackathon::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $hackathon2=Hackathon::all();
        return redirect()->route('hackathon_list')->with('hackathons',$hackathon2);
    }

    public function show(Hackathon $hackathon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function edit(Hackathon $hackathon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hackathon $hackathon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hackathon  $hackathon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hackathon $hackathon)
    {
        //
    }
}
