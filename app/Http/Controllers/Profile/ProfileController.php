<?php

namespace App\Http\Controllers\Profile;

use App\Models\Job;
use App\Models\Gender;
use App\Models\Country;
use App\Models\Province;
use App\Models\candidate;
use App\Models\CurrentID;
use Illuminate\Support\Str;
use App\Models\RelativeType;
use Illuminate\Http\Request;
use App\Models\maritalstatus;
use App\Models\reasonfornoID;
use App\Models\candidatedetails;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
        
        $randomId= rand(10000000,99999999);
        $profiles = new candidate;

        $profiles->firstname = $request->firstname;
        $profiles->code = $randomId;
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
        $profiles->martialstatusID = $request->martialstatusID;
        $profiles->genderID = $request->genderID;
        $profiles->eyecolor = $request->eyecolor;
        $profiles->eyecolorEn = $request->eyecolorEn;
        $profiles->skincolorEn = $request->skincolorEn;
        $profiles->hiarcolor = $request->hiarcolor;
        $profiles->haircolorEn = $request->haircolorEn;
        $profiles->otherIdent = $request->otherIdent;
        $profiles->otherIdentEn = $request->otherIdentEn;
        $profiles->born_outside = $request->born_outside;
        $profiles->bornoutsideEn = $request->bornoutsideEn;
        $profiles-> createdBy = Auth::User()->id;
        
       
        $profiles->save();
        // getting the id of record inserted
        $CandID = $profiles->id;
         return redirect(route('addprofiledetails',['id'=>$CandID]))->with('message','candidate  created successfully!!');
    }
    public function showprofiledetails($id){
        $candidateDetails = candidate::where('id','=',$id)->get();
        // ->select('c.id','c.firstnameEn','c.lastnameEn','c.fathernameEn','c.grandfathernameEn','c.dateofbirth','c.martialstatusID')
        // ->orderBy('id', 'DESC')->take(1)->get();
        return view('profile/addprofiledetails',['candidateDetails'=> $candidateDetails]);
    }
    public function showprofilelist(){
      
        $provincelist = Province::all();
        $relativesType = RelativeType::all();
        $countryList = Country::all();
        $currentIDList = CurrentID::all();
        $candidateDetails = candidate::latest()->filter(request(['firstname','lastname',
        'firstnameEn','lastnameEn','code']))->take(4)->get();
       

        return view('profile/profilelists',['candidateDetails'=> $candidateDetails,'provincelist'=>$provincelist,
        'countryList'=>$countryList,'relativesType'=>$relativesType,'currentIDList'=>$currentIDList]);
    }
    public function showupdateprofile($id){
       $candidates = candidate::find($id);
       $provincelist = Province::all();
        $genderlist = Gender::all();
        $maritalstatuslist = maritalstatus::all();
       return view('profile/updatepro',['candidates'=>$candidates,'provincelist'=>$provincelist,
       'genderlist'=>$genderlist, 'maritalstatuslist'=> $maritalstatuslist]);
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
        $profiles->martialstatusID = $request->martialstatusID;
        $profiles->genderID = $request->genderID;
        $profiles->eyecolor = $request->eyecolor;
        $profiles->hiarcolor = $request->hiarcolor;
        $profiles->haircolorEn = $request->haircolorEn;
        $profiles->eyecolorEn = $request->eyecolorEn;
        $profiles->skincolorEn = $request->skincolorEn;
        $profiles->otherIdent = $request->otherIdent;
        $profiles->otherIdentEn = $request->otherIdentEn;
        $profiles->born_outside = $request->born_outside;
        $profiles->bornoutsideEn = $request->bornoutsideEn;
        $profiles-> ModifiedBy = Auth::User()->id;

        $profiles->update();
        $CandID = $profiles->id;
        return redirect(route('addprofiledetails',['id'=>$CandID]))->with('message','candidate updated successfully!!');
    }

    public function showcandidateDetail($id){
         // check if candidate details exist
        $ifcandDetaExist = candidatedetails::where('profileID','=',$id)->first();

        if($ifcandDetaExist){
            return $this->showcandidatedetailsUpdate($id);
        }

        $candidates = candidate::find($id);

        $provincelist = Province::all();
        $countryList = Country::all();
        $relativesType = RelativeType::all();
        $currentIDList = CurrentID::all();
        return view('profile/candidateDetails',['candidates'=>$candidates,'provincelist'=>$provincelist,
        'countrylist'=>$countryList,'relativetype'=>$relativesType,'currentIDList'=>$currentIDList]);
    }
    public function storecandidataDetails(Request $request, $id){
        $CanD = new candidatedetails;
        $CanD->profileID = $id;
        $CanD->provinceID  = $request->provinceID;
        $CanD->district = $request->district;
        $CanD->districtEn = $request->districtEn;
        $CanD->village = $request->village;
        $CanD->villageEn = $request->villageEn;
        $CanD->imigratingDate =date('Y-m-d' , strtotime($request->imigratingDate));
        $CanD->countryID = $request->countryID;
        $CanD->city = $request->city;
        $CanD->streetNo = $request->streetNo;
        $CanD->houseNo = $request->houseNo;
        $CanD->jobinAfg = $request->jobinAfg;
        $CanD->jobinforgn = $request->jobinforgn;
        $CanD->jobinAfgEn = $request->jobinAfgEn;
        $CanD->jobinforgnEn = $request->jobinforgnEn;
        $CanD->phone = $request->phone;
        $CanD->relativeTypeID  = $request->relativeTypeID;
        $CanD->firstname = $request->firstname;
        $CanD->firstnameEn = $request->firstnameEn;
        $CanD->fathername = $request->fathername;
        $CanD-> fathernameEn  = $request-> fathernameEn;
        $CanD->IdentityNo = $request->IdentityNo;
        $CanD->pageNo = $request->pageNo;
        $CanD->juldNo = $request->juldNo;
        $CanD->birthinforgn  = $request->birthinforgn;
        $CanD->nothavingID = $request->nothavingID;
        $CanD->lostID = $request->lostID;
        $CanD->burntID = $request->burntID;
        $CanD-> dirverliscens  = $request-> dirverliscens;
        $CanD->currentID = $request->currentID;
        $CanD->createdBy = Auth::User()->id;
        
        $CanD->save();

        $CandID = $CanD->profileID;
        return redirect(route('listcandidates',['id'=>$CandID]))->with('message','candidate details added successfully!!');
    }
   // to list the candidate at its final stage
    public function listCandidate($id){
        $candidateDetails = candidate::where('id','=',$id)->get();
        return view('profile/listcandidates',['candidateDetails'=> $candidateDetails]);
    }

    public function showcandidatedetailsUpdate($id){
        $candidatesdetails = candidatedetails::where('profileID','=',$id)->first();
        $provincelist = Province::all();
        $countrylist= country::all();
        $relativetype= RelativeType::all();
        $currentIDList = CurrentID::all();
        return view('profile/updatecandidatedetails',['candidatesdetails'=>$candidatesdetails,'provincelist'=>$provincelist,
        'countrylist'=>$countrylist,'relativetype'=>$relativetype,'currentIDList'=>$currentIDList]);
     }


    public function updatecandidateDetails(Request $request,$id){
        
        $CanD = candidatedetails::where('profileID','=',$id)->first();
        $CanD->profileID = $id;
        $CanD->provinceID  = $request->provinceID;
        $CanD->district = $request->district;
        $CanD->districtEn = $request->districtEn;
        $CanD->village = $request->village;
        $CanD->villageEn = $request->villageEn;
        $CanD->imigratingDate =date('Y-m-d' , strtotime($request->imigratingDate));
        $CanD->countryID = $request->countryID;
        $CanD->city = $request->city;
        $CanD->streetNo = $request->streetNo;
        $CanD->houseNo = $request->houseNo;
        $CanD->jobinAfg = $request->jobinAfg;
        $CanD->jobinforgn = $request->jobinforgn;
        $CanD->jobinAfgEn = $request->jobinAfgEn;
        $CanD->jobinforgnEn = $request->jobinforgnEn;
        $CanD->phone = $request->phone;
        $CanD->relativeTypeID  = $request->relativeTypeID;
        $CanD->firstname = $request->firstname;
        $CanD->firstnameEn = $request->firstnameEn;
        $CanD->fathername = $request->fathername;
        $CanD-> fathernameEn  = $request-> fathernameEn;
        $CanD->IdentityNo = $request->IdentityNo;
        $CanD->pageNo = $request->pageNo;
        $CanD->juldNo = $request->juldNo;
        $CanD->birthinforgn  = $request->birthinforgn;
        $CanD->nothavingID = $request->nothavingID;
        $CanD->lostID = $request->lostID;
        $CanD->burntID = $request->burntID;
        $CanD-> dirverliscens  = $request-> dirverliscens;
        $CanD->currentID = $request->currentID;
        $CanD->modifiedBy = Auth::User()->id;
       
        $CanD->update();

        $CandID = $CanD->profileID;

        return redirect(route('listcandidates',['id'=>$CandID]))->with('message','candidate details updated successfully!!');
    }
}
