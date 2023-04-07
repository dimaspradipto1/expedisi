<div class="container mt-5">

  <form action="/" method="get">
    @csrf
    <div class="row">
      <div class="col-sm-3">
        <label for="" class="form-label">Name Perusahaan</label>
        <input name="name" type="text" class="form-control" placeholder="Nama Perusahaan"
          value="{{ isset($_GET['name']) ? $_GET['name'] : '' }}">
      </div>

      <div class="col-sm-3">
        <label for="kategori" class="form-label">Layanan</label>
        <select name="hari_operasional" class="form-select">
          <option value="">--pilih menu--</option>
          @foreach ($layanan as $j)
            <option value="{{ $j->id }}">
              {{ $j->hari_operasional }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-sm-3">
        <label for="kategori" class="form-label">Kelurahan</label>
        <select name="kelurahan" class="form-select ">
          <option value="">--pilih menu--</option>
          @foreach ($kelurahan as $kel)
            <option value="{{ $kel->id }}">
              {{ $kel->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-sm-3">
        <label for="kategori" class="form-label">Kecamatan</label>
        <select name="kecamatan" class="form-select">
          <option value="">--pilih menu--</option>
          @foreach ($kecamatan as $kec)
            <option value="{{ $kec->id }}">
              {{ $kec->name }}</option>
          @endforeach
        </select>
      </div>



      <div class="col-sm-4">
        <button type="submit" class="btn btn-primary mt-4">Search</button>
      </div>
    </div>
  </form>
</div>
