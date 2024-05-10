<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $types = ['Kredit', 'Debit'];
        // return view('login.create', compact('types'));
        return view('register.index');
    }    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {            
        $user = new User();
        $user->name = $request->name;
        $user->prodi = $request->prodi;
        $user->nit = $request->nit;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $expense = Login::find($id);
        // return view('expenses.show', ['expense' => $expense]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        // $expense = Login::find($id);
        // return view('expenses.edit', ['expense' => $expense]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $expense = Login::find($id);
        // $expense->description = $request->description;
        // $expense->amount = $request->amount;
        // $expense->save();
        // return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $expense = Login::find($id);
        // $expense->delete();
        // return redirect()->route('expenses.index');
    }
}
