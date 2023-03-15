<?php

namespace App\Http\Controllers\Profile;

use App\Models\Relative;
use Illuminate\Http\Request;
use App\Models\identitydetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RelativesController extends Controller
{
    //

    public function index(){

    }

    public function storeRelatives(Request $request,$id){

        $relativecheck = Relative::where('profileID','=',$id)->first();
         if($relativecheck){
            $relative = Relative::where('profileID','=',$id)->first();

            $relative->relativeTypeID  = $request->relativeTypeID;
            $relative->firstname = $request->firstname;
            $relative->firstnameEn = $request->firstnameEn;
            $relative->fathername = $request->fathername;
            $relative-> fathernameEn  = $request-> fathernameEn;
            $relative->IdentityNo = $request->IdentityNo;
            $relative->pageNo = $request->pageNo;
            $relative->juldNo = $request->juldNo;
            $relative->modifiedBy = Auth::User()->id;
            
            $relative->update();
          return back()->with('message','relatives details  Updated for this candidate!');
         }

         $relative = new Relative;
         $relative->profileID = $id;
         $relative->relativeTypeID  = $request->relativeTypeID;
         $relative->firstname = $request->firstname;
         $relative->firstnameEn = $request->firstnameEn;
         $relative->fathername = $request->fathername;
         $relative-> fathernameEn  = $request-> fathernameEn;
         $relative->IdentityNo = $request->IdentityNo;
         $relative->pageNo = $request->pageNo;
         $relative->juldNo = $request->juldNo;
         $relative->createdBy = Auth::User()->id;
         
         $relative->save();
         return redirect('/profilelists')-> with('message','Address   created successfully!!');
    }
   
}
