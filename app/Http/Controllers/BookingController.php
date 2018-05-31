<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cargo;
use App\Http\Resources\BookingResource;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $cargo = Cargo::findOrFail($request->input('cargo_id'));
      if($cargo->available_capacity - $request->input('capacity') >= 0){

        $cargo->available_capacity = $cargo->available_capacity - $request->input('capacity');
        if($cargo->available_capacity <= 0){
          $cargo->booking_status = 'booked';

        }
        DB::beginTransaction();
        // $booking->user_id = $request->user()->id;
        $request->request->add(["user_id"=>$request->user()->id]);
        // info($request->all());
        $booking = Booking::forceCreate($request->all());
        $cargo->save();
        DB::commit();

        $user = $request->user();
        $data = array('bookingid'=>$booking->id);
        Mail::send('emails.forgotpassword', $data, function($message) use ($user){
            $message->to($user->email, $user->name)
                    ->subject('Booking Status');
            $message->from('siapayangnanyasender@gmail.com','Admin Maritimax');
        });
        return response()->json($booking, 201);
      }else{
        return response()->json(['error' => 'Invalid Email', 'message' => 'Email not Found'], 404);
      }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getListBooking(Request $request)
    {
      $booking = Booking::where("user_id",$request->user()->id)->first();
      return response()->json(new BookingResource($booking), 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
