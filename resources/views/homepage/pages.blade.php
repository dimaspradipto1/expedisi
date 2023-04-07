    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Temukan kantor expedisi impianmu</h2>
        </div>

        <div class="row">
          @foreach ($perusahaan as $p)
            <div class="col-4 d-flex justify-content-between">
              <div class="info my-2 ">
                <div class="name">
                  <i class="bi bi-building"></i>
                  <p><b style="color: #36d8c3">Nama Perusahaan: </b><br> {{ $p->name }}</p>
                </div>

                <div class="pengiriman">
                  <i class="bi bi-truck"></i>
                  <p><b style="color: #36d8c3">Pengiriman: </b><br> {{ $p->pengiriman }}</p>
                </div>

                <div class="jenisbarang">
                  <i class="bi bi-box"></i>
                  <p><b style="color: #36d8c3">Jenis Barang:</b> <br> {{ $p->jenisbarang->name }}</p>
                </div>

                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <p><b style="color: #36d8c3">Alamat:</b> <br> {{ $p->alamat }}. Kel {{ $p->kelurahan->name }}, Kec
                    {{ $p->kecamatan->name }}</p>
                </div>

                <div class="layanan">
                  <i class="bi bi-box"></i>
                  <p><b style="color: #36d8c3">Layanan:</b> <br> {{ $p->layanan->hari_operasional }}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <p><b style="color: #36d8c3">No Telp:</b> <br> {{ $p->no_telp }}</p>
                </div>

                {{-- <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.014434992257!2d103.99948507484325!3d1.1501789621853804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98a266703add3%3A0xb8e3b602481f4ec8!2sLaut%20Mas.%20PT!5e0!3m2!1sid!2sid!4v1671520720265!5m2!1sid!2sid"
                  width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
              </div>
            </div>
          @endforeach

        </div>
        <div class="float-end mt-3 ">
          {{ $perusahaan->links() }}
        </div>
      </div>

    </section>
