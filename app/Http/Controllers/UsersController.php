<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $rows = Users::all();

        return view('auth/user.index', compact('rows'));
    }

    public function create()
    {
        return view('auth/user.create');
    }

    public function store(Request $request)
    {
        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password')
        ]);

        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Users::find($id);
        return view('auth/user.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Users::findOrFail($id);
        $row->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password')
        ]);

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Users::findOrFail($id);

        $row->delete();

        return redirect('users');
    }
}
