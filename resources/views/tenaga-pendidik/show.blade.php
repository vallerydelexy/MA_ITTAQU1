<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <h4>{{ $tenagaPendidik->nama_guru }}</h4>
                    <h4>{{ $tenagaPendidik->nip }}</h4>
                    <h4>{{ $tenagaPendidik->tempat_guru }}</h4>
                    <h4>{{ $tenagaPendidik->tgl_guru }}</h4>
                    <h4>{{ $tenagaPendidik->jabatan }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->


<h1>Detail Tenaga Pendidik</h1>

<p>Nama: {{ $tenagaPendidik->nama }}</p>
<p>NIP: {{ $tenagaPendidik->nip }}</p>
<p>Jenis Kelamin: {{ $tenagaPendidik->jenis_kelamin }}</p>
<p>Alamat: {{ $tenagaPendidik->alamat }}</p>
<p>Mata Pelajaran: {{ $tenagaPendidik->mata_pelajaran }}</p>

<a href="{{ route('tenaga-pendidik.index') }}">Kembali ke Daftar</a>