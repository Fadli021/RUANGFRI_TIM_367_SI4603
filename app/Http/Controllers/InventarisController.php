<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        return view('inventaris.index');
    }

    public function create()
    {
        return view('inventaris.create');
    }

    public function store(Request $request)
    {
        // Logic to store the inventaris data
        return redirect()->route('inventaris.index');
    }

    public function edit($id)
    {
        return view('inventaris.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update the inventaris data
        return redirect()->route('inventaris.index');
    }

    public function destroy($id)
    {
        // Logic to delete the inventaris data
        return redirect()->route('inventaris.index');
    }
}
