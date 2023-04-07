<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Perusahaan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(Request $request)
    {

        $perusahaan = Perusahaan::query();
        // filter by name
        $perusahaan->when($request->name, function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->name . '%');
        });

        //filter by layanan
        $perusahaan->when($request->hari_operasional, function ($query) use ($request) {
            return $query->wherelayanan_id($request->hari_operasional);
        });
        // Filter by kelurahan
        $perusahaan->when($request->kelurahan, function ($query) use ($request) {
            return $query->whereKelurahan_id($request->kelurahan);
        });
        // Filter by kecamatan
        $perusahaan->when($request->kecamatan, function ($query) use ($request) {
            return $query->whereKecamatan_id($request->kecamatan);
        });

        return view(
            'homepage.index',

            [
                'perusahaan' => $perusahaan->paginate(6),
                'kelurahan' => Kelurahan::all(),
                'kecamatan' => Kecamatan::all(),
                'layanan' => Layanan::all()

            ]
        );
    }
}
