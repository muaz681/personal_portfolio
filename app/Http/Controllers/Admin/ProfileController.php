<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use File;


class ProfileController extends Controller
{

    //view
    public function profile_view(){
        return view('admin.profile.index');
    }

    // profile_update
    public function profile_update(Request $request){

        $user = User::find($request->id);
        $user->name = $request->input('name');
        if($request->hasFile('photo')) {
            if(auth()->user()->photo) {
                $delete_path = public_path()."/uploads/profiles/".auth()->user()->photo;

                // dd($delete_path);
                if($delete_path) {
                    unlink($delete_path);
                }
            }

            $new_profile_image = $request->photo;
            $extension = $new_profile_image->getClientOriginalExtension();
            $new_photo_name = Auth::id().'.'.$extension;

            Image::make($new_profile_image)->save(public_path('uploads/profiles/'.$new_photo_name));
            $user->photo = $new_photo_name;
        }

        $user->save();
        return back();

    }

    // profile_password
    public function profile_password(){
        return view('admin.profile.password');
    }

    // Update Password
    public function profile_password_update(Request $request){

        $request->validate([
            'old_password'=>'required',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);

        if(Hash::check($request->old_password, Auth::User()->password)){
            $user_id = Auth::id();
            User::find($user_id)->update([
                'password' => bcrypt($request->password),
            ]);
            return back()->with('update', 'Successfully Update');
        }
        else{
            return back()->with('not_match', 'Old Password is not Currect');
        }

    }

}
