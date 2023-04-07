<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Halaman Jenis barang',
            'breadcrumb' => 'Jenis Barang',
            'jenisbarang' => JenisBarang::all()
        ];

        return view('pages.jenisbarang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Halaman Tambah Jenis Barang',
            'breadcrumb' => 'Tambah Jenis Barang',
        ];

        return view('pages.jenisbarang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisBarang::create($request->all());
        return redirect('jenisbarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisBarang $jenisbarang)
    {
        $data = [
            'title' => 'Halaman Edit Jenis Barang',
            'breadcrumb' => 'Edit Jenis barang',
            'jenisbarang' => $jenisbarang
        ];

        return view('pages.jenisbarang.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBarang $jenisbarang)
    {
        JenisBarang::where('id', $jenisbarang->id)->update($request->except('_method', '_token'));
        return redirect('jenisbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBarang $jenisbarang)
    {
        JenisBarang::destroy($jenisbarang->id);
        return redirect('jenisbarang');
    }
}
