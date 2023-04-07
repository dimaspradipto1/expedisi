<?php

namespace App\Http\Controllers;

use App\Models\Pengirimans;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Halaman Pengirimans',
            'breadcrumb' => 'Pengirimans',
            'pengiriman' => Pengirimans::all(),
        ];

        return view('pages.pengiriman.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Halaman Tambah Pengirimans',
            'breadcrumb' => 'Pengirimans',

        ];
        return view('pages.pengiriman.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengirimans::create($request->all());
        return redirect('pengiriman');
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
    public function edit(Pengirimans $pengirimans, Request $request)
    {

        $data = [
            'title' => 'Edit pengirimans',
            'breadcrumb' => 'Edit pengirimans',
            'pengiriman' => $pengirimans,
        ];
        return view('pages.pengiriman.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengirimans $pengirimans)
    {

        // Pengirimans::where('id', $pengirimans->id)->update($request->all());
        // return redirect('pengirimanss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengirimans $pengirimans)
    {
        Pengirimans::destroy($pengirimans->id);
        return redirect('pengiriman');
    }
}
