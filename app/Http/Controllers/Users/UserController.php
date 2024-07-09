<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user_profile()
    {
        $user = Auth::user();
        return view('Templates.Users.user-profile', compact('user'));
    }

    public function user_profile_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:4|max:10',
            'first_name' => 'required|min:2|max:15',
            'last_name' => 'required|min:2|max:15',
            'phone_no' => 'required|integer',
            'address' => 'required',
            'pincode' => 'required|integer',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'pincode' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 422);
        }

        $user = User::find($request->id);

        $image = $request->file('profile_pic');
        if ($image) {
            if ($user->profile_pic) {
                // unlink($user->profile_pic);
                Storage::delete($user->profile_pic);
            }
            $image_name = str()->random(2).rand(111,999).str()->random(2).$request->profile_pic->getClientOriginalName();
            // $image->move('images/profile_pic/',$image_name);
            $image->storeAs('app/public/profile_pic', $image_name);
            $image_name = 'profile_pic/'.$image_name;
        }

        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->phone_no = $request->phone_no;
        $user->address = $request->address;
        $user->pincode = $request->pincode;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->profile_pic = isset($image_name) ? $image_name : $user->profile_pic;
        $user->save();
        return response()->json(['Success' => 'Your Profile Successfully Updated']);
    }

    public function explore_more_hotels(Request $request)
    {
        $user = Auth::user();
        return view('Templates.Users.more-rooms', compact('user'));
    }

    public function hotel_detail(Request $request)
    {
        $user = Auth::user();
        return view('Templates.Users.room-detail', compact('user'));
    }
}
