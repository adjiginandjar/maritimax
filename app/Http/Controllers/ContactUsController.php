<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contactuses = ContactUs::orderBy('created_at', 'desc')->paginate(5);
      return  view('si.pages.list.contactus',compact('contactuses'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $contactus = ContactUs::create($request->all());
        $data = array('name'=>$request->input('fullname'), "email" => $request->input('email'));
        
         Mail::send('emails.contactus', $data, function($message) use ($data){
          $message->to($data['email'], $data['name'])
                  ->subject('Contact Us Maritimax');
          $message->from(env('MAIL_USERNAME'),'Admin Maritimax');
        });

        return response()->json($contactus, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactus)
    {
        return view('si.pages.form.viewcontact',compact('contactus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactus)
    {
        //
    }
}
