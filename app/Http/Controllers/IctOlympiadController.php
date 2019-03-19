<?php

namespace App\Http\Controllers;

use App\IctOlympiad;
use Illuminate\Http\Request;
use Mail;
use App\Mail\RegisterMail;

class IctOlympiadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $io = IctOlympiad::all();
        return view('ict_olympiad/list')->with('ios',$io);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ict_olympiad/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_io = new IctOlympiad;
        $new_io->name = $request->name;
        $new_io->category = $request->category;
        $new_io->contact = $request->contact;
        $new_io->email = $request->email;
        $new_io->institution = $request->institution;
        $new_io->total = $request->total;
        $new_io->paid = 0;
        $new_io->selected = 'False';
        $new_io->tshirt = $request->tshirt;
        $new_io->save();
        alert()->success('Participant has been admitted successfully.')->autoclose(3000);
        Mail::to($new_io->email)->send(new RegisterMail($new_mo->name,'ICT Olympiad'));
       
        $io = IctOlympiad::all();
        return redirect()->route('io_list')->with('ios',$io);
    }

    public function store_front(Request $request)
    {
        $new_io = new IctOlympiad;
        $new_io->name = $request->name;
        $new_io->category = $request->category;
        $new_io->contact = $request->contact;
        $new_io->email = $request->email;
        $new_io->institution = $request->institution;
        $new_io->total = $request->total;
        $new_io->paid = 0;
        $new_io->selected = 'False';
        $new_io->tshirt = $request->tshirt;
        $new_io->save();
        alert()->success('Dear '.$request->name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);

        Mail::to($new_io->email)->send(new RegisterMail($new_mo->name,'ICT Olympiad'));
        return redirect()->route('front');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IctOlympiad  $ictOlympiad
     * @return \Illuminate\Http\Response
     */
    public function show(IctOlympiad $ictOlympiad)
    {
        //
    }

    public function delete($id)
    {
        $io = IctOlympiad::find($id);
        $io->delete();
        alert()->warning('Student has been discarded successfully', 'Deleted')->autoclose(3000);
        $ii=IctOlympiad::all();
        return redirect()->route('io_list')->with('ios',$ii);
    }

    public function selection($id)
    {
        IctOlympiad::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Student has been selected successfully', 'Done')->autoclose(3000);
        $mm=IctOlympiad::all();
        return redirect()->route('io_list')->with('ios',$mm);
    }

    public function payment($id)
    {
        IctOlympiad::find($id)->update(['paid' => IctOlympiad::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $mm=IctOlympiad::all();
        return redirect()->route('io_list')->with('ios',$mm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IctOlympiad  $ictOlympiad
     * @return \Illuminate\Http\Response
     */
    public function edit(IctOlympiad $ictOlympiad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IctOlympiad  $ictOlympiad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IctOlympiad $ictOlympiad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IctOlympiad  $ictOlympiad
     * @return \Illuminate\Http\Response
     */
    public function destroy(IctOlympiad $ictOlympiad)
    {
        //
    }
}
