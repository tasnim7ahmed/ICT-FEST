<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Payment::all();
        return view('payment/list')->with('payments',$pays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pay = new Payment;

        $val = Crypt::decryptString($request->key);
        $str_arr = explode ("-", $val);
        $pay->event = $str_arr[0];
        $pay->team_id = $str_arr[1];
        $pay->trxid = $request->trxid;
        $pay->save();
        alert()->success('Your payment information has been submitted successfully. Please visit our selected participants section to get the confirmation. It might take upto 6 hours for us to update.')->autoclose(120000);
        return redirect()->route('front');
        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     reutrn $request;
    //     $new_mo = new Payment;
    //     reutrn $request->key;
    //     $info = Crypt::decryptString($request->key);
    //     $new_mo->trxid = $request->trxid;
        
    //     reutrn $info;

        
    //     $new_mo->save();


    //     alert()->success('Your payment information has been submitted successfully. Please visit our selected participants section to get the confirmation. It might take upto 6 hours for us to update.')->autoclose(120000);


    //     return redirect()->route('front');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }



    public function delete($id)
    {
        $mo = Payment::find($id);
        $mo->delete();
        alert()->warning('Payment Info has been discarded successfully', 'Deleted')->autoclose(3000);
        $mm=Payment::all();
        return redirect()->route('payment_list')->with('payments',$mm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
