<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\RegisterMail;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps = Project::all();
        return view('project_showcasing/list')->with('pss',$ps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_showcasing/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pc = new Project;
        $new_pc->team_name = $request->team_name;
        $new_pc->project_name = $request->project_name;
        
        $new_pc->total = 2000;
        $new_pc->paid = 0;
        $new_pc->selected = 'False';
        $new_pc->submission = 'False';


        $new_pc->member_1_name =    $request->member_1_name;
        $new_pc->member_1_institution = $request->member_1_institution;
        $new_pc->member_1_contact = $request->member_1_contact;
        $new_pc->member_1_email =   $request->member_1_email;
        $new_pc->member_1_tshirt =  $request->member_1_tshirt;

        $new_pc->member_2_name =    $request->member_2_name;
        $new_pc->member_2_institution = $request->member_2_institution;
        $new_pc->member_2_contact = $request->member_2_contact;
        $new_pc->member_2_email =   $request->member_2_email;
        $new_pc->member_2_tshirt =  $request->member_2_tshirt;

        $new_pc->member_3_name =    $request->member_3_name;
        $new_pc->member_3_institution = $request->member_3_institution;
        $new_pc->member_3_contact = $request->member_3_contact;
        $new_pc->member_3_email =   $request->member_3_email;
        $new_pc->member_3_tshirt =  $request->member_3_tshirt;
        
        $new_pc->pdf = $request->file('pdf')->store('project_showcasing');

        if($request->file('pdf')==null){
           $new_pc->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
           $new_pc->submission = 'True';
        }
        
        $new_pc->save();
        $key = Crypt::encryptString('PS-'.$new_pc->id);

        Mail::to($new_pc->member_1_email)->send(new RegisterMail($new_pc->member_1_name,'Project Showcasing',$key));
        Mail::to($new_pc->member_2_email)->send(new RegisterMail($new_pc->member_2_name,'Project Showcasing',$key));
        if ($new_pc->member_3_email!=null) {
            Mail::to($new_pc->member_3_email)->send(new RegisterMail($new_pc->member_3_name,'Project Showcasing',$key));
        }
        
        alert()->success('Team has been added successfully.')->autoclose(3000);
       
        $ps = Project::all();
        return redirect()->route('ps_list')->with('pss',$ps);
    }

    public function store_front(Request $request)
    {
        $new_pc = new Project;
        $new_pc->team_name = $request->team_name;
        $new_pc->project_name = $request->project_name;
        
        $new_pc->total = 2000;
        $new_pc->paid = 0;
        $new_pc->selected = 'False';
        $new_pc->submission = 'False';


        $new_pc->member_1_name =    $request->member_1_name;
        $new_pc->member_1_institution = $request->member_1_institution;
        $new_pc->member_1_contact = $request->member_1_contact;
        $new_pc->member_1_email =   $request->member_1_email;
        $new_pc->member_1_tshirt =  $request->member_1_tshirt;

        $new_pc->member_2_name =    $request->member_2_name;
        $new_pc->member_2_institution = $request->member_2_institution;
        $new_pc->member_2_contact = $request->member_2_contact;
        $new_pc->member_2_email =   $request->member_2_email;
        $new_pc->member_2_tshirt =  $request->member_2_tshirt;

        $new_pc->member_3_name =    $request->member_3_name;
        $new_pc->member_3_institution = $request->member_3_institution;
        $new_pc->member_3_contact = $request->member_3_contact;
        $new_pc->member_3_email =   $request->member_3_email;
        $new_pc->member_3_tshirt =  $request->member_3_tshirt;
        
        $new_pc->pdf = $request->file('pdf')->store('project_showcasing');

        if($request->file('pdf')==null){
           $new_pc->pdf="";
            alert()->success('Your registration was unsucessful. Please contact us for further query.')->autoclose(120000);
            return redirect()->route('front');
        }
        else if ($request->has('pdf')) {
           $new_pc->submission = 'True';
        }
        
        $new_pc->save();
        $key = Crypt::encryptString('PS-'.$new_pc->id);

        Mail::to($new_pc->member_1_email)->send(new RegisterMail($new_pc->member_1_name,'Project Showcasing',$key));
        Mail::to($new_pc->member_2_email)->send(new RegisterMail($new_pc->member_2_name,'Project Showcasing',$key));
        if ($new_pc->member_3_email!=null) {
            Mail::to($new_pc->member_3_email)->send(new RegisterMail($new_pc->member_3_name,'Project Showcasing',$key));
        }

        alert()->success('Dear '.$request->team_name.', Your registration information has successfully been uploaded. Please check your e-mail and our website for further information.')->autoclose(120000);
        return redirect()->route('front');
    }



    public function delete($id)
    {
        $pc = Project::find($id);
        $pc->delete();
        alert()->warning('Team has been discarded successfully', 'Deleted')->autoclose(3000);
        $pp=Project::all();
        return redirect()->route('ps_list')->with('pss',$pp);
    }

    public function selection($id)
    {
        Project::find($id)->update(['selected' => 'True']);
        
        alert()->warning('Team has been selected successfully', 'Done')->autoclose(3000);
        $mm=Project::all();
        return redirect()->route('ps_list')->with('pss',$mm);
    }

    public function payment($id)
    {
        Project::find($id)->update(['paid' => Project::find($id)->total]);
        
        alert()->warning('Payment has been completed successfully', 'Done')->autoclose(3000);
        $mm=Project::all();
        return redirect()->route('ps_list')->with('pss',$mm);
    }

    public function download($id)
    {
        $biz = Project::find($id);
        //$file = Storage::disk('local')->get($biz->pdf);
        return Storage::download($biz->pdf);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
