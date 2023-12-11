<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:11'],
            'address' => ['required', 'min:15'],
            'linkedIn' => ['required', 'starts_with:https://www.linkedin.com/'],
        ]);
    }

    public function goToAbout(){
        //logic
        return view('about');
    }

    public function goToHomepage(){
        //logic
        if(Auth::check()){
            //logic
            return view('homepage.homepage',['auth'=>true]);
        }else{
            return view('homepage.homepage',['auth'=>false]);
        }
    }

    public function userSignIn(){
        //logic
        return view('signIn');
    }

    public function authenticateLogIn(Request $request){
        //logic
        $userInfo = $request->only('username','password');

        if(Auth::Attempt($userInfo)){
            return view('homepage.homepage',['auth'=>true]);
        }
        return view('homepage.homepage',['auth'=>false]);
    }

    public function userSignUp(){
        //logic
        return view('signUp');
    }

    public function createUser(Request $request){

        $validator = validator($request->all());

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        User::create([
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'full_name' => $request['full_name'],
            'gender' => $request['gender'],
            'dob' => $request['DOB'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'linked_in' => $request['linkedIn']
        ]);

        return redirect()->route('signIn');
    }

    public function editProfile(){
        //logic
        return view('editProfile');
    }

    public function logOut(){
        Auth::logout();
        return view('homepage.homepage',['auth'=>false]);
    }
}
