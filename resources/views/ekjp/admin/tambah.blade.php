<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-KJP Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{url('ekjp/admin')}}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">e-KJP:ADMIN - TAMBAH KURSUS</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link" aria-current="page">Utama</a>
                </li>
                <li class="nav-item"><a href="{{ route('admin.create') }}" class="nav-link active">Tambah Kursus</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="button" class="btn btn-warning">Logout</button>
                    </form>
                </li>
            </ul>
        </header>
    </div>

    <div class="container">
        <!-- Way 1: Display All Error Messages -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="text-start">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">

            <form class="gelap text-start text-white" method="POST" action="{{ route('admin.store')}}">
                @csrf
                @method('POST')
                <input type="hidden" name="jenis" value="form">

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama Kursus</span>
                    <input value="{{ old('kursus') }}" name="kursus" type="text" class="form-control"
                        placeholder="nama kursus" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Bidang Kursus</span>
                    <input value="{{ old('bidang') }}" name="bidang" type="text" class="form-control"
                        placeholder="bidang kursus" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tempoh Kursus (Hari)</span>
                    <input value="{{ old('tempoh') }}" name="tempoh" type="text" class="form-control"
                        placeholder="tempoh kursus" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Tarikh</span>
                    <textarea name="tarikh" class="form-control" aria-label="With textarea" rows="4" cols="50"
                        placeholder="tarikh kursus">{{ old('tarikh') }}</textarea>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Yuran Kursus (RM)</span>
                    <input value="{{ old('yuran') }}" name="yuran" type="text" class="form-control"
                        placeholder="yuran kursus" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Kandungan Kursus</span>
                    <textarea name="kandungan" class="form-control" aria-label="With textarea" rows="10" cols="50"
                        placeholder="kandungan kursus">{{ old('kandungan') }}</textarea>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Catatan</span>
                    <textarea name="catatan" class="form-control"
                        aria-label="With textarea">{{ old('catatan') }}</textarea>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Hantar</button>
                </div>

            </form>

            <hr>
            <br>
            <br>
            <h2 class="text-center" >Upload File dari Excel. File excel mestilah mengikut format yang betul.</h2>
            <p class="text-center" >Jika <b>id</b> wujud maklumat akan diganti baru.</p>

            <form class="gelap text-start text-white" method="POST" action="{{ route('admin.store')}}"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="jenis" value="upload">
                <div class="input-group mb-3">
                    <input type="file" name="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Pilih Fail</label>
                </div>
                <p><a href="{{ route('admin.show', 'xlsx') }}">Muat Turun Fail Excel</a></p>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-success" type="submit">Muat Nail Fail Excel</button>
                </div>

            </form>
            <br>


        </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
