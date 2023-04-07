@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-10">
    <div class="card-header py-3">
      <a href="/jenisbarang" class='btn btn-warning text-white'>Kembali</a>
    </div>
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">General Form Jenis Barang Perusahaan</h5>

        <!-- General Form Elements -->
        <form action="/jenisbarang/{{ $jenisbarang->id }}" method="POST" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" value="{{ $jenisbarang->name }}">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">update</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  @endsection
