<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Usercontroller extends Controller
{
    //
    public function store(Request $request){

        $createUser = User::create([
            'username'=>$request->username,
            'email'=>$request->email, 
            'password'=>Hash::make($request->password),
            'role'=>'clients'
        ]);
        // $createUser->assignRole('admin');
        return $createUser;
        // $data = [
        //     'subject'=>'Umwezi Farming System',
        //     'body'=>' welcome to the UFS that is home of the Farmer your account already created'
        // ];
        // Mail::to($fields['email'])->send(new mailer($data));
        //  return $createUser;
        //return view('components.signup')->with('user',$createUser);
    }
    public function index(){

        $users = User::all();
        return $users;
        // return response(["message"=>"all users",$users], 201);
        // return view('user')->with('users', $users);
    }
    
    public function show($id){

        $user = User::find($id);
         // return $user;
        return view('ViewUser')->with('user', $user);
    }
    public function edit($id){

        $user = User::find($id);
        //  return $user;
        return view('EditUser')->with('user',$user);
    }

    public function destroy($id){
        $user = User::destroy($id);
        // return $user;
        // return view('user')->with('users',$user);
        return redirect('/user/getAll');
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $input = $request->all();
        $user-> update($input);
        return $user;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials) && Auth()->user()->role=='clients') {
            $request->session()->regenerate();
            return redirect()->intended('/userdashboard');
        }
        else if(Auth::attempt($credentials))
          {
            return redirect()->intended('/');
            }
      else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
}

public function grantPermissions(Request $request,$id)
{
    $input=$request->all();
    $permissions=array_values($input);
    unset($permissions[0]);
    unset($permissions[1]);
    $permissions=array_values($permissions);
    $user=User::find($id);
    $role = Role::where('name',$user->role)->first();
    $role->givePermissionTo($permissions);
    return redirect('/management/roles/'.$id.'/edit');
}
public function revokePermissions(Request $request,$id)
{
    $input=$request->all();
    $permissions=array_values($input);
    unset($permissions[0]);
    unset($permissions[1]);
    $permissions=array_values($permissions);
    $user=User::find($id);
    $role = Role::where('name',$user->role)->first();
    $role->revokePermissionTo($permissions);
    return redirect('/management/roles/'.$id.'/edit');
}

}
