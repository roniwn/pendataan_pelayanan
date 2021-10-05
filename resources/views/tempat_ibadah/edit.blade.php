<section>
        <div class="container mt-5">
            <h1>Edit Data</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/update1/'.$ibadah->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">kode kecamatan</label>
                            <input type="text" name="kode" class="form-control" placeholder="001"
                            value="{{$ibadah->kode}}">
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
                                  value="{{$ibadah->kecamatan}}">
                              </select>
                          </div> 
                          <div class="form-group">
                              <label for="nama">Tahun</label>
                              <input type="datetime" name="tahun" class="form-control" placeholder="2020"
                              value="{{$ibadah->tahun}}"> 
                            </div>
                         
                          <div class="form-group">
                              <label for="nama">Masjid</label>
                              <input type="number" name="masjid" class="form-control" placeholder="12"
                              value="{{$ibadah->masjid}}"> 
                          </div>
                          <div class="form-group">
                              <label for="nama">Musholla</label>
                              <input type="number" name="musholla" class="form-control" placeholder="12"
                              value="{{$ibadah->musholla}}"> 
                          </div>
                          <div class="form-group">
                              <label for="nama">Gereja Protestan</label>
                              <input type="number" name="gereja_protestant" class="form-control" placeholder="12"
                              value="{{$ibadah->gereja_protestant}}"> 
                          </div>
                          <div class="form-group">
                              <label for="nama">Gereja Katholik</label>
                              <input type="number" name="gereja_katholik" class="form-control" placeholder="12"
                              value="{{$ibadah->gereja_katholik}}">
                          </div>
                          <div class="form-group">
                              <label for="nama">Pura</label>
                              <input type="number" name="pura" class="form-control" placeholder="12" 
                              value="{{$ibadah->pura}}">
                          </div>
                          <div class="form-group">
                              <label for="nama">Vihara</label>
                              <input type="number" name="vihara" class="form-control" placeholder="12"
                              value="{{$ibadah->gereja_vihara}}"> 
                          </div>
                          <div class="form-group">
                              <label for="nama">Jumlah</label>
                              <input type="number" name="jumlah" class="form-control" placeholder="12"
                              value="{{$ibadah->jumlah}}">
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