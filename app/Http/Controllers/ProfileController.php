<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showProfile(Request $request) {
    	$user = User::find($request->user()->id);
    	return view('profile.profile', ['user' => $user]);
    }

    public function updateProfile(Request $request) {
        // Validation Form Input
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'numeric',
        ]);

        // Update to Database
    	$user = User::where('id', $request->user()->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Redirect and Set Flash Session Data
    	return redirect()->action('ProfileController@showProfile')->with('status', 'Profile Updated');
    }

    public function showPassword(Request $request) {
    	return view('profile.password');
    }

    public function updatePassword(Request $request) {
        // Validation Form Input
        $validateData = $request->validate([
            'old_password' => 'required|min:6',
            'new_password' => 'required|confirmed|min:6',
        ]);

        // Check Validation New Password and Old Password
        $user = User::find($request->user()->id);
        if (Hash::check($request->old_password, $user->password)) {
            // Update New Password to Database
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->action('ProfileController@showPassword')->with('success', 'Password Updated');
        }
        else {
            return redirect()->action('ProfileController@showPassword')->with('error', 'Password Salah');
        }
    }
}
