<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function getUsers()

    {

        $users = User::all();

        return view('users',compact('users'));

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function updateUser(Request $request)

    {

        User::find($request->pk)->update([$request->name => $request->value]);

        return response()->json(['success'=>'done']);

    }
}
