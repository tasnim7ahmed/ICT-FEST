<?php

namespace App\Http\Controllers;

use App\MathOlympiad;
use Illuminate\Http\Request;
use Mail;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Crypt;

class MathOlympiadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
        $new_mo->total = 400;
        $new_mo->paid = 0;
        $new_mo->selected = 'False';
        $new_mo->tshirt = $request->tshirt;
        $new_mo->save();
        $key = Crypt::encryptString('MO-'.$new_mo->id);
        alert()->success('Participant has been admitted successfully.')->autoclose(3000);

        Mail::to($new_mo->email)->send(new RegisterMail($new_mo->name,'Math Olympiad',$key));
       
        $mo = MathOlympiad::all();
        return redirect()->route('mo_list')->with('mos',$mo);
    }

    public function store_front(Request $request)
    {
        $new_mo = new MathOlympiad;
        $new_mo->name = $request->name;
        $new_mo->category = $request->category;
        $new_mo->contact = $request->contact;
        $new_mo->email = $request->email;
        $new_mo->institution = $request->institution;
        $new_mo->total = 400;
        $new_mo->paid = 0;
        $new_mo->selected = 'False';
        $new_mo->tshirt = $request->tshirt;
        $new_mo->save();
        $key = Crypt::encryptString('MO-'.$new_mo->id);

        alert()->success('Dear '.$request->name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);


        Mail::to($new_mo->email)->send(new RegisterMail($new_mo->name,'Math Olympiad',$key));


        return redirect()->route('front');
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
        return redirect()->route('mo_list')->with('mos',$mm);
    }

    public function selection($id)
    {
        MathOlympiad::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Student has been selected successfully', 'Done')->autoclose(3000);
        $mm=MathOlympiad::all();
        return redirect()->route('mo_list')->with('mos',$mm);
    }

    public function payment($id)
    {
        MathOlympiad::find($id)->update(['paid' => MathOlympiad::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $mm=MathOlympiad::all();
        return redirect()->route('mo_list')->with('mos',$mm);
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
