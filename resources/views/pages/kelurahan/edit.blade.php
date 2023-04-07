@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-8">
    <div class="card-header py-3">
      <a href="/kelurahan" class='btn btn-warning text-white'>Kembali</a>
    </div>
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">General Form kelurahan Perusahaan</h5>

        <!-- General Form Elements -->
        <form action="/kelurahan/{{ $kelurahan->id }}" method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" value="{{ $kelurahan->name }}">
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
