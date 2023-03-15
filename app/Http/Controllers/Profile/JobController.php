<?php

namespace App\Http\Controllers\Profile;

use App\Models\Job;
use App\Models\candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //


    public function index(){
    
        return view('profile/profilemodal/createjob');
    }
    public function getjobs($id){

        $candidateID = candidate::find($id);
 
        return view('profile/profilemodal/createjob',['candidateID'=>$candidateID]);
    }

    public function storejob(Request $request,$id){
       $profileCheck = Job::where('profileID','=',$id)->first();
       if($profileCheck){
           $jobs = Job::where('profileID','=',$id)->first();

            $jobs->jobinAfg  = $request->jobinAfg;
            $jobs->jobinforgn = $request->jobinforgn;
            $jobs->jobinAfgEn = $request->jobinAfgEn;
            $jobs->jobinforgnEn = $request->jobinforgnEn;
            $jobs-> phone  = $request-> phone;
            $jobs->modifiedBy = Auth::User()->id;
            
            $jobs->update();
          return back()->with('message','job details  Updated for this candidate!');
       }
       $jobs = new Job;
       $jobs->profileID = $id;
       $jobs->jobinAfg = $request->jobinAfg;
       $jobs->jobinforgn = $request->jobinforgn;
       $jobs->jobinAfgEn = $request->jobinAfgEn;
       $jobs->jobinforgnEn = $request->jobinforgnEn;
       $jobs->phone = $request->phone;
       $jobs->createdBy = Auth::User()->id;
       
       $jobs->save();
       return redirect('/profilelists')-> with('message','job  created successfully!!');
    }

    public function listjobs($id){

        $jobslist = Job::join('candidates', 'jobs.profileID', '=', 'candidates.id')
        ->get(['candidates.firstnameEn as canname', 'jobs.jobinAfgEn as prvjob', 'jobs.jobinforgnEn as currjob']);
        return view('profile/profilemodal/createjob');
    }
}
