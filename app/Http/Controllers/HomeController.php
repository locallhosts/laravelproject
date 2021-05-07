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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

 public function profile(){

    return view ('layouts.profile');
 }

 public function update(){
     return view ('layouts.update');
 }

//  public function link(){

//     return view('layouts.link');
//  }


public function avatarimage(Request $request) {

   // dd('done'); //to get the token
  //dd(request()-> hasFile('image')) ;// to get is the file upload

  //$request->image->store('images', 'public');  //to upload to storage in public folder
  if ($request ->hasFile('image')) {

     dd($request->image->getClientOriginalName());
  }
  User::find(1)->update(['avatar' => 'img']);
     return 'uploadeds';

 }


}
