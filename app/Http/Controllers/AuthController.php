<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        //
        return view('login');
    }

    public function postlogin(Request $request)
    {
        //
        //return view('login');
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('email','password');

        if(Auth::attempt($kredensil)){
            $user = Auth::user();
            if ($user->role == 'admin'){
                return redirect()->intended('/dashboard/dashboard_admin');
            }elseif($user->role == 'employee'){
                return redirect()->intended('/dashboard/home');
            }
            return redirect()->intended('/');
        }
        return redirect('/');
    }

    public function register()
    {
        //
        return view('register');
    }

    public function postregister(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed' //field_confirmatin
        ]);

        $user = User::create([
         'role' => 'employee',
         'name' => $request->name,
         'email' => $request->email,
         'divisi' => $request->divisi,
         'jenis_kelamin' => $request->jenis_kelamin,
         'password' => bcrypt($request->password),
         'remember_token' => Str::random(60)
        ]);

        //User Login
        Auth::loginUsingId($user->id);

        return redirect('/dashboard/home');
    }

    public function logout()
    {
        //
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
