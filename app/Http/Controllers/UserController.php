<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile');
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        auth()->user()->name = $request->name;
        auth()->user()->save();
        $request->session()->flash('success', 'Profile Edit Successful');

        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'current' => 'required',
            'password' => 'required|confirmed'
        ]);
        if(!Hash::check($request->current, auth()->user()->password)) {
            return redirect()->back()->withErrors(['current' => 'password not correct']);
        }
        auth()->user()->password = Hash::make($request->password);
        auth()->user()->save();
        $request->session()->flash('success', 'Password Update Successful');

        return redirect()->back();
    }
}
