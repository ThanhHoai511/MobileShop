<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\DetailProduct;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        view()->share('category', Category::all());
        view()->share('new', DetailProduct::orderBy('created_at', 'desc')->take(5)->get());
    }

    public function edit()
    {
        $user = Auth::user();

        return view('auth.passwords.change', compact('user'));

    }

    public function update(Request $request)
    {
        $this->validate($request, [ 
           'oldPassword' => 'required|min:6|max:32',
           'newPassword' => 'required|min:6|max:32',
           'confirmPassword' => 'required|min:6|max:32|same:newPassword'
       	]);

        $user = Auth::user();
        if (!Hash::check($request->oldPassword, $user->password)) {
            return redirect()->back()->withErrors(['oldPassword' => 'The old password is invalid']);
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return redirect()->route('login');
    }
}
