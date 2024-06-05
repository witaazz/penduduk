<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\CreateKKRequest;
use App\Http\Requests\Penduduk\UpdateKKRequest;
use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use Illuminate\Support\Facades\File;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        // Ambil data kartu keluarga dan hitung jumlah anggotanya
        $data['kk'] = KartuKeluarga::withCount('penduduk')->get();

        return view('kk.index', $data);
    }

    public function tambah()
    {
        return view('kk.tambah');
    }

    public function proses_tambah(CreateKKRequest $r)
    {
        if ($r->validated()) {
            $foto = $r->foto_kk->getClientOriginalName();
            $r->foto_kk->move('foto/', $foto);

            KartuKeluarga::create([
                'nokk' => $r->nokk,
                'foto_kk' => $foto
            ]);
        }

        return redirect('kartukeluarga');
    }

    public function edit($id)
    {
        $data['kk'] = KartuKeluarga::where('id', $id)->get()->first();
        return view('kk.edit', $data);
    }

    public function proses_edit(UpdateKKRequest $r, $id)
    {
        if ($r->validated()) {
            if ($r->foto_kk) {
                $cek = KartuKeluarga::where('id', $id)->get()->first();
                if (FIle::exists(public_path('foto/' . $cek->foto_kk))) {
                    File::delete(public_path('foto/' . $cek->foto));
                }

                $foto = $r->foto_kk->getClientOriginalName();
                $r->foto_kk->move('foto/', $foto);
                $data['foto_kk'] = $foto;
            }

            $data['nokk'] = $r->nokk;

            KartuKeluarga::where('id', $id)->update($data);
        }

        return redirect('kartukeluarga');
    }

    public function hapus($id)
    {
        KartuKeluarga::where('id', $id)->delete();
        return back();
    }
}
