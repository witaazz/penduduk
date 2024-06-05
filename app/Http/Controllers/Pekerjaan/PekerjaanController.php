<?php

namespace App\Http\Controllers\Pekerjaan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pekerjaan\InputPekerjaanRequest;
use Illuminate\Http\Request;
use App\Models\Pekerjaan;
use App\Models\Sektor;

class PekerjaanController extends Controller
{
    public function index()
    {
        $data['pekerjaan'] = Pekerjaan::leftJoin('sektor', 'sektor.id', '=', 'pekerjaan.id_sektor')
            ->select('pekerjaan.id', 'pekerjaan.nama_pekerjaan', 'sektor.sektor')
            ->get();
        return view('pekerjaan.index', $data);
    }

    public function tambah()
    {
        $data['sektor'] = Sektor::firstOrFail();
        return view('pekerjaan.tambah', $data);
    }

    public function proses_tambah(InputPekerjaanRequest $r)
    {
        if ($r->validated()) {
            Pekerjaan::create([
                'nama_pekerjaan' => $r->nama_pekerjaan,
                'id_sektor' => $r->sektor
            ]);
        }

        return redirect('pekerjaan');
    }

    // public function edit($id)
    // {
    //     $data['pekerjaan'] = Pekerjaan::where('id', $id)->get()->first();
    //     return view('pekerjaan.edit');
    // }

    // public function proses_edit(InputPekerjaanRequest $r, $id)
    // {
    //     if ($r->validated()) {
    //         $data['nama_pekerjaan'] = $r->nama_pekerjaan;
    //         $data['id_sektor'] = $r->sektor;

    //         Pekerjaan::where('id', $id)->update($data);
    //     }

    //     return redirect('pekerjaan');
    // }

    public function hapus($id)
    {
        Pekerjaan::where('id', $id)->delete();
        return back();
    }
}
