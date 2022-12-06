<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LokerController extends Controller
{
    public function index()
    {
        $dataLoker = Loker::orderBy('id', 'DESC')->paginate(9);
        return view('pages.loker.index', compact('dataLoker'));
    }

    public function create()
    {
        return view('pages.loker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'loker' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;
        Loker::create($request->all());

        Alert::success('Berhasil!', 'Loker Berhasil Ditambahkan');
        
        return redirect()->route('admin.loker');
    }

    public function show(Loker $loker)
    {
        //
    }

    public function edit(Loker $loker)
    {
        return view('pages.loker.edit', compact('loker'));
    }

    public function update(Request $request, Loker $loker)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'loker' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;
        $loker->update($request->all());

        Alert::success('Berhasil!', 'Loker Berhasil Diperbarui');

        return redirect()->route('admin.loker');
    }

    public function destroy(Loker $loker)
    {
        $loker->delete();

        Alert::success('Berhasil!', 'Loker Berhasil Dihapus');
        
        return redirect()->back();
    }
}
