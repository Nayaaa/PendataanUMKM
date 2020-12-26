<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produk_controller extends Controller
{
    public function index()
    {
        $data_produk = \App\Models\produk_model::all();
        return view('produk.index',['data_produk' => $data_produk]);
    }

    public function tambah(Request $request)
    {
        \App\Models\produk_model::create($request->all());
        return redirect('/produk')-> with('sukses','produk berhasil didaftarkan');
    }

    public function edit($id)
    {
        $produk = \App\Models\produk_model::find($id);
        return view('produk.edit',['produk'=>$produk]);
    }

    public function update(Request $request, $id)
    {
        $produk = \App\Models\produk_model::find($id);
        $produk->update($request->all());
        return redirect('/produk')-> with('sukses','produk berhasil diupdate');
    }

    public function delete($id)
    {
        $produk = \App\Models\produk_model::find($id);
        $produk->delete();
        return redirect('/produk')-> with('sukses','produk berhasil dihapus');
    }

}
