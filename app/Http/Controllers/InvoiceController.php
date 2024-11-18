<?php

namespace App\Http\Controllers;
use App\Models\invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index()
    {
        
        $data = invoice::all();

            // $data = 'status';
        $risk = ['amount' => 100, 'currency' => 'USD'];
        return view('invoices',['data' => $data]);
    }
    public function Newuser()
    {
        $dara  = invoice::create(["Title"=>"Invoice",'id'   => 3]);
        return view('invoice-create',['data' => $dara]);
    }
}
