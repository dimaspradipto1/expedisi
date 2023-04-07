@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-8">
    <div class="card-header py-3">
      <a href="/layanan" class='btn btn-warning text-white'>Kembali</a>
    </div>
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">General Form Layanan Perusahaan</h5>

        <!-- General Form Elements -->
        <form action="/layanan/{{ $layanan->id }}" method="POST" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Hari Operasional</label>
            <div class="col-sm-10">
              <input type="text" name="hari_operasional" class="form-control" value="{{ $layanan->hari_operasional }}">
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
