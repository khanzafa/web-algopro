<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $types = ['Kredit', 'Debit'];
        // return view('login.create', compact('types'));
        $user = User::all();        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                return redirect()->route('dashboard.index');
            }
        }
        return redirect()->route('login.index');
        // return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expense = Login::find($id);
        return view('expenses.show', ['expense' => $expense]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense = Login::find($id);
        return view('expenses.edit', ['expense' => $expense]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expense = Login::find($id);
        $expense->description = $request->description;
        $expense->amount = $request->amount;
        $expense->save();
        return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expense = Login::find($id);
        $expense->delete();
        return redirect()->route('expenses.index');
    }
}
