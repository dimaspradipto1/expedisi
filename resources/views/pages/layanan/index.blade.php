@extends('layout.template')

@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ route('layanan.create') }}" class='btn btn-success'>Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Layanan</th>
              <th>created_at</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($layanan as $k)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->hari_operasional }}</td>
                <td>{{ $k->created_at }}</td>
                <td>
                  <a href="layanan/{{ $k->id }}/edit" class="btn btn-warning">edit</a>
                  <form action="layanan/{{ $k->id }}" method="post" class="d-inline">
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

  </div>
@endsection
