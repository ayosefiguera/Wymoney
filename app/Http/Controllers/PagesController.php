<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;

class PagesController extends Controller
{
    public function home(){
        $accounts = Account::all();
        $transactions = Transaction::latest()->paginate(10);;
        return view('home')
        ->with(['accounts'=>$accounts])
        ->with(['transactions'=>$transactions]);
    }
}
