<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CandidateDetailsExport;

class DashboarController extends Controller
{
    //

    public function index(){
         
        $candidates = candidate::all();
         /////////////////////////////////////chart data//////////////////////////////////////////////////
        $result = DB::select(DB::raw("SELECT COUNT(*) as totalcount, g.nameEn as gendertype from candidates as c 
        JOIN genders g on g.id = c.genderID GROUP by genderID"));
        $charatdata[] = ['gendertype','totalcount'];

        foreach ($result as $key => $value) {

            $charatdata[++$key] = ["$value->gendertype", (int)$value->totalcount];

        }
       /////////////////////////////////////chart data//////////////////////////////////////////////////

        $usersdetails = DB::table('users')->where('activate', '=', 1)->get();
        $deactivateduser = DB::table('users')->where('activate', '=', 0)->get();
        $isprinted = DB::table('candidates')->where('isprinted','=',1)->get();
        $underprocess = DB::table('candidates as c')
        ->leftjoin('candidatedetails as cd','c.id','=','cd.profileID')
        ->whereNull('cd.profileID')->get();
        $finished = DB::table('candidates as c')
        ->join('candidatedetails as cd','c.id','cd.profileID')
        ->select('c.id')->get();
        return view('/dash/dashboard',['usersdetails'=>$usersdetails,'candidates'=>$candidates,'isprinted'=>$isprinted,
        'underprocess'=>$underprocess,'finished'=>$finished,'deactivateduser'=>$deactivateduser,'charatdata'=>$charatdata]);


    }
    public function getreport(Request $request){

        $startdate = date('Y-m-d' , strtotime($request->startdate));
        $enddate = date('Y-m-d' , strtotime($request->enddate));
          
        $candidatelist = candidate::whereBetween('created_at', [$startdate, $enddate])->get();
        return view('/dash/report',['candidatelist'=>$candidatelist]);
    }

    public function getreportdata(Request $request){

        $startdate = date('Y-m-d' , strtotime($request->startdate));
        $enddate = date('Y-m-d' , strtotime($request->enddate));
        $candidatelist = candidate::where('created_at', '>=', $startdate)
        ->where('created_at', '<=', $enddate)->get();

        return view('/dash/loadreportdata',['candidatelist'=>$candidatelist]);

    }
    

    public function exportCandidateData(){
      
    return Excel::download(new CandidateDetailsExport, 'candidatesDetails.xlsx');
    }

    public function chartdata(){

     

    }
}
