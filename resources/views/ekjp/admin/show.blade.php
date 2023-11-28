<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-KJP Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
        href="https://cdn.datatables.net/v/bs5/dt-1.13.7/af-2.6.0/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/rg-1.4.1/sc-2.3.0/datatables.min.css"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('admin.index') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">e-KJP:ADMIN - PERMOHONAN</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link" aria-current="page">Utama</a>
                </li>
                <li class="nav-item"><a href="{{ route('admin.create') }}" class="nav-link" aria-current="page">Tambah
                        Kursus</a></li>
                <li class="nav-item"><a href="{{ route('admin.edit', $viewData['kursus']['id']) }}" class="nav-link">Pinda
                        Kursus</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link active">Permohonan Kursus</a></li>
            </ul>
        </header>
    </div>

    <div class="container px-4 py-5">
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif

        <h2 class="pb-2 border-bottom">{{ $viewData["kursus"]["kursus"] }}</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">KANDUNGAN</h2>
                <pre class="text-body-secondary">{{ $viewData["kursus"]["kandungan"] }}</pre>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">BIDANG</h4>
                        </div>
                        <p class="text-body-secondary">{{ $viewData["kursus"]["bidang"] }}</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">TARIKH</h4>
                        </div>

                        <p class="text-body-secondary">{{ $viewData["kursus"]["tarikh"] }}</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">YURAN</h4>
                        </div>

                        <p class="text-body-secondary">RM{{ $viewData["kursus"]["yuran"] }}</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <h4 class="fw-semibold mb-0 text-body-emphasis">TEMPOH</h4>
                        </div>

                        <p class="text-body-secondary">{{ $viewData["kursus"]["tempoh"] }} Hari</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <table id="example" class="text-start table-hover table table-striped" style="width:100%">
            <thead>
                <tr>
                    <td>NAMA</td>
                    <td>NOIC</td>
                    <td>EMAIL</td>
                    <td>NO. TELEFON</td>
                    <td>TINDAKAN</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["pemohon"] as $senarai)
                <tr>
                    <td>{{ $senarai["nama"] }}</td>
                    <td>{{ $senarai["noic"] }}</td>
                    <td>{{ $senarai["email"] }}</td>
                    <td>{{ $senarai["telefon"] }}</td>
                    <td>
                        <form action="{{ route('admin.destroy', $senarai['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="arahan" value="rekod">
                            <input type="hidden" name="kursus" value="{{ $viewData['kursus']['id'] }}">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script
        src="https://cdn.datatables.net/v/bs5/dt-1.13.7/af-2.6.0/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/rg-1.4.1/sc-2.3.0/datatables.min.js">
    </script>
    <script>
    let table = new DataTable('#example');
    </script>
</body>

</html>
