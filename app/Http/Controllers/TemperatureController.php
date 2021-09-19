<?php

namespace App\Http\Controllers;

use App\Models\FormAnswer;
use App\Models\Temperature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TemperatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$temperature = Temperature::all();
        //return view('dashboard.temperature',['temperature' => $temperature]);

        //return view('dashboard.temperature', [
        //    'temperature' => DB::table('temperature')->paginate(10)
        //]);
        $title = "Report Temperature";
        $temperature = Temperature::all();
        $temperature = Temperature::paginate(15);
        
        return view('dashboard.temperature', compact('title','temperature'));
    }

    public function cetakTemperature()
    {

        $title = "Report Temperature";
        $temperature = Temperature::all();

        return view('dashboard.cetak_temperature', compact('title','temperature'));
    }

    public function cetakTemperaturePertanggalForm()
    {
        return view('dashboard.cetak_temperature_pertanggal_form');
    }

    public function cetakTemperaturePertanggalFormBackhome()
    {
        return view('dashboard.cetak_temperature_pertanggal_form_backhome');
    }

    public function cetakTemperaturePertanggal(Request $request)
    {
        //dd(["Tanggal Awal : ".$tanggal_awal, "Tanggal Akhir : ".$tanggal_akhir]);
        //return view('dashboard.cetak_temperature_pertanggal');
        //$temperature = Temperature::where('created_at', '>=', $tanggal_awal.' 00:00:00')->where('created_at', '<=', $tanggal_akhir.' 23:59:59');
        //return view('dashboard.cetak_temperature_pertanggal', compact('temperature'));

        $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));

        
        $title = "Laporan Data Suhu Karyawan dari Tanggal $tanggal_awal Sampai $tanggal_akhir";
        
        $temperature = Temperature::where('created_at', '>=', $tanggal_awal.' 00:00:00')->where('created_at', '<=', $tanggal_akhir.' 23:59:59')->get();
        return view('dashboard.cetak_temperature_pertanggal', compact('title', 'temperature'));

    }

    public function periode(Request $request)
    {
        
        $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
        $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));

        
        $title = "Report Temperature dari tanggal $tanggal_awal sampai tanggal $tanggal_akhir";
        
        $temperature = Temperature::where('created_at', '>=', $tanggal_awal.' 00:00:00')->where('created_at', '<=', $tanggal_akhir.' 23:59:59')->paginate(15);
        $temperature->appends($request->all());
        return view('dashboard.temperature', compact('title', 'temperature'));
    }

    public function details()
    {
        //
        $userId = Auth::id();
        $details = \App\Models\FormAnswer::All()->where('clientid', $userId);
        //return $details;
        //return view('dashboard.details',compact('details'));
        //return view('dashboard.details', ['details' => \App\Models\FormAnswer::findOrFail($userId)]);
        //return view("dashboard.details",compact("details", "userId"));
        //return view('dashboard.details')->with('details', $details);
        return view('dashboard.details', [
            'details' => DB::table('form_answers')->where('clientid', $userId)->paginate(10)
        ]);
    }

    public function detailssuhu()
    {
        //
        $userId = Auth::id();
        return view('dashboard.detailssuhu', [
            'details' => DB::table('temperature')->where('clientid', $userId)->paginate(10)
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

        $request = new \App\Models\Temperature();
        $request -> clientid = $userId;
        $request -> clientname = $clientname;
        $request -> suhu = request('suhu');
        

        if ($request->suhu >= 37.3){
            $request -> save(); 
            return redirect()->intended('/dashboard/home')->with('suhutinggi', 'Maaf Anda tidak bisa masuk kantor, karena suhu >= 37.3°C, segera lakukan investigasi dan pemeriksaan petugas kesehatan !');
        }elseif($request->suhu < 37.3){
            $request -> save(); 
            return redirect()->intended('/dashboard/formassesment')->with('suhurendah', 'Anda bisa masuk kantor, karena suhu < 37.3°C, lanjutkan dengan mengisi form assesment di bawah ini !');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function show(Temperature $temperature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function edit(Temperature $temperature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temperature $temperature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $temperature = Temperature::find($id);
        $temperature->delete($temperature);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus!');
    }
}
