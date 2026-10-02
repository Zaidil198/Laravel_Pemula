<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class MatkulController extends Controller
{
    public function Index(): View
    {
        $matakuliah = Matkul::all();

        return view('matakuliah.index', 
        compact('matakuliah'));
    }

    public function create(): View
    {
        return view('matakuliah.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kode_matakuliah' => [
                'required',
                'string',
                'max:20',
                Rule::unique('matakuliah', 'kode_matakuliah'),
        ],
        'nama_matakuliah' => ['required', 'string','max:100'],
        'dosen' => ['required', 'string','max:100'],
        'SKS' => ['required', 'integer','min:1', 'max:10'],
        'semester' => ['required', 'integer','min:1', 'max:10'],
        ]);

        Matkul::create($validated);

        return redirect()
            ->route('matakuliah.index')
            ->with ('success','Data matakuliah berhasil ditambahkan.');
    }

    public function edit(Matkul $matakuliah): View
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matkul $matakuliah): RedirectResponse
    {
        $validated = $request->validate([
            'kode_matakuliah' => [
                'required',
                'string',
                'max:20',
                Rule::unique('matakuliah', 'kode_matakuliah')->ignore($matakuliah->id),
        ],
        'nama_matakuliah' => ['required', 'string','max:100'],
        'dosen' => ['required', 'string','max:100'],
        'SKS' => ['required', 'integer','min:1', 'max:10'],
        'semester' => ['required', 'integer','min:1', 'max:10'],

        ]);

        $matakuliah->update($validated);

        return redirect()
            ->route('matakuliah.index')
            ->with ('success','Data matakuliah berhasil diubah.');
    }

    public function destroy(Matkul $matakuliah): RedirectResponse
    {
        $matakuliah->delete();

        return redirect()
            ->route('matakuliah.index')
            ->with ('success','Data matakuliah berhasil dihapus.');
    }
}