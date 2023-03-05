<?php

namespace App\Http\Controllers\Profile;

use App\Models\Job;
use App\Models\Gender;
use App\Models\Province;
use App\Models\candidate;
use App\Models\CurrentID;
use Illuminate\Http\Request;
use App\Models\maritalstatus;
use App\Models\reasonfornoID;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    //

    public function index(){
     
        $provincelist = Province::all();
        $genderlist = Gender::all();
        $maritalstatuslist = maritalstatus::all();
        $currentidlist = CurrentID::all();
        $reasonfornoidlist = reasonfornoID::all();
        return view('profile/showpro',['provincelist'=>$provincelist,
         'genderlist'=>$genderlist, 'maritalstatuslist'=> $maritalstatuslist,
        'currentidlist'=>$currentidlist,'reasonfornoidlist'=>$reasonfornoidlist]);
    }

    public function storeProfiles(Request $request){
        // dd($request ->firstname);
        $profiles = new candidate;

        $profiles->firstname = $request->firstname;
        $profiles->firstnameEn  = $request->firstnameEn;
        $profiles->lastname = $request->lastname;
        $profiles->lastnameEn = $request->lastnameEn;
        $profiles->fathername = $request->fathername;
        $profiles->fathernameEn = $request->fathernameEn;
        $profiles->grandfathername = $request->grandfathername;
        $profiles->grandfathernameEn = $request->grandfathernameEn;
        $profiles->dateofbirth = date('Y-m-d' , strtotime($request->dateofbirth));
        $profiles->hight = $request->hight;
        $profiles->placeofbirthID = $request->placeofbirthID;
        $profiles->placeofbirthIDEn = $request->placeofbirthIDEn;
        $profiles->martialstatusID = $request->martialstatusID;
        $profiles->maritalstatusIDEn =$request->maritalstatusIDEn;
        $profiles->genderID = $request->genderID;
        $profiles->genderIDEn= $request->genderIDEn;
        $profiles->eyecolor = $request->eyecolor;
        $profiles->eyecolorEn = $request->eyecolorEn;
        $profiles->skincolorEn = $request->skincolorEn;
        $profiles->otherIdent = $request->otherIdent;
        $profiles->otherIdentEn = $request->otherIdentEn;
        $profiles->reasonfornoID = $request->reasonfornoID;
        $profiles->reasonfornoIDEn = $request->reasonfornoIDEn;
        $profiles->currentID = $request->currentID;
        $profiles->currentIDEn = $request->currentIDEn;
        $profiles-> createdBy = Auth::User()->id;

        $profiles->save();
        return redirect('/showpro')-> with('message','candidate  created successfully!!');
    }

    public function showprofilelist(){
        $jobslist = DB::table('candidates')
        ->join('jobs', 'jobs.profileID' ,'candidates.id')
        ->select('candidates.firstnameEn as canname', 'jobs.jobinAfgEn as prvjob', 'jobs.jobinforgnEn as currjob')
        ->get();
        $candidateDetails = candidate::latest()->filter(request(['firstname','lastname',
        'firstnameEn','lastnameEn']))->get();
        // $candidateprovince = DB::table('candidates')
        // ->join('provinces', 'candidates.placeofbirthID', 'provinces.id')
        // ->select('provinces.name as candprovinceName')->get();
        return view('profile/profilelists',['candidateDetails'=> $candidateDetails,'jobslist'=>$jobslist]);
    }
    public function showupdateprofile($id){
       $candidates = candidate::find($id);
       $provincelist = Province::all();
        $genderlist = Gender::all();
        $maritalstatuslist = maritalstatus::all();
        $currentidlist = CurrentID::all();
        $reasonfornoidlist = reasonfornoID::all();
       //return view('profile/updatepro', $candidates)->with('provincelist', $provincelist);
       return view('profile/updatepro',['candidates'=>$candidates,'provincelist'=>$provincelist,
       'genderlist'=>$genderlist, 'maritalstatuslist'=> $maritalstatuslist,
      'currentidlist'=>$currentidlist,'reasonfornoidlist'=>$reasonfornoidlist]);
    }
    public function updatecandprofile(Request $request, $id){
        $profiles = candidate::find($id);
        $profiles->firstname = $request->firstname;
        $profiles->firstnameEn  = $request->firstnameEn;
        $profiles->lastname = $request->lastname;
        $profiles->lastnameEn = $request->lastnameEn;
        $profiles->fathername = $request->fathername;
        $profiles->fathernameEn = $request->fathernameEn;
        $profiles->grandfathername = $request->grandfathername;
        $profiles->grandfathernameEn = $request->grandfathernameEn;
        $profiles->dateofbirth = date('Y-m-d' , strtotime($request->dateofbirth));
        $profiles->hight = $request->hight;
        $profiles->placeofbirthID = $request->placeofbirthID;
        $profiles->placeofbirthIDEn = $request->placeofbirthIDEn;
        $profiles->martialstatusID = $request->martialstatusID;
        $profiles->maritalstatusIDEn =$request->maritalstatusIDEn;
        $profiles->genderID = $request->genderID;
        $profiles->genderIDEn= $request->genderIDEn;
        $profiles->eyecolor = $request->eyecolor;
        $profiles->eyecolorEn = $request->eyecolorEn;
        $profiles->skincolorEn = $request->skincolorEn;
        $profiles->otherIdent = $request->otherIdent;
        $profiles->otherIdentEn = $request->otherIdentEn;
        $profiles->reasonfornoID = $request->reasonfornoID;
        $profiles->reasonfornoIDEn = $request->reasonfornoIDEn;
        $profiles->currentID = $request->currentID;
        $profiles->currentIDEn = $request->currentIDEn;
        $profiles-> ModifiedBy = Auth::User()->id;

        $profiles->update();
        return back()->with('message','candidate updated successfully!!');
    }
   
}
