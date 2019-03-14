<?php

namespace App\Http\Controllers;

use App\business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = Business::all();
        return view('it_business/list')->with('businesses',$business);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('it_business/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_business = new Business;
        $new_business->team_name = $request->team_name;
        $new_business->institution = $request->institution;
        $new_business->total = $request->total;
        $new_business->paid = 0;
        $new_business->selected = 'False';


        $new_business->member_1_name =    $request->member_1_name;
        $new_business->member_1_contact = $request->member_1_contact;
        $new_business->member_1_email =   $request->member_1_email;
        $new_business->member_1_tshirt =  $request->member_1_tshirt;
        $new_business->member_1_std_id = $request->member_1_std_id;

        $new_business->member_2_name =    $request->member_2_name;
        $new_business->member_2_contact = $request->member_2_contact;
        $new_business->member_2_email =   $request->member_2_email;
        $new_business->member_2_tshirt =  $request->member_2_tshirt;
        $new_business->member_2_std_id = $request->member_2_std_id;

        $new_business->member_3_name =    $request->member_3_name;
        $new_business->member_3_contact = $request->member_3_contact;
        $new_business->member_3_email =   $request->member_3_email;
        $new_business->member_3_tshirt =  $request->member_3_tshirt;
        $new_business->member_3_std_id = $request->member_3_std_id;
        
        
        
        $new_business->save();
        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $business = Business::all();
        return redirect()->route('business_list')->with('businesses',$business);
    }



    public function store_front(Request $request)
    {
        $new_business = new Business;
        $new_business->team_name = $request->team_name;
        $new_business->institution = $request->institution;
        $new_business->total = $request->total;
        $new_business->paid = 0;
        $new_business->selected = 'False';


        $new_business->member_1_name =    $request->member_1_name;
        $new_business->member_1_contact = $request->member_1_contact;
        $new_business->member_1_email =   $request->member_1_email;
        $new_business->member_1_tshirt =  $request->member_1_tshirt;
        $new_business->member_1_std_id = $request->member_1_std_id;

        $new_business->member_2_name =    $request->member_2_name;
        $new_business->member_2_contact = $request->member_2_contact;
        $new_business->member_2_email =   $request->member_2_email;
        $new_business->member_2_tshirt =  $request->member_2_tshirt;
        $new_business->member_2_std_id = $request->member_2_std_id;

        $new_business->member_3_name =    $request->member_3_name;
        $new_business->member_3_contact = $request->member_3_contact;
        $new_business->member_3_email =   $request->member_3_email;
        $new_business->member_3_tshirt =  $request->member_3_tshirt;
        $new_business->member_3_std_id = $request->member_3_std_id;
        
        
        
        $new_business->save();
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
        $business = Business::find($id);
        $business->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $bb=Business::all();
        return redirect()->route('business_list')->with('businesses',$bb);
    }


    public function selection($id)
    {
        Business::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $mm=Business::all();
        return redirect()->route('business_list')->with('businesses',$mm);
    }

    public function payment($id)
    {
        Business::find($id)->update(['paid' => Business::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $mm=Business::all();
        return redirect()->route('business_list')->with('businesses',$mm);
    }


    public function show(business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(business $business)
    {
        //
    }
}
