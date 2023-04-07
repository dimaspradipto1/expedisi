<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Halaman Kelurahan',
            'breadcrumb' => 'Kelurahan',
            'kelurahan' => Kelurahan::all()
        ];

        return view('pages.kelurahan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'tambah Kelurahan',
            'breadcrumb' => 'Kelurahan',
        ];
        return view('pages.kelurahan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelurahan::create($request->all());
        return redirect('kelurahan');
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
    public function edit(Kelurahan $kelurahan)
    {
        $data = [
            'title' => 'Edit Kelurahan',
            'breadcrumb' => 'Edit Kelurahan',
            'kelurahan' => $kelurahan
        ];
        return view('pages.kelurahan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {

        Kelurahan::where('id', $kelurahan->id)->update($request->except('_method', '_token'));

        return redirect('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelurahan $kelurahan)
    {
        Kelurahan::destroy($kelurahan->id);
        return redirect('kelurahan');
    }
}
