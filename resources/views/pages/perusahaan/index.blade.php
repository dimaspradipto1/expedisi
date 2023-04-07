@extends('layout.template')

@section('content')
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <a href="{{ route('perusahaan.create') }}" class='btn btn-success'>Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Perusahaan</th>
              <th>Alamat</th>
              <th>kecamatan</th>
              <th>No Telp</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($perusahaan as $p)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->kecamatan->name }}</td>
                <td>{{ $p->no_telp }}</td>
                <td>
                  <a href="perusahaan/{{ $p->id }}/edit" class="btn btn-warning">edit</a>
                  <form action="perusahaan/{{ $p->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
