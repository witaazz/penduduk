<?php

namespace App\Http\Controllers\Daerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kabupaten;
use App\Models\Provinsi;
use App\Http\Requests\Daerah\CreateKabupatenRequest;

class KabupatenController extends Controller
{
    public function index()
    {
        $data['kabupaten'] = Kabupaten::leftJoin('provinsi', 'provinsi.id', '=', 'kabupaten.id_provinsi')
            ->select('kabupaten.id', 'kabupaten.nama_kabupaten', 'provinsi.nama_provinsi')
            ->get();
        return view('daerah.kabupaten.index', $data);
    }

    public function tambah()
    {
        $data['provinsi'] = Provinsi::get();
        return view('daerah.kabupaten.tambah', $data);
    }

    public function proses_tambah(CreateKabupatenRequest $r)
    {
        if ($r->validated()) {
            Kabupaten::create([
                'id_provinsi' => $r->id_provinsi,
                'nama_kabupaten' => $r->nama_kabupaten
            ]);

            return redirect('kabupaten');
        }
    }

    // public function edit($id)
    // {
    //     $data['kabupaten'] = Kabupaten::where('id', $id)->get()->first();
    //     return view('daerah.kabupaten.edit',$data);
    // }

    // public function proses_edit(CreateKabupatenRequest $r, $id)
    // {
    //     if ($r->validated()) {
    //         $data['id_provinsi'] = $r->id_provinsi;
    //         $data['nama_kabupaten'] = $r->nama_kabupaten;

    //         Kabupaten::where('id', $id)->update($data);

    //         return redirect('kabupaten');
    //     }
    // }

    public function hapus($id)
    {
        Kabupaten::where('id', $id)->delete();
        return back();
    }
}
