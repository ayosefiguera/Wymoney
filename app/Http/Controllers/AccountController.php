<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;


class AccountController extends Controller
{
    

    public function index(){

        $accounts = Account::all();
    
        return view('accounts.index', ['accounts' => $accounts]);
    }

    public function edit(Account $account){
    
        return view('accounts.edit', ['account' => $account]);
    }

    public function create(){

        $account = new Account();
        return view('accounts.create', ['account' => $account]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'iban' => 'required|unique:accounts,iban'
        ]);
        
        Account::create([
            'name' => $request->name,
            'iban' => $request->iban,
            'is_active' => true
        ]);


        return redirect()->route('accounts.index');
    }

    public function destroy(Account $account){

        $account->delete();
        return redirect()->route('accounts.index');
    }

    public function update(Request $request, Account $account){

        $request->validate([
            'name' => 'required',
            'iban' => 'required|unique:accounts,iban'
        ]);
        
        $account->update([
            'name' => $request->name,
            'iban' => $request->iban,
        ]);


        return redirect()->route('accounts.index');
    }



}
