<?php

namespace App\Http\Controllers\Daerah;

use App\Http\Controllers\Controller;
use App\Http\Requests\Daerah\CreateKecamatanRequest;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kabupaten;

class KecamatanController extends Controller
{
    public function index()
    {
        $data['kecamatan'] = Kecamatan::leftJoin('kabupaten', 'kabupaten.id', '=', 'kecamatan.id_kabupaten')
            ->select('kecamatan.id', 'kecamatan.nama_kecamatan', 'kabupaten.nama_kabupaten')
            ->get();
        return view('daerah.kecamatan.index', $data);
    }

    public function tambah()
    {
        $data['kabupaten'] = Kabupaten::get();
        return view('daerah.kecamatan.tambah', $data);
    }

    public function proses_tambah(CreateKecamatanRequest $r)
    {
        if ($r->validated()) {
            Kecamatan::create([
                'id_kabupaten' => $r->id_kabupaten,
                'nama_kecamatan' => $r->nama_kecamatan
            ]);

            return redirect('kecamatan');
        }
    }

    // public function edit($id)
    // {
    //     $data['kecamatan'] = Kecamatan::where('id',$id)->get()->first();
    //     return view('daerah.kecamatan.edit',$data);
    // }

    // public function proses_edit(CreateKecamatanRequest $r, $id)
    // {
    //     if ($r->validated()) {
    //         $data['id_kabupaten'] = $r->id_kabupaten;
    //         $data['nama_kecamatan'] = $r->nama_kecamatan;

    //         Kecamatan::where('id', $id)->update($data);

    //         return redirect('kecamatan');
    //     }
    // }

    public function hapus($id)
    {
        Kecamatan::where('id', $id)->delete();
        return back();
    }
}
