<?php

namespace App\Http\Controllers;

use App\Models\FormAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$form = \App\Models\FormAnswer::all();

        //$form = FormAnswer::with('form')->simplePaginate(10);
        //return view('dashboard.formhistory',['form' => $form]);

        return view('dashboard.formhistory', [
            'form_answers' => DB::table('form_answers')->paginate(10)
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
        $userId = Auth::id();
        $clientname = DB::table('users')->where('id', $userId)->pluck('name');
        $clientname = trim($clientname, '[{"id":}]');
        
        $request = new \App\Models\FormAnswer();
        $request -> clientid = $userId;
        $request -> clientname = $clientname;
        $request -> quest_one = request('quest_one');
        $request -> quest_two = request('quest_two');
        $request -> quest_three = request('quest_three');
        $request -> quest_four = request('quest_four');
        $request -> quest_five = request('quest_five');
        $request -> quest_six = request('quest_six');
        $request -> save(); 
        
        return redirect('/dashboard/formthanks')->with('suksesform', 'Data berhasil diinput !');
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
