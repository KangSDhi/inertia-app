<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $title = 'User';
        $users = User::orderBy('id', 'DESC')->get();
        return Inertia::render('User/Index', [
            'title' => $title,
            'users' => $users
        ]);
    }

    public function show(User $user){
        // $user  = User::find($id);
        $title = "Profil";
        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function create()
    {
        $title = "Register";
        return Inertia::render('User/Register', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();

        #carakedua
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->input('password')),
        // ]);

        #caraketiga
        // User::create($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8'
        ]);

        #carakeempat
        $post = $request->all();
        $post['password'] = Hash::make($request->password);
        User::create($post);

        return Redirect::route('user.index')->with('message', 'User Created');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return Redirect::route('user.index')->with('message', 'User Deleted');
    }
}
