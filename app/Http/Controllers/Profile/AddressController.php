<?php

namespace App\Http\Controllers\Profile;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    //

    public function index(){

        return view('profile/profilemodal/createaddress');
    }


    public function storeAddress(Request $request,$id){
         $addresscheck = Address::where('profileID','=',$id)->first();
         if($addresscheck){

            $address = Address::where('profileID','=',$id)->first();
           
            $address->provinceID  = $request->provinceID;
            $address->provinceID  = $request->provinceID;
            $address->provinceIDEn = $request->provinceIDEn;
            $address->district = $request->district;
            $address->districtEn = $request->districtEn;
            $address->village = $request->village;
            $address->villageEn = $request->villageEn;
            $address->imigratingDate =date('Y-m-d' , strtotime($request->imigratingDate));
            $address->countryID = $request->countryID;
            $address->city = $request->city;
            $address->streetNo = $request->streetNo;
            $address->houseNo = $request->houseNo;
            $address->modifiedBy = Auth::User()->id;
            
            $address->update();
          return back()->with('message','address details  Updated for this candidate!');
         }

         $address = new Address;
         $address->profileID = $id;
         $address->provinceID  = $request->provinceID;
         $address->provinceIDEn = $request->provinceIDEn;
         $address->district = $request->district;
         $address->districtEn = $request->districtEn;
         $address->village = $request->village;
         $address->villageEn = $request->villageEn;
         $address->imigratingDate =date('Y-m-d' , strtotime($request->imigratingDate));
         $address->countryID = $request->countryID;
         $address->city = $request->city;
         $address->streetNo = $request->streetNo;
         $address->houseNo = $request->houseNo;
         $address->createdBy = Auth::User()->id;
         
         $address->save();
         return redirect('/profilelists')-> with('message','Address   created successfully!!');
      }

      
}
