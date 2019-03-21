<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poster = Poster::all();
        return view('poster/list')->with('posters',$poster);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poster/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_poster = new Poster;
        $new_poster->team_name = $request->team_name;
        $new_poster->category = $request->category;
        $new_poster->institution = $request->institution;
        $new_poster->total = 1200;
        $new_poster->paid = 0;
        $new_poster->selected = 'False';
        $new_poster->submission = 'False';


        $new_poster->member_1_name =    $request->member_1_name;
        $new_poster->member_1_contact = $request->member_1_contact;
        $new_poster->member_1_email =   $request->member_1_email;
        $new_poster->member_1_tshirt =  $request->member_1_tshirt;

        $new_poster->member_2_name =    $request->member_2_name;
        $new_poster->member_2_contact = $request->member_2_contact;
        $new_poster->member_2_email =   $request->member_2_email;
        $new_poster->member_2_tshirt =  $request->member_2_tshirt;

        $new_poster->member_3_name =    $request->member_3_name;
        $new_poster->member_3_contact = $request->member_3_contact;
        $new_poster->member_3_email =   $request->member_3_email;
        $new_poster->member_3_tshirt =  $request->member_3_tshirt;

        $new_poster->coach_name = $request->coach_name;
        $new_poster->coach_contact = $request->coach_contact;
        $new_poster->coach_email =   $request->coach_email;
        $new_poster->coach_tshirt =  $request->coach_tshirt;

        $new_poster->pdf = $request->file('pdf')->store('poster');

        // $new_poster->file('pdf')->storeAs('poster');

        // $new_poster->update(['submission'=>'True']);
        

       
        // $new_poster->update(['pdf' => $request->file('pdf')->store('poster')]);
        

       if($request->file('pdf')==null){
           $new_poster->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
           $new_poster->submission = 'True';
        }

        $new_poster->save();
        alert()->success('Team has been added successfully.')->autoclose(3000);
        $key = Crypt::encryptString('POSTER-'.$new_poster->id);
        
        Mail::to($new_poster->member_1_email)->send(new RegisterMail($new_poster->member_1_name,'Poster Presentation',$key));
        Mail::to($new_poster->member_2_email)->send(new RegisterMail($new_poster->member_2_name,'Poster Presentation',$key));

        if ($new_poster->member_3_email!=null) {
            Mail::to($new_poster->member_3_email)->send(new RegisterMail($new_poster->member_3_name,'Poster Presentation',$key));
        }
        if ($new_poster->coach_email!=null) {
            Mail::to($new_poster->coach_email)->send(new RegisterMail($new_poster->coach_name,'Poster Presentation',$key));
        }

        
        
       
        $poster = Poster::all();
        return redirect()->route('poster_list')->with('posters',$poster);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */


    public function store_front(Request $request)
    {
       $new_poster = new Poster;
        $new_poster->team_name = $request->team_name;
        $new_poster->category = $request->category;
        $new_poster->institution = $request->institution;
        $new_poster->total = 1200;
        $new_poster->paid = 0;
        $new_poster->selected = 'False';
        $new_poster->submission = 'False';

        $new_poster->member_1_name =    $request->member_1_name;
        $new_poster->member_1_contact = $request->member_1_contact;
        $new_poster->member_1_email =   $request->member_1_email;
        $new_poster->member_1_tshirt =  $request->member_1_tshirt;

        $new_poster->member_2_name =    $request->member_2_name;
        $new_poster->member_2_contact = $request->member_2_contact;
        $new_poster->member_2_email =   $request->member_2_email;
        $new_poster->member_2_tshirt =  $request->member_2_tshirt;

        $new_poster->member_3_name =    $request->member_3_name;
        $new_poster->member_3_contact = $request->member_3_contact;
        $new_poster->member_3_email =   $request->member_3_email;
        $new_poster->member_3_tshirt =  $request->member_3_tshirt;

        $new_poster->coach_name = $request->coach_name;
        $new_poster->coach_contact = $request->coach_contact;
        $new_poster->coach_email =   $request->coach_email;
        $new_poster->coach_tshirt =  $request->coach_tshirt;

        $new_poster->pdf = $request->file('pdf')->store('poster');

        // $new_poster->file('pdf')->storeAs('poster');

        // $new_poster->update(['submission'=>'True']);

        
        // $new_poster->update(['pdf' => $request->file('pdf')->store('poster')]);
        

        if($request->file('pdf')==null){
            $new_poster->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
            
            $new_poster->submission = 'True';
        }

        $new_poster->save();
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);

        $key = Crypt::encryptString('POSTER-'.$new_poster->id);
        
        Mail::to($new_poster->member_1_email)->send(new RegisterMail($new_poster->member_1_name,'Poster Presentation',$key));
        Mail::to($new_poster->member_2_email)->send(new RegisterMail($new_poster->member_2_name,'Poster Presentation',$key));

        if ($new_poster->member_3_email!=null) {
            Mail::to($new_poster->member_3_email)->send(new RegisterMail($new_poster->member_3_name,'Poster Presentation',$key));
        }
        if ($new_poster->coach_email!=null) {
            Mail::to($new_poster->coach_email)->send(new RegisterMail($new_poster->coach_name,'Poster Presentation',$key));
        }
        return redirect()->route('front');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
        $poster = Poster::find($id);
        $poster->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $pp=Poster::all();
        return redirect()->route('poster_list')->with('posters',$pp);
    }


    public function selection($id)
    {
        Poster::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $pp=Poster::all();
        return redirect()->route('poster_list')->with('posters',$pp);
    }

    public function payment($id)
    {
        Poster::find($id)->update(['paid' => Poster::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $pp=Poster::all();
        return redirect()->route('poster_list')->with('posters',$pp);
    }

    public function upload(Request $request)
    {
        $flag = 0;
        $biz = Poster::find($request->id);
        if ($request->has('pdf')) {
            $biz->update(['pdf' => $request->file('pdf')->store('poster')]);
        $flag = 1;
        $biz->update(['submission'=>'True']);
        }
        
        if ($flag==1) {
            alert()->warning('File Uploaded successfully', 'Done')->autoclose(3000);
        }
        
        $pp=Poster::all();
        return redirect()->route('selected_poster')->with('posters',$pp);
    }

    public function download($id)
    {
        $biz = Poster::find($id);
        //$file = Storage::disk('local')->get($biz->pdf);
        return Storage::download($biz->pdf);
    }

    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        //
    }
}
