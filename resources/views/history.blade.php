<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RS PAW</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
      <!-- Custom styles -->
      <style>
        .bg-gradient-primary {
            background-color: #28a745;
            background-image: linear-gradient(180deg, #28a745 10%, #218838 100%);
            background-size: cover;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminIndex">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RUMAH SAKIT<br>PAW</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pasien -->
            <li class="nav-item">
                <a class="nav-link" href="adminIndex">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Daftar Pasien</span></a>
            </li>
            <!-- Nav Item - History -->
            <li class="nav-item">
                <a class="nav-link" href="historyIndex">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Sejarah Pasien</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <br>
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-success text-center">Sejarah Pasien</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pasien</th>
                                            <th>Gender</th>
                                            <th>Umur</th>
                                            <th>Riwayat Penyakit</th>
                                            <th>Diagnosis</th>
                                            <th>Catatan</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data2 as $dt)
                                        <tr>
                                            <td>{{ $dt->id }}</td>
                                            <td>{{ $dt->nama }}</td>
                                            <td>{{ $dt->gender }}</td>
                                            <td>{{ $dt->umur }}</td>
                                            <td>{{ $dt->penyakit }}</td>
                                            <td>{{ $dt->diagnosis }}</td>
                                            <td>{{ $dt->catatan }}</td>
                                            <td>{{ $dt->tanggal }}</td>
                                            <td>
                                                <a href="/historyEdit/{{ $dt->id }}" class="btn btn-warning">Edit</a>
                                                <a href="/deleteHistory/{{ $dt->id }}" class="btn btn-danger m-1">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach()
                                    </tbody>
                                    <a href="/historyAdd" class="btn btn-success">Tambah Data</a>
                                    
                                    <div class="mb-3 mt-3">
                                        <form action="{{ url('/historyIndex') }}" method="GET">
                                            <input type="search" name="search" placeholder=" Nama/Penyakit/Tanggal"  value="{{ request()->get('search') }}">
                                            <a href="/historyIndex" class="btn btn-success">Search</a>
                                        </form>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $data2->links() }}
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PAW2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
