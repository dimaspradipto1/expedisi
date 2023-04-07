@extends('layout.template')

@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ route('status.create') }}" class='btn btn-success'>Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Status</th>
              <th>created_at</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($status as $s)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->created_at }}</td>
                <td>
                  <a href="status/{{ $s->id }}/edit" class="btn btn-warning">edit</a>
                  <form action="status/{{ $s->id }}" method="post" class="d-inline">
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
