<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ReviewNotification;

class ReviewNotificationController extends Controller
{
    public function index()
    {
        //
        $user = ReviewNotification::all();
        return $user;
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
        $notification= new ReviewNotification();
        $notification->requestID= $request['requestID'];
        $notification->userId= $request['userId'];
        $notification->reviewedPerson= $request['reviewedPerson'];
        $notification->requestOpened= $request['requestOpened'];
        $notification->reviewedCount= $request['reviewedCount'];
        $notification->save();
        return $request;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('review_notifications')->where('userId',$id)->get();
        return $users;
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
        return "hello";
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
