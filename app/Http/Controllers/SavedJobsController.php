<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\SavedJobs;
use App\Models\Job;

class SavedJobsController extends Controller
{
    //
    public function index()
    {
        //
        $jobs = SavedJobs::all();
        return $jobs;
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
        $jobs = DB::table('saved_jobs')->where('userId',$request['userId'])->where('jobId',$request['jobId'])->get();
        if(count($jobs)>0){
            $response = "already added";
            echo count($jobs);
            return $response;
        }
        $job= new SavedJobs();
        $job->userId= $request['userId'];
        $job->jobId= $request['jobId'];
        $job->save();
        $response = "success";
        return $response;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = DB::table('saved_jobs')->select('jobId')->where('userId',$id)->get();
        return $jobs;
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
