@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-8">
    <div class="card-header py-3">
      <a href="{{ route('pengiriman.index') }}" class='btn btn-warning text-white'>Kembali</a>
    </div>
    <div class="card">
      <div class="card-body ">
        <h5 class="card-title">General Form pengiriman Perusahaan</h5>

        <!-- General Form Elements -->
        <form action="{{ route('pengiriman.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
