<?php

namespace App\Http\Controllers;

use App\Object;
use App\User;
use Illuminate\Support\Facades\Auth;


class OfficeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('office', [
            'user' => User::getUserData(Auth::id()),
            'objects' => Object::where('user_id', Auth::id())->get()
        ]);
    }
}
