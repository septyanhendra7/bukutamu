<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
        return view('tamu.index');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'nama' => 'string|regex:/^[a-zA-Z\s]+$/',
        'no_hp' => 'required|string|regex:/^8\d{9,14}$/',
        'asal_daerah' => 'required|string',
        'asal_daerah_custom' => 'nullable|string|max:255|regex:/^[a-zA-Z\s]+$/',
    ]);

     // Tambahkan "+62" di depan nomor hp
    $noHp = +62 . $request->input('no_hp');

    //Mengatur Input agar Capitalize dan lower case
    $validatedData['nama'] = ucwords(strtolower($validatedData['nama']));
    $validatedData['asal_daerah_custom'] = ucwords(strtolower($validatedData['asal_daerah_custom']));
    

    


    $tamu = new Tamu();
    $tamu->nama = $validatedData['nama'];
    $tamu->no_hp = $noHp;
    $tamu->asal_daerah = $validatedData['asal_daerah'];

    

    // Jika pengguna memilih other maka data yang diinputkan dari asal daerah custom
    if ($validatedData['asal_daerah'] === 'other') {
        $tamu->asal_daerah = $validatedData['asal_daerah_custom'];
    }

    

    

    $tamu->save();

    return redirect()->back()->with('success', 'Data tamu berhasil disimpan.');
    }

    public function admin()
    {
    $data_tamu = Tamu::all();

    return view('admin.index', compact('data_tamu'));
    }

    public function destroy($id)
    {
    $tamu = Tamu::findOrFail($id);
    $tamu->delete();

    return redirect()->route('admin')->with('success', 'Data tamu berhasil dihapus');
    }

    public function edit($id)
    {
    $tamu = Tamu::findOrFail($id);
    return view('admin.edit', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input data
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|string',
            'asal_daerah' => 'required|string',
        ]);

        // CARI TAMU BERDASARKAN ID
        $tamu = Tamu::find($id);

        if (!$tamu) {
            // DATA TAMU TIDAK DITEMUKAN
            return redirect()->route('admin')->with('error', 'Data tamu tidak ditemukan');
        }

        // ubah inputan nama dan asal daerah jadi Capitalize dan Lowercase
        $validatedData['nama'] = ucwords(strtolower($validatedData['nama']));
        $validatedData['asal_daerah'] = ucwords(strtolower($validatedData['asal_daerah']));

        // Update DATA TAMU
        $tamu->nama = $validatedData['nama'];
        $tamu->no_hp = $validatedData['no_hp'];
        $tamu->asal_daerah = $validatedData['asal_daerah'];
        $tamu->save();

        return redirect()->route('admin')->with('success', 'Data tamu berhasil diperbarui');
    }



    

}