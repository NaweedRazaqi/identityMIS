<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\user_access;
use App\Models\Access_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UseraccessController extends Controller
{
    //
    public function index(){

        $users = User::all();
        // $accessType = Access_Type::all();
        // $userslist = DB::table('users')
        // ->join('user_accesses', 'users.id', 'user_accesses.user_Id')
        // ->join('access__types', 'access__types.id', 'user_accesses.Access_Id')
        // ->select('users.name as usname','users.email as usemail', 'access__types.name as access_name')
        // ->get();
        return view('authentication/useraccess/accesstouser',['users'=>$users]);
        //  'accessType'=>$accessType, 'userslist'=> $userslist]);
    }
    public function getuser($id){
        $users = User::find($id);
        return view('authentication/useraccess/accesstouser', $users)->with('users', $users);
    }
    public function storeaccess(Request $request,$id){

        $user = User::find($id);

        $user->name=$request['name'];
        $user->role=$request['role'];
        $user->update();
        return back()->with('message','Access Granted Successfully!!');
    }
}
