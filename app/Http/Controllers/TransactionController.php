<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('transactions.index', [
            'transactions' => $transactions,
        ]);
    }

    public function create(){
        $transaction = new Transaction();
        return view('transactions.create', ['transaction' => $transaction]);
    }

    public function edit(Transaction $transaction){
        return view('transactions.edit', ['transaction' => $transaction]);
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();
        return redirect()->route('transactions.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'description' => 'required',
            'amount' => 'required'
        ]);

        Transaction::create([
            'description' => $request->description,
            'amount' => $request->amount
        ]);
        
        return redirect()->route('transactions.index');
    }

    public function update(Request $request, Transaction $transaction){
        
        $request->validate([
            'description' => 'required',
            'amount' => 'required'
        ]);

        $transaction->update([
            'description' => $request->description,
            'amount' => $request->amount
        ]);
        
        return redirect()->route('transactions.index');
    }


}
