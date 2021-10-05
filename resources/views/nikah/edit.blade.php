<section>
        <div class="container mt-5">
            <h1>Edit Data</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">kode kecamatan</label>
                            <input type="text" name="kode" class="form-control" placeholder="001"
                            value="{{$data->kode}}"> 
                          </div>
                          <div class="form-group">
                              <label for="nama">Tahun</label>
                              <input type="datetime" name="tahun" class="form-control" placeholder="2020"
                              value="{{$data->tahun}}"> 
                            </div>
                          <div class="form-group">
                              <label for="nama">Bulan</label>
                              <select name="bulan">
                                  <option value="Januari">Januari</option>
                                  <option value="Februari">Februari</option>
                                  <option value="Maret">Maret</option>
                                  <option value="April">April</option>
                                  <option value="Mei">Mei</option>
                                  <option value="Juni">Juni</option>
                                  <option value="Juli">Juli</option>                              
                                  <option value="Agustus">Agustus</option>
                                  <option value="September">September</option>
                                  <option value="Oktober">Oktober</option>
                                  <option value="November">November</option>
                                  <option value="Desember">Desember</option>
                                  value="{{$data->bulan}}">
                              </select>
                          </div> 
                          <div class="form-group">
                            <label for="nama">Kecamatan</label>
                            <select name="kecamatan">
                                <option value="Ampelading">Ampelgading</option>
                                <option value="Bantur">Bantur</option>
                                <option value="Bululawang">Bululawang</option>
                                <option value="Dampit">Dampit</option>
                                <option value="Dau">Dau</option>
                                <option value="Donomulyo">Donomulyo</option>
                                <option value="Gedangan">Gedangan</option>                              
                                <option value="Gondanglegi">Gondanglegi</option>
                                <option value="Jabung">Jabung</option>
                                <option value="Kalipare">Kalipare</option>
                                <option value="Karangploso">Karangploso</option>
                                <option value="Kasembon">Kasembon</option>
                                <option value="Kepanjen">Kepanjen</option> 
                                <option value="Kromengan">Kromengan</option>
                                <option value="Lawang">Lawang</option>
                                <option value="Ngajum">Ngajum</option>
                                <option value="Ngantang">Ngantang</option>
                                <option value="Pagak">Pagak</option>
                                <option value="Pagelaran">Pagelaran</option>
                                <option value="Pakis">Pakis</option>
                                <option value="Pakisaji">Pakisaji</option>
                                <option value="Poncokusumo">Poncokusumo</option>
                                <option value="Pujon">Pujon</option>
                                <option value="Singosari">Singosari</option>
                                <option value="Sumbermanjing">Sumbermanjing</option>
                                <option value="Sumberpucung">Sumberpucung</option>
                                <option value="Tajinan">Tajinan</option>
                                <option value="Tirtoyudo">Tirtoyudo</option>
                                <option value="Tumpang">Tumpang</option>
                                <option value="Turen">Turen</option>
                                <option value="Wagir">Wagir</option>
                                <option value="Wajak">Wajak</option>
                                <option value="Wonosari">Wonosari</option>
                                value="{{$data->kecamatan}}">
                            </select>
                        </div> 
                          <div class="form-group">
                              <label for="nama">Jumlah</label>
                              <input type="number" name="jumlah" class="form-control" placeholder="12"
                              value="{{$data->jumlah}}"> 
                          </div>
                        <div class="form mt-2">
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div> 

                        <div class="form-group mt-2">
                            <a href="{{url('/')}}"> << Back Home</a>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </section>