<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Auth::user()->blogs()->orderBy('created_at', 'desc')->get();
        return view('home', compact('blogs'));
    }

    public function edit()
    {
        return view('home.edit');
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'new_password' => ['required', 'string', 'min:6', 'confirmed']
        ]);
        
        if ($validator->errors()->count() < 1) {
            Auth::user()->update($request->all());
            Auth::user()->update(['password' => bcrypt($request->input('new_password'))]);
        } else {
            return redirect()->back()->withErrors($validator);
        }

        return redirect()->route('home');
    }
}
