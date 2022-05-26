<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Carbon;

class AdminStatisticsController extends Controller
{
    //
    public function index()
    {
        return view('admin.statistics.index');
    }
    public function getStatistics(Request $request)
    {
        if($request->ajax())
        {
            $statistical_date_start = date("Y-m-d H:i:s", strtotime($request->statistical_date_start));
            $statistical_date_end = date("Y-m-d H:i:s", strtotime($request->statistical_date_end));
            $transactions = Transaction::whereBetween('updated_at',[$request->statistical_date_start,$request->statistical_date_end])->get();
            $html = view('admin.statistics.listStatistics',['transactions'=>$transactions,'statistical_date_start'=>$statistical_date_start,'statistical_date_end'=>$statistical_date_end])->render();
            return response()->json($html);
        }
        dd("Lỗi");
    }
    public function exportPdf(Request $request)
    {  
        $day = Carbon::now()->day;
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $transactions = Transaction::whereBetween('updated_at',[$request->statistical_date_start_pdf,$request->statistical_date_end_pdf])->get();
        $data = [
            'transactions' => $transactions,
            'statistical_date_start'=>$request->statistical_date_start_pdf,
            'statistical_date_end'=>$request->statistical_date_end_pdf,
            'day' => $day,
            'month' => $month,
            'year' => $year
        ];	
        $pdf = \PDF::loadView('admin.statistics.testpdf-pdf', $data);
        return $pdf->download('statistical'.$request->statistical_date_start_pdf.'to'.$request->statistical_date_end_pdf.'.pdf');
        // return view('admin::components.testpdf-pdf',$data);
    }
}
