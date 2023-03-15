<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Models\identitydetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IdentityDetailsController extends Controller
{
    //

    public function index(){

        return view('profile/profilemodal/identitydetails');
    }

    public function storeCandiateIdentityDetails(Request $request,$id){

        $identitycheck = identitydetail::where('profileID','=',$id)->first();
         if($identitycheck){

            $identity = identitydetail::where('profileID','=',$id)->first();
            //dd($identity);
            $identity->birthinforgn  = $request->birthinforgn;
            $identity->nothavingID = $request->nothavingID;
            $identity->lostID = $request->lostID;
            $identity->burntID = $request->burntID;
            $identity-> dirverliscens  = $request-> dirverliscens;
            $identity->currentID = $request->currentID;
            $identity->modifiedBy = Auth::User()->id;
            
            $identity->update();
          return back()->with('message','Identity details  Updated for this candidate!');
         }

         $identity = new identitydetail;
         $identity->profileID = $id;
         $identity->birthinforgn  = $request->birthinforgn;
         $identity->nothavingID = $request->nothavingID;
         $identity->lostID = $request->lostID;
         $identity->burntID = $request->burntID;
         $identity-> dirverliscens  = $request-> dirverliscens;
         $identity->currentID = $request->currentID;
         $identity->createdBy = Auth::User()->id;
         
         $identity->save();
         return redirect('/profilelists')-> with('message','Identity details   Added successfully!!');
    }
}
