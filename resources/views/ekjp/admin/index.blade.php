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
            <a href="{{url('ekjp/admin')}}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">e-KJP:ADMIN - KURSUS</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('admin.index') }}" class="nav-link active"
                        aria-current="page">Utama</a></li>
                <li class="nav-item"><a href="{{ route('admin.create') }}" class="nav-link">Tambah Kursus</a></li>
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
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif

        <table id="example" class="text-start table-hover table table-striped" style="width:100%">
            <thead>
                <tr>
                    <td>KURSUS</td>
                    <td>BIDANG</td>
                    <td>BILANGAN PEMOHON</td>
                    <td>TINDAKAN</td>
                </tr>
            </thead>
            <tbody>
                @foreach($viewData as $key => $value)
                <tr>
                    <td>{{ $value->kursus }}</td>
                    <td>{{ $value->bidang }}</td>
                    <td>{{ $value->bil }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        <form action="{{ route('admin.destroy', $value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="arahan" value="kursus">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                        <a class="btn btn-sm btn-success" href="{{ route('admin.show', $value->id) }}">Lihat
                            Permohonan</a>

                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <a class="btn btn-sm btn-info" href="{{ route('admin.edit', $value->id) }}">Pinda Maklumat
                            Kursus</a>

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
