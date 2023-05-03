<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\Access_Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UsersRegisterController extends Controller
{


    public function index()
    {
        
        $userdetails = User::latest()->filter(request(['name','email']))->get();
        return view('authentication.searchusers',['users'=> $userdetails]);
    }

    public function create(){
        return view('authentication.register');
     }


    public function store(Request $request){
            $formFields = $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);
       // hash password
       $formFields['password'] = bcrypt( $formFields['password']);
       $user = User::create($formFields);
       
       return redirect('/searchusers')-> with('message','user created successfully!!');
    }
    // show edit form
    public function edit($id){
    $users = User::find($id);
        return view('authentication/useredit', $users)->with('users', $users);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = bcrypt($request->input('password'));
        $user->update();
        return back()->with('message','user update successfully!!');
    }
    // user activation modal
    public function getuser($id){
        $users = User::find($id);
        return view('authentication/useractivation', $users)->with('users', $users);
    }
    public function updateactivation(Request $request, $id){
        $user = User::find($id);
        $user->activate = $request->input('activate');
       
        $user->update();
          return back()->with('message','user Activated Successfully successfully!!');
        }
        
     
    
  
}
