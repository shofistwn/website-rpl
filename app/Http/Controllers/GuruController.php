<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Exports\GuruExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class GuruController extends Controller
{
    public function index()
    {
        $dataGuru = Guru::get();
        return view('pages.guru.index', compact('dataGuru'));
    }

    public function create()
    {
        return view('pages.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'komli' => 'required|string',
            'telepon' => 'unique:guru,telepon|numeric'
        ]);

        $foto = $request->file('foto');
        $namaFoto = time() . $foto->hashName();
        $foto->storeAs('public/guru', $namaFoto);

        Guru::create([
            'user_id' => auth()->user()->id,
            'foto' => $namaFoto,
            'nama' => $request->nama,
            'komli' => $request->komli,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        Alert::success('Berhasil!', 'Guru Berhasil Ditambahkan');

        return redirect()->route('guru.index');
    }

    public function show(Guru $guru)
    {
        return view('pages.guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('pages.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'komli' => 'required|string',
            'telepon' => 'required|numeric',
        ]);

        if ($request->file('foto') == "") {
            $guru->update([
                'user_id' => auth()->user()->id,
                'nama' => $request->nama,
                'komli' => $request->komli,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
            ]);
        } else {
            Storage::disk('local')->delete('public/public/guru/' . $guru->foto);

            $foto = $request->file('foto');
            $namaFoto = time() . $foto->hashName();
            $foto->storeAs('public/guru', $namaFoto);

            $guru->update([
                'user_id' => auth()->user()->id,
                'foto' => $namaFoto,
                'nama' => $request->nama,
                'komli' => $request->komli,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
            ]);
        }

        Alert::success('Berhasil!', 'Guru Berhasil Diperbarui');

        return redirect()->route('guru.index');
    }

    public function destroy(Guru $guru)
    {
        Storage::disk('local')->delete('public/public/guru/' . $guru->foto);
        $guru->delete();

        Alert::success('Berhasil!', 'Guru Berhasil Dihapus');

        return redirect()->route('guru.index');
    }

    public function export() 
    {
        return Excel::download(new GuruExport, 'data-guru.xlsx');
    }

    public function pdf()
    {
        $dataGuru = Guru::get();

        $pdf = PDF::loadView('pages.guru.pdf', ['dataGuru' => $dataGuru]);
        $pdf->set_paper('a4', 'landscape');
        
        return $pdf->download('data-guru.pdf');
    }
}
