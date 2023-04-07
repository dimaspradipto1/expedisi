<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Layanan;
use App\Models\Perusahaan;
use App\Models\Status;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Halaman Perusahaan',
            'breadcrumb' => 'Perusahaan',
            'perusahaan' => Perusahaan::all(),
        ];
        return view('pages.perusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Halaman Perusahaan',
            'breadcrumb' => 'perusahaan',
            'kelurahan' => Kelurahan::all(),
            'kecamatan' => Kecamatan::all(),
            'status' => Status::all(),
            'jenis' => JenisBarang::all(),
            'layanan' => Layanan::all()

        ];

        return view('pages.perusahaan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Perusahaan::create($request->all());

        return redirect('perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        $data = [
            'title' => 'Halaman Edit Perusahaan',
            'breadcrumb' => 'Edit perusahaan',
            'perusahaan' => $perusahaan,
            'kelurahan' => Kelurahan::all(),
            'kecamatan' => Kecamatan::all(),
            'status' => Status::all(),
            'jenis' => JenisBarang::all(),
            'layanan' => Layanan::all()
        ];

        return view('pages.perusahaan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        Perusahaan::where('id', $perusahaan->id)->update($request->except('_method', '_token'));
        return redirect('perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        Perusahaan::destroy($perusahaan->id);

        return redirect('perusahaan');
    }
}
