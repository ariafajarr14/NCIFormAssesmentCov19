<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function index(){
        $temperatures = Temperature::select(DB::raw("COUNT(*) as average"))
                        ->whereYear('created_at', date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('average');
        $months = Temperature::select(DB::raw("Month(created_at) as month"))
                        ->whereYear('created_at', date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month)
        {
            $datas[$month] = $temperatures[$index];
        }

        return view('/dashboard/dashboard_admin', compact('datas'));
    }
}
