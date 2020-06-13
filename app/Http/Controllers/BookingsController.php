<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\booking;
use App\Faculty;
use App\cms_roles;
use App\resource;
use DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new booking;
        $userid = session('e_id');
        $cmsrole = cms_roles::where('e_id',$userid)->get();
        $resource_name = $request->input('resource');
        $resourceid = DB::select('select resource_id from resource where name = :name', ['name'=>$resource_name]);
        $userinfo = DB::select('select email,first_name from staff where e_id = :e_id', ['e_id'=>$userid]);
        $check = booking::where('event_date',$request->input('date'))->where('user_name',$userid)->where('resource_id',$resourceid[0]->resource_id)->where('start_time',$request->input('from-time'))->where('start_time',$request->input('to-time'))->where('event_name',$request->input('event'));
        if((isset($check)))
        {
            $this->validate($request,[
            'event' => 'required',
            'resource' => 'required',
            'date' => 'required|date_format:Y-m-d|after:today',
            'from-time' => 'required',
            'to-time' => 'required',
            'from-time' => 'date_format:H:i',
            'to-time' => 'date_format:H:i|after:from-time|before:18:00'

            ]);
            $booking->event_name = $request->input('event');
            $booking->event_date = $request->input('date');
            $booking->start_time = $request->input('from-time');
            $booking->end_time = $request->input('to-time');
            $booking->for_crowd = $request->input('class');
            $booking->expected_crowd = $request->input('crowd');
            $booking->guest = $request->input('guests');
            $booking->guest_designation = $request->input('designation');
            $booking->resource_id = $resourceid[0]->resource_id;
            $booking->user_id = $userid;
            $booking->user_email = $userinfo[0]->email;
            $booking->user_name= $userinfo[0]->first_name;
            if(count($cmsrole)==0){
                $booking->save();
                return redirect('/staff/booking')->with('success','Booking Request Send');
            }
            else{
                if($cmsrole[0]->roles_id==32){
                    $booking->save();
                    return redirect('/staff/manage_application')->with('success','Booking Request Send');
                }
            }
        }
        
        else{
            return redirect('/staff/new_booking')->with('error','You already have a booking with same information');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}