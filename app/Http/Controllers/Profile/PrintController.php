<?php

namespace App\Http\Controllers\Profile;

use Carbon\Carbon;
use App\Models\Country;
use App\Models\Province;
use App\Models\candidate;
use App\Models\RelativeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PrintController extends Controller
{
    //

    public function index(){

        return view('profile/print/IDForm');
    }

    public function showprofilelistforprint(){
      
        $provincelist = Province::all();
        $relativesType = RelativeType::all();
        $countryList = Country::all();
        $candidateDetails = candidate::latest()->filter(request(['firstname','lastname',
        'firstnameEn','lastnameEn']))->get();

        return view('profile/showprofileforprint',['candidateDetails'=> $candidateDetails,'provincelist'=>$provincelist,
        'countryList'=>$countryList,'relativesType'=>$relativesType]);
    }
    public function getprintForm($id){

        $isprint = candidate::where('id','=',$id)->first();
        if($isprint !=null){
            $profiles = candidate::find($id);
            $profiles->isprinted = 1;
            $profiles->update();
        }
         $candidateInfo = DB::table('candidates as c')
        ->leftjoin('provinces as p', 'c.placeofbirthID', 'p.id')
        ->join('maritalstatuses as s', 'c.martialstatusID', 's.id')
        ->select('c.*','c.placeofbirthID','c.born_outside as outside','c.bornoutsideEn as outsideEn' ,'p.name as placeofbrith',
        'p.nameEn as placeofbirthEn',
        's.nameEn as maritalstatusEn','s.name as maritalstatus')
        ->where('c.id','=',$id)->get();
      
        $candidateExtraDetails = DB::table('candidatedetails as cd')
        ->join('candidates as c','c.id','cd.profileID')
        ->leftjoin('provinces as p', 'cd.provinceID', 'p.id')
        ->leftjoin('countries as ca', 'cd.countryID', 'ca.id')
        ->leftjoin('current_i_d_s as curr','cd.currentID','curr.id')
        ->leftjoin('relative_Types as rt', 'cd.relativeTypeID', 'rt.id')
        ->select('cd.*', 'p.name as provincename','p.nameEn as provnameEn','cd.provinceID','cd.villageEn as vlEn',
        'cd.districtEn as distEn','cd.village as vilg','cd.district as dist',
         'ca.name as countryname','ca.nameEn as cntrynameEn', 'cd.jobinAfg as afghjob','cd.jobinforgn as forgnjob',
          'cd.IdentityNo as identityNo', 'cd.jobinAfgEn','cd.jobinforgnEn',
         'cd.phone as jobphone','curr.name as currnamefars','curr.nameEn as currnameEn','rt.name as relativetypename','rt.nameEn as relativetypenameEn')
        ->where('c.id','=',$id)->get();
        //  $addresses = DB::table('candidates as c')
        //  ->leftjoin('addresses as sa', 'c.id', 'sa.profileID')
        //  ->leftjoin('provinces as p', 'sa.provinceID', 'p.id')
        //  ->leftjoin('countries as ca', 'sa.countryID', 'ca.id')
        //  ->leftjoin('jobs as j', 'c.id', 'j.profileID')
        //  ->select('c.*', 'p.name as provincename','p.nameEn as provnameEn','sa.villageEn as vlEn',
        //  'sa.districtEn as distEn','sa.village as vilg','sa.district as dist',
        //  'ca.name as countryname','ca.nameEn as cntrynameEn','sa.city as city','sa.streetNo', 'sa.houseNo','sa.imigratingDate',
        //  'j.jobinAfg as afghjob','j.jobinforgn as forgnjob', 'j.jobinAfgEn','j.jobinforgnEn',
        //  'j.phone as jobphone')
        //  ->where('c.id','=',$id)->get();
        //  $relatives = DB::table('candidates as c')
        //  ->leftjoin('relatives as r', 'c.id', 'r.profileID')
        //  ->leftjoin('relative_Types as rt', 'r.relativeTypeID', 'rt.id')
        //  ->select( 'rt.name as relativetypename','rt.nameEn as relativetypenameEn',
        //  'r.firstname','r.fathername','r.firstnameEn','r.fathernameEn','r.identityNo',
        //  'r.pageNo','r.juldNo')
        //  ->where('c.id','=',$id)->get();

        //  $IdentityDetails = DB::table('candidates as c')
        //  ->leftjoin('identitydetails as ident','c.id','ident.profileID')
        //  ->leftjoin('current_i_d_s as curr','ident.currentID','curr.id')
        //  ->select('ident.birthinforgn','ident.nothavingID','ident.lostID','ident.burntID',
        //  'ident.dirverliscens','ident.currentID','curr.name as currnamefars','curr.nameEn as currnameEn')
        //  ->where('c.id','=',$id)->get();
     // $candidateInfo = candidate::where('id','=',$id)->get();
       
      return view('profile/print/IDForm',['candidateInfo'=>$candidateInfo,'candidateExtraDetails'=>$candidateExtraDetails]);
    }
}
