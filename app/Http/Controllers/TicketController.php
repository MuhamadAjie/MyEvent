<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use PDF;

class TicketController extends Controller
{
    public function index(){
        $tiket = Ticket::all();
        return view('tiket', ['kupon'=>$tiket]);
    }

    public function cetak_pdf()
    {
    	$tiket = Ticket::all();
 
    	$pdf = PDF::loadview('tiket_pdf',['kupon'=>$tiket]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
}
