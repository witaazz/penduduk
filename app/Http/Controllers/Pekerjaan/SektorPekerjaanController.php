<?php

namespace App\Http\Controllers\Pekerjaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sektor;
use App\Http\Requests\Pekerjaan\CreateSektorRequest;

class SektorPekerjaanController extends Controller
{
    public function index()
    {
        $data['sektor'] = Sektor::get();
        return view('sektorpekerjaan.index', $data);
    }

    public function tambah()
    {
        return view('sektorpekerjaan.tambah');
    }

    public function proses_tambah(CreateSektorRequest $r)
    {
        if ($r->validated()) {
            Sektor::create([
                'sektor' => $r->sektor
            ]);
        }

        return redirect('sektor');
    }

    public function hapus($id)
    {
        Sektor::where('id', $id)->delete();
        return back();
    }
}
