<?php

namespace App\Http\Controllers\Daerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Http\Requests\Daerah\CreateKelurahanRequest;

class KelurahanController extends Controller
{
    public function index()
    {
        $data['kelurahan'] = Kelurahan::leftJoin('kecamatan', 'kecamatan.id', '=', 'kelurahan.id_kecamatan')
            ->select('kelurahan.id', 'kelurahan.nama_kelurahan', 'kecamatan.nama_kecamatan')
            ->get();
        return view('daerah.kelurahan.index', $data);
    }

    public function tambah()
    {
        $data['kecamatan'] = Kecamatan::get();
        return view('daerah.kelurahan.tambah', $data);
    }

    public function proses_tambah(CreateKelurahanRequest $r)
    {
        if ($r->validated()) {
            Kelurahan::create([
                'id_kecamatan' => $r->id_kecamatan,
                'nama_kelurahan' => $r->nama_kelurahan
            ]);

            return redirect('kelurahan');
        }
    }

    // public function edit($id)
    // {
    //     $data['kelurahan'] = Kelurahan::where('id', $id)->get()->first();
    //     return view('daerah.kecamatan.edit',$data);
    // }

    // public function proses_edit(CreateKelurahanRequest $r, $id)
    // {
    //     if ($r->validated()) {
    //         $data['id_kecamatan'] = $r->id_kecamatan;
    //         $data['nama_kelurahan'] = $r->nama_kelurahan;

    //         Kelurahan::where('id', $id)->update($data);

    //         return redirect('kelurahan');
    //     }
    // }

    public function hapus($id)
    {
        Kelurahan::where('id', $id)->delete();
        return back();
    }
}
