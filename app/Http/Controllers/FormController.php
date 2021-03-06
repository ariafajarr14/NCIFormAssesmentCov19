<?php

namespace App\Http\Controllers;

use App\Models\FormAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\CursorPaginator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Report Assesment";
        $form_answers = FormAnswer::all();
        $form_answers = FormAnswer::paginate(15);
        
        return view('dashboard.formhistory', compact('title','form_answers'));
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
        
        $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));
        
        $title = "Report Assesment dari tanggal $tanggal_awal sampai tanggal $tanggal_akhir";
        
        $form_answers = FormAnswer::where('created_at', '>=', $tanggal_awal.' 00:00:00')->where('created_at', '<=', $tanggal_akhir.' 23:59:59')->paginate(15);
        $form_answers->appends($request->all());
        return view('dashboard.formhistory', compact('title', 'form_answers'));
    }

    public function cetakAssesmentForm(){
        return view('dashboard.cetak_assesment_form');
    }
    public function cetakAssesmentFormBackhome(){
        return view('dashboard.cetak_assesment_form_backhome');
    }

    public function cetakAssesmentAll(){
        $title = "Report Formulir Assesment Covid-19";
        $form_answers = FormAnswer::all();

        return view('dashboard.cetak_assesment_all', compact('title','form_answers'));
    }

    public function cetakAssesmentPertanggal(Request $request){
        $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));
        
        $title = "Laporan Data Self Assesment Covid-19 Karyawan dari Tanggal $tanggal_awal Sampai $tanggal_akhir";
        
        $form_answers = FormAnswer::where('created_at', '>=', $tanggal_awal.' 00:00:00')->where('created_at', '<=', $tanggal_akhir.' 23:59:59')->get();
        return view('dashboard.cetak_assesment_pertanggal', compact('title', 'form_answers'));
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
