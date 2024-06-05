<?php

namespace App\Http\Controllers\Daerah;

use App\Http\Controllers\Controller;
use App\Http\Requests\Daerah\CreateProvinsiRequest;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function index()
    {
        $data['provinsi'] = Provinsi::get();
        return view('daerah.provinsi.index', $data);
    }

    public function tambah()
    {
        return view('daerah.provinsi.tambah');
    }

    public function proses_tambah(CreateProvinsiRequest $r)
    {
        if ($r->validated()) {
            Provinsi::create([
                'nama_provinsi' => $r->nama_provinsi
            ]);
        }

        return redirect('provinsi');
    }

    public function hapus($id)
    {
        Provinsi::where('id', $id)->delete();
        return back();
    }
}
