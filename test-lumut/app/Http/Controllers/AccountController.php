<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:account',
            'name' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        Account::create($data);

        return redirect()->route('accounts.index')->with('success', 'Account created successfully');
    }

    public function show($username)
    {
        $account = Account::findOrFail($username);
        return view('accounts.show', compact('account'));
    }

    public function edit($username)
    {
        $account = Account::findOrFail($username);
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $username)
    {
        $account = Account::findOrFail($username);
        $data = $request->all();
        $account->update($data);
        return redirect()->route('accounts.index');
    }

    public function destroy($username)
    {
        $account = Account::findOrFail($username);
        $account->delete();
        return redirect()->route('accounts.index');
    }
}
