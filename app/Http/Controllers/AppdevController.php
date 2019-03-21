<?php

namespace App\Http\Controllers;

use App\Appdev;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class AppdevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appdev = Appdev::all();
        return view('appdev/list')->with('appdevs',$appdev);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appdev/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_appdev = new Appdev;
        $new_appdev->team_name = $request->team_name;
        
        $new_appdev->total = 2000;
        $new_appdev->paid = 0;
        $new_appdev->selected = 'False';
        $new_appdev->submission = 'False';


        $new_appdev->member_1_name =    $request->member_1_name;
        $new_appdev->member_1_institution = $request->member_1_institution;
        $new_appdev->member_1_std_id = $request->member_1_std_id;
        $new_appdev->member_1_contact = $request->member_1_contact;
        $new_appdev->member_1_email =   $request->member_1_email;
        $new_appdev->member_1_tshirt =  $request->member_1_tshirt;

        $new_appdev->member_2_name =    $request->member_2_name;
        $new_appdev->member_2_institution = $request->member_2_institution;
        $new_appdev->member_2_std_id = $request->member_2_std_id;
        $new_appdev->member_2_contact = $request->member_2_contact;
        $new_appdev->member_2_email =   $request->member_2_email;
        $new_appdev->member_2_tshirt =  $request->member_2_tshirt;

        $new_appdev->member_3_name =    $request->member_3_name;
        $new_appdev->member_3_institution = $request->member_3_institution;
        $new_appdev->member_3_std_id = $request->member_3_std_id;
        $new_appdev->member_3_tshirt =  $request->member_3_tshirt;

        $new_appdev->member_4_name =    $request->member_4_name;
        $new_appdev->member_4_institution = $request->member_4_institution;
        $new_appdev->member_4_std_id = $request->member_4_std_id;
        $new_appdev->member_4_tshirt =  $request->member_4_tshirt;


        $new_appdev->pdf = $request->file('pdf')->store('appdev');
        

       if($request->file('pdf')==null){
           $new_appdev->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
           $new_appdev->submission = 'True';
        }

        $new_appdev->save();

        $key = Crypt::encryptString('APPDEV-'.$new_appdev->id);

        Mail::to($new_appdev->member_1_email)->send(new RegisterMail($new_appdev->member_1_name,'Application Development',$key));
        Mail::to($new_appdev->member_2_email)->send(new RegisterMail($new_appdev->member_2_name,'Application Development',$key));

        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $appdev = Appdev::all();
        return redirect()->route('appdev_list')->with('appdevs',$appdev);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appdev  $appdev
     * @return \Illuminate\Http\Response
     */



    public function store_front(Request $request)
    {
       $new_appdev = new Appdev;
        $new_appdev->team_name = $request->team_name;
        
        $new_appdev->total = 2000;
        $new_appdev->paid = 0;
        $new_appdev->selected = 'False';
        $new_appdev->submission = 'False';


        $new_appdev->member_1_name =    $request->member_1_name;
        $new_appdev->member_1_institution = $request->member_1_institution;
        $new_appdev->member_1_std_id = $request->member_1_std_id;
        $new_appdev->member_1_contact = $request->member_1_contact;
        $new_appdev->member_1_email =   $request->member_1_email;
        $new_appdev->member_1_tshirt =  $request->member_1_tshirt;

        $new_appdev->member_2_name =    $request->member_2_name;
        $new_appdev->member_2_institution = $request->member_2_institution;
        $new_appdev->member_2_std_id = $request->member_2_std_id;
        $new_appdev->member_2_contact = $request->member_2_contact;
        $new_appdev->member_2_email =   $request->member_2_email;
        $new_appdev->member_2_tshirt =  $request->member_2_tshirt;

        $new_appdev->member_3_name =    $request->member_3_name;
        $new_appdev->member_3_institution = $request->member_3_institution;
        $new_appdev->member_3_std_id = $request->member_3_std_id;
        $new_appdev->member_3_tshirt =  $request->member_3_tshirt;

        $new_appdev->member_4_name =    $request->member_4_name;
        $new_appdev->member_4_institution = $request->member_4_institution;
        $new_appdev->member_4_std_id = $request->member_4_std_id;
        $new_appdev->member_4_tshirt =  $request->member_4_tshirt;


        $new_appdev->pdf = $request->file('pdf')->store('appdev');
        

       if($request->file('pdf')==null){
           $new_appdev->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
           $new_appdev->submission = 'True';
        }

        $new_appdev->save();

        $key = Crypt::encryptString('APPDEV-'.$new_appdev->id);

        Mail::to($new_appdev->member_1_email)->send(new RegisterMail($new_appdev->member_1_name,'Application Development',$key));
        Mail::to($new_appdev->member_2_email)->send(new RegisterMail($new_appdev->member_2_name,'Application Development',$key));

        
        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appdev  $appdev
     * @return \Illuminate\Http\Response
     */


    public function delete($id)
    {
        $appdev = Appdev::find($id);
        $appdev->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $pp=Appdev::all();
        return redirect()->route('appdev_list')->with('appdevs',$pp);
    }


    public function selection($id)
    {
        Appdev::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $pp=Appdev::all();
        return redirect()->route('appdev_list')->with('appdevs',$pp);
    }

    public function payment($id)
    {
        Appdev::find($id)->update(['paid' => Appdev::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $pp=Appdev::all();
        return redirect()->route('appdev_list')->with('appdevs',$pp);
    }

    // public function upload(Request $request)
    // {
    //     $flag = 0;
    //     $biz = Appdev::find($request->id);
    //     if ($request->has('pdf')) {
    //         $biz->update(['pdf' => $request->file('pdf')->store('Appdev')]);
    //     $flag = 1;
    //     $biz->update(['submission'=>'True']);
    //     }
        
    //     if ($flag==1) {
    //         alert()->warning('File Uploaded successfully', 'Done')->autoclose(3000);
    //     }
        
    //     $pp=Appdev::all();
    //     return redirect()->route('selected_Appdev')->with('Appdevs',$pp);
    // }

    public function download($id)
    {
        $biz = Appdev::find($id);
        //$file = Storage::disk('local')->get($biz->pdf);
        return Storage::download($biz->pdf);
    }

    public function show(Appdev $appdev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appdev  $appdev
     * @return \Illuminate\Http\Response
     */
    public function edit(Appdev $appdev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appdev  $appdev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appdev $appdev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appdev  $appdev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appdev $appdev)
    {
        //
    }
}
