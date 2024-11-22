<?php

namespace App\Http\Controllers;
use App\Models\invoice;
use App\Models\Price;
use App\Models\Transaction;
use App\Models\Profile;
use App\Models\User;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        // $invoice    = invoice::create(["Title"=>"Invoice",]);
        // $Profile    = Profile::create(["Transaction"=>"Invoice",]);
        // $User       = User::create(["Profile"=>"Invoice",]);

        // return view('invoice-create',['data' => $dara]);
        return view('Rock');
        // return view('invoice-create',['data' => $dara]);
    }
    public function store(Request $Request)
    {
// transactions
//     transaction_number
//     product_name
//     product_price
// prices
//     item_price
//     currency
//     amount
// dd($Request->all());

    invoice::create([
                        "Title"=>$Request->all()['title'],
                        "invoices_number"=>$Request->all()['invoices_number'],
                        ]);
    Price::create([
                        "item_price"=>$Request->all()['item_price'],
                        "currency"=>$Request->all()['currency'],
                        "amount"=>$Request->all()['amount'],
                        ]);
    Transaction::create([
                        "transaction_number"=>$Request->all()['transaction_number'],
                        "product_name"=>$Request->all()['product_name'],
                        "product_price"=>$Request->all()['product_price'],
                        ]); 
    }

}
// Invoice
// Transaction
// Price