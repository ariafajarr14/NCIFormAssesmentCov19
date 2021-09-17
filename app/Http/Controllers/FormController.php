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
        $form_answers = FormAnswer::all();
        $form_answers = FormAnswer::paginate(5);
        
        return view('dashboard.formhistory', compact('form_answers'));
        //$form = FormAnswer::with('form')->simplePaginate(10);
        //return view('dashboard.formhistory',['form' => $form]);

        //return view('dashboard.formhistory', [
        //    'form_answers' => DB::table('form_answers')->paginate(10)
        //]);
    }

    public function index2()
    {
        return view('dashboard.formthanks');
    }

    public function details()
    {
        //
        $userId = Auth::id();
        $form_answers = \App\Models\FormAnswer::all()->where('clientid', $userId);
        return view('dashboard.details')->with('formanswer', $form_answers);
    }

    public function periode(Request $request)
    {
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        $title = "List dari tanggal $tanggal_awal sampai tanggal $tanggal_akhir";
        $form_answers = FormAnswer::where('created_at', '>=', $tanggal_awal)->where('created_at', '<=', $tanggal_akhir)->get();

        return view('dashboard.formhistory', compact('title', 'form_answers'));
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
        $request -> hasil = request('quest_one') + request('quest_two') + request('quest_three') + request('quest_four') + request('quest_five') + request('quest_six');
        

        if ($request -> hasil > 5){
            $keterangan  = 'Resiko Besar';
        } elseif ($request -> hasil >=1 && $request -> hasil <=4){
            $keterangan = 'Resiko Sedang';
        } else {
            $keterangan = 'Resiko Kecil';
        }

        $request -> keterangan = request('keterangan', $keterangan);

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
        $form_answers = FormAnswer::find($id);
        $form_answers->delete($form_answers);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus!');
    }
}
