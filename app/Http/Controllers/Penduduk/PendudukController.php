<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use App\Http\Requests\Penduduk\CreatePendudukRequest;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data['penduduk'] = Penduduk::leftJoin('provinsi', 'provinsi.id', '=', 'penduduk.id_provinsi')
            ->leftJoin('kabupaten', 'kabupaten.id', '=', 'penduduk.id_kabupaten')
            ->leftJoin('kecamatan', 'kecamatan.id', '=', 'penduduk.id_kecamatan')
            ->leftJoin('kelurahan', 'kelurahan.id', '=', 'penduduk.id_kelurahan')
            ->leftJoin('pekerjaan', 'pekerjaan.id', '=', 'penduduk.id_pekerjaan')
            ->select('penduduk.*', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'kecamatan.nama_kecamatan', 'kelurahan.nama_kelurahan', 'pekerjaan.nama_pekerjaan')
            ->get();
        return view('penduduk.index', $data);
    }

    public function detail($id)
    {
        $data['penduduk'] = Penduduk::leftJoin('provinsi', 'provinsi.id', '=', 'penduduk.id_provinsi')
            ->leftJoin('kabupaten', 'kabupaten.id', '=', 'penduduk.id_kabupaten')
            ->leftJoin('kecamatan', 'kecamatan.id', '=', 'penduduk.id_kecamatan')
            ->leftJoin('kelurahan', 'kelurahan.id', '=', 'penduduk.id_kelurahan')
            ->leftJoin('kartu_keluarga', 'kartu_keluarga.nokk', '=', 'penduduk.nokk')
            ->leftJoin('pekerjaan', 'pekerjaan.id', '=', 'penduduk.id_pekerjaan')
            ->select('penduduk.*', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'kecamatan.nama_kecamatan', 'kelurahan.nama_kelurahan', 'pekerjaan.nama_pekerjaan')
            ->where('penduduk.id', $id)->get()->first();
        return view('penduduk.detail', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        if ($cari != '') {
            $data['penduduk'] = Penduduk::where('nik', 'like', '%' . $cari . '%')
                ->orWhere('nama_lengkap', 'like', '%' . $cari . '%')
                ->get();
        } else {
            $data['penduduk'] = Penduduk::get();
        }
        return view('penduduk.index', $data);
    }

    public function tambah()
    {
        $data = [
            'pekerjaan' => Pekerjaan::get(),
            'provinsi' => Provinsi::get(),
            'kabupaten' => Kabupaten::get(),
            'kecamatan' => Kecamatan::get(),
            'kelurahan' => Kelurahan::get(),
            'kk' => KartuKeluarga::get()
        ];
        return view('penduduk.tambah', $data);
    }

    public function proses_tambah(CreatePendudukRequest $r)
    {
        if ($r->validated()) {
            Penduduk::create([
                'nik' => $r->nik,
                'nokk' => $r->nokk,
                'nama_lengkap' => $r->nama_lengkap,
                'tempat_lahir' => $r->tempat_lahir,
                'tanggal_lahir' => $r->tanggal_lahir,
                'jenis_kelamin' => $r->jenis_kelamin,
                'agama' => $r->agama,
                'goldar' => $r->goldar,
                'pendidikan_terakhir' => $r->pendidikan_terakhir,
                'id_pekerjaan' => $r->pekerjaan,
                'status_pernikahan' => $r->status_pernikahan,
                'id_provinsi' => $r->id_provinsi,
                'id_kabupaten' => $r->id_kabupaten,
                'id_kecamatan' => $r->id_kecamatan,
                'id_kelurahan' => $r->id_kelurahan,
            ]);
        }
        return redirect('penduduk');
    }

    public function edit($id)
    {
        $data = [
            'penduduk' => Penduduk::where('id', $id)->get()->first(),
            'pekerjaan' => Pekerjaan::get(),
            'provinsi' => Provinsi::get(),
            'kabupaten' => Kabupaten::get(),
            'kecamatan' => Kecamatan::get(),
            'kelurahan' => Kelurahan::get(),
            'kk' => KartuKeluarga::get()
        ];
        return view('penduduk.edit', $data);
    }

    public function proses_edit(CreatePendudukRequest $r, $id)
    {
        Penduduk::where('id', $id)->get()->first();
        if ($r->validated()) {
            $data['nik'] = $r->nik;
            $data['nokk'] = $r->nokk;
            $data['nama_lengkap'] = $r->nama_lengkap;
            $data['tempat_lahir'] = $r->tempat_lahir;
            $data['tanggal_lahir'] = $r->tanggal_lahir;
            $data['jenis_kelamin'] = $r->jenis_kelamin;
            $data['agama'] = $r->agama;
            $data['goldar'] = $r->goldar;
            $data['pendidikan_terakhir'] = $r->pendidikan_terakhir;
            $data['id_pekerjaan'] = $r->pekerjaan;
            $data['status_pernikahan'] = $r->status_pernikahan;
            $data['id_provinsi'] = $r->id_provinsi;
            $data['id_kabupaten'] = $r->id_kabupaten;
            $data['id_kecamatan'] = $r->id_kecamatan;
            $data['id_kelurahan'] = $r->id_kelurahan;


            Penduduk::where('id', $id)->update($data);
        }
        return redirect('penduduk');
    }

    public function hapus($id)
    {
        Penduduk::where('id', $id)->delete();
        return back();
    }

    public function getKabupaten($id)
    {
        $kabupaten = Kabupaten::where('id_provinsi', $id)->pluck('nama_kabupaten', 'id');
        return response()->json($kabupaten);
    }

    public function getKecamatan($id)
    {
        $kecamatan = Kecamatan::where('id_kabupaten', $id)->pluck('nama_kecamatan', 'id');
        return response()->json($kecamatan);
    }

    public function getKelurahan($id)
    {
        $kelurahan = Kelurahan::where('id_kecamatan', $id)->pluck('nama_kelurahan', 'id');
        return response()->json($kelurahan);
    }
}
