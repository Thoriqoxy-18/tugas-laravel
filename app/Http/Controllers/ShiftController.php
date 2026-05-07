<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('shifts.index', compact('shifts'));
    }

    public function create()
    {
        return view('shifts.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'nama_shift' => 'required',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required'
    ], [
        'nama_shift.required' => 'Nama shift wajib diisi!',
        'jam_mulai.required' => 'Jam mulai wajib diisi!',
        'jam_selesai.required' => 'Jam selesai wajib diisi!'
    ]);

    Shift::create($request->all());

    return redirect()->route('shifts.index')
        ->with('success', 'Data berhasil ditambahkan!');
}

    public function edit($id)
    {
        $shift = Shift::findOrFail($id);
        return view('shifts.edit', compact('shift'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'nama_shift' => 'required',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required'
    ]);

    $shift = Shift::findOrFail($id);
    $shift->update($request->all());

    return redirect()->route('shifts.index')
        ->with('success', 'Data berhasil diupdate!');
}
    public function destroy($id)
    {
        Shift::destroy($id);
        return redirect()->route('shifts.index');
    }
}
