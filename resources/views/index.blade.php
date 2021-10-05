<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pendataan Pelayanan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Kementrian Agama Kabupaten Malang</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" 
  data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/nikah">
              <span data-feather="bar-chart-2"></span>
              Data Nikah 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tempat_ibadah">
              <span data-feather="bar-chart-2"></span>
              Tempat Peribadatan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Perkembangan Tempat Peribadatan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Pondok Pesantren
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Juru Penerang 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              PNS Kemenag 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              RA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              MI
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              MTS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              MA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Pendaftar Haji
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Pemberangkatan Haji
            </a>
          </li>
        </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">WELCOME TO KEMENTRIAN AGAMA KAB.MALANG </h1> 
{{-- 
   <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data banyaknya Peristiwa Nikah menurut Kecamatan di Kabupaten Malang </h1> --}}
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
            <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" 
          data-bs-toggle="dropdown" aria-expanded="false">
            Data Bulan
          </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Januari</a></li>
              <li><a class="dropdown-item" href="#">Februari</a></li>
              <li><a class="dropdown-item" href="#">Maret</a></li>
              <li><a class="dropdown-item" href="#">April</a></li>
              <li><a class="dropdown-item" href="#">Mei</a></li>
              <li><a class="dropdown-item" href="#">Juni</a></li>
              <li><a class="dropdown-item" href="#">Juli</a></li>
              <li><a class="dropdown-item" href="#">Agustus</a></li>
              <li><a class="dropdown-item" active href="#">September</a></li>
              <li><a class="dropdown-item" href="#">Oktober</a></li>
              <li><a class="dropdown-item" href="#">November</a></li>
              <li><a class="dropdown-item" href="#">Desember</a></li>
            </ul>
          </div>
        </div>
      </div>
        <div class="table">
        <div id="chartNilai"></div>
        <table class="table table-success table-striped">
          <thead>
          <div class="col-lg-8">
            <h4>Input Data Baru</h4>
            <a href="{{url('create')}}" class="btn btn-primary">+ Tambah Data</a>
          </div>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Kecamatan</th>
              <th scope="col">Tahun</th>
              <th scope="col">Bulan</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @php $no = 1; @endphp
          @foreach ($data as $dataKecamatan)
              <tr>
                  <td>{{$no++}}</td>
                  <td>{{$dataKecamatan->kode}}</td>
                  <td>{{$dataKecamatan->tahun}}</td>
                  <td>{{$dataKecamatan->bulan}}</td>
                  <td>{{$dataKecamatan->kecamatan}}</td>
                  <td>{{$dataKecamatan->jumlah}}</td>
                  <td>
                     <a href="{{url('/show/'.$dataKecamatan->id) }}" class="btn btn-warning">Edit</a>
                     <a href="{{url('/destroy/'.$dataKecamatan->id) }}" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </main>  --}}
  </div>
</div> 
{{-- 

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script>
        Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik data perkecamatan'
    },
    xAxis: {
        // categories: {!!json_encode($kecamatan)!!},
        // [
            // 'Ampelgading',
            // 'Bantur',
            // 'Bululawang',
            // 'Dampit',
            // 'Dau',
            // 'Donomulyo',
            // 'Gedangan',
            // 'Gondanglegi',
            // 'Jabung',
            // 'Kalipare',
            // 'Karangploso',
            // 'Kasembon',
            // 'Kepanjen',
            // 'Kromengan',
            // 'Lawang',
            // 'Ngajum'

        // ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Kecamatan',
        // data: {!!json_encode($jumlah)!!}
        

    }]
});
     
      </script>    --}}

        
  </body>
</html>
