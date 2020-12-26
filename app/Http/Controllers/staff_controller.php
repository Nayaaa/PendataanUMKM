<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staff_controller extends Controller
{
    public function index()
    {
        $data_staff = \App\Models\staff_model::all();
        return view('staff.index',['data_staff' => $data_staff]);
    }

    public function tambah(Request $request)
    {
        \App\Models\staff_model::create($request->all());
        return redirect('/staff')-> with('sukses','Staff berhasil didaftarkan');
    }

    public function edit($id)
    {
        $staff = \App\Models\staff_model::find($id);
        return view('staff.edit',['staff'=>$staff]);
    }

    public function update(Request $request, $id)
    {
        $staff = \App\Models\staff_model::find($id);
        $staff->update($request->all());
        return redirect('/staff')-> with('sukses','Staff berhasil diupdate');
    }

    public function delete($id)
    {
        $staff = \App\Models\staff_model::find($id);
        $staff->delete();
        return redirect('/staff')-> with('sukses','Staff berhasil dihapus');
    }
}
