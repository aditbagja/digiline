<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    function index(){
        $data = User::all();
        return view('auth/profile')->with('data',$data);
    }
    function password(){
        return view('auth/password');
    }
    // public function edit($id){
    //     $data = user::where('id', $id)->first();
    //     return view('auth/profile');
    // }
    
    // public function store(Request $request)
    // {
    //     $user = new User;
    //     $user_id = Auth()->user()->id;

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->save();

    //     return redirect(route("auth.profile"));
    // }

    // public function show($name)
    // {
    //     $data = [
    //         'user' => User::where('slug', $name)->first(),
    // ]; 
    //     return view('user', $data);
    // }

    // public function edit($id)
    // {
    //     $data = [
    //         'method' => 'PUT',
    //         'route' => route('user.update', $id),
    //         'user' => User::where('id', $id)->first()
    // ];
    //     return view('auth.profile')->with('data',$data);
    // }

    // public function update(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     $user_id = Auth()->user()->id;

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->update();

    //     return redirect(route("auth.profile"));
    // }
}
