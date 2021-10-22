<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
        
        //request()->validate(
        //    [
        //        'nik_id' => 'required|min:10',
        //        'password' => 'required',
        //    ]);

        $rules = [
            'nik_id'                 => 'required|min:10',
            'password'              => 'required'
        ];
 
        $messages = [
            'nik_id.required'        => 'NIK wajib diisi',
            'nik_id.min'           => 'NIK Anda tidak valid',
            'password.required'     => 'Password wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'nik_id'     => $request->input('nik_id'),
            'password'  => $request->input('password'),
        ];
 
        Auth::attempt($data);
 
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            $user = Auth::user();
            if ($user->role == 'admin'){
                return redirect()->intended('/dashboard/dashboard_admin');
            }elseif($user->role == 'employee'){
                return redirect()->intended('/dashboard/home')->with('welcomeback', 'Selamat datang kembali');
            }
 
        } else { // false
 
            //Login Fail
            Session::flash('error', 'NIK atau password salah');
            return redirect()->route('login');
        }

       // $kredensil = $request->only('nik_id','password');

        //if(Auth::attempt($kredensil)){
         //   $user = Auth::user();
         //   if ($user->role == 'admin'){
         //       return redirect()->intended('/dashboard/dashboard_admin');
         //   }elseif($user->role == 'employee'){
         //       return redirect()->intended('/dashboard/home');
         //   }
         //   return redirect()->intended('/');
       // }
       // return redirect('/');
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
            'nik_id' => 'required|min:10|unique:users',
            //'password' => 'required|min:6|confirmed' //field_confirmatin
        ]);

        $user = User::create([
         'nik_id' => $request->nik_id,
         'role' => 'employee',
         'name' => $request->name,
         'divisi' => $request->divisi,
         'jenis_kelamin' => $request->jenis_kelamin,
         'password' => bcrypt($request->nik_id),
         'remember_token' => Str::random(60)
        ]);

        //User Login
        Auth::loginUsingId($user->id);

        return redirect('/dashboard/home')->with('userdibuat', 'Selamat Anda Sudah Terdaftar');
    }

    public function postregisteruserlist(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|min:5',
            'nik_id' => 'required|min:10|unique:users',
            //'password' => 'required|min:6|confirmed' //field_confirmatin
        ]);

        $request = new \App\Models\User();
        $request -> nik_id = request('nik_id');
        $request -> role = 'employee';
        $request -> name = request('name');
        $request -> divisi = request('divisi');
        $request -> jenis_kelamin = request('jenis_kelamin');
        $request -> password = bcrypt(request('password'));
        $request -> remember_token = Str::random(60);

        if ($request->save()) {
            return redirect()->back()->with('userdibuatuserlist','Berhasil Menambahkan User'); 
       } else {
            return redirect()->back()->with('userdibuatuserlisterror','Gagal Menambahkan User');
       }
    }

    public function profileindex()
    {
        //
        $userId = Auth::id();
        $user = \App\Models\User::all()->where('id', $userId);
        return view('dashboard.profile', ['users' => $user]);
    }

    public function updateprofile(Request $request)
    {
        $userId = Auth::id();
        $request = User::all()->where('id', $userId)->first();
        $request -> name = request('name');
        $request -> divisi = request('divisi');
        $request -> jenis_kelamin = request('jenis_kelamin');
        $request -> save(); 

        $user = User::all()->where('id', $userId);
        return redirect()->back()->with('updateprofile', 'User Profile berhasil diubah!');
    
    }

    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed' //field_confirmatin
        ]);

        $password = request('password');
        $password_confirmation = request('password_confirmation');
        
        if($password == $password_confirmation){
        $userId = Auth::id();
        $request = User::all()->where('id', $userId)->first();
        $request -> password = bcrypt(request('password'));
        $request -> save(); 
        }
    
        return redirect()->back()->with('updateprofile', 'Password berhasil diubah!');
    }

    public function logout()
    {
        //
        Auth::logout();
        return redirect('/');
    }

    public function destroy($id)
    {
        //

        $user = User::find($id);
        $user->delete($user);
        return redirect()->back()->with('hapususer', 'User berhasil dihapus!');
    }

    public function userlist()
    {
        //
        return view('dashboard.userlist', [
            'users' => DB::table('users')->paginate(10)
        ]);
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
    
}
