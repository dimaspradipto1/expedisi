@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-8">
    <div class="card-header py">
      <a href="/perusahaan" class='btn btn-warning text-white'>Kembali</a>
    </div>

    <div class="card-body ">
      <h5 class="card-title">General Form Data Perusahaan</h5>

      <!-- General Form Elements -->
      <form action="{{ route('perusahaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">nama</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">alamat</label>
          <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">No telp</label>
          <div class="col-sm-10">
            <input type="text" name="no_telp" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">No fax</label>
          <div class="col-sm-10">
            <input type="text" name="no_fax" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">tahun</label>
          <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">pengiriman</label>
          <div class="col-sm-10">
            <select class="form-select" name="pengiriman" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              <option value="Dalam Negeri">Dalam Negeri</option>
              <option value="Luar Negeri">Luar Negeri</option>
              <option value="Dalam Negeri dan Luar Negeri">Dalam Negeri dan Luar Negeri</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">kelurahan</label>
          <div class="col-sm-10">
            <select class="form-select" name="kelurahan_id" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              @foreach ($kelurahan as $kelu)
                <option value="{{ $kelu->id }}">{{ $kelu->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">kecamatan</label>
          <div class="col-sm-10">
            <select class="form-select" name="kecamatan_id" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              @foreach ($kecamatan as $keca)
                <option value="{{ $keca->id }}">{{ $keca->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">status</label>
          <div class="col-sm-10">
            <select class="form-select" name="status_id" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              @foreach ($status as $s)
                <option value="{{ $s->id }}">{{ $s->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">jenis</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_barang_id" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              @foreach ($jenis as $j)
                <option value="{{ $j->id }}">{{ $j->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">layanan</label>
          <div class="col-sm-10">
            <select class="form-select" name="layanan_id" aria-label="Default select example">
              <option selected>-- pilih menu --</option>
              @foreach ($layanan as $l)
                <option value="{{ $l->id }}">{{ $l->hari_operasional }}</option>
              @endforeach
            </select>
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
    <!-- </div> -->

  </div>
@endsection
