<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Pembayaran;
use PDF;

class TicketController extends Controller
{
    public function index(){
        $tiket = Ticket::all();
        $bayar = Pembayaran::all();
        return view('tiket' , ['kupon' => $tiket, 'bayaran'=>$bayar]);
    }

    public function cetak_pdf()
    {
        $tiket = Ticket::all();
        $bayar = Pembayaran::all();
    	$pdf = PDF::loadview('tiket_pdf',['kupon' => $tiket, 'bayaran'=>$bayar]);
    	return $pdf->download('Bukti-Pembayaran-pdf');
    }
}
