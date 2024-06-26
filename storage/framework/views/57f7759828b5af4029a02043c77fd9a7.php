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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
                    <!-- Add History Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-success text-center">Tambah Data Sejarah Pasien</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(url('/addHistory')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="patientSelect">Pilih Pasien</label>
                                    <select id="patientSelect" class="form-control" name="patient_id">
                                        <option value="" disabled selected>Pilih Pasien</option>
                                        <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HistoryPenyakit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($HistoryPenyakit->id); ?>" data-nama="<?php echo e($HistoryPenyakit->nama); ?>" data-gender="<?php echo e($HistoryPenyakit->gender); ?>" data-umur="<?php echo e($HistoryPenyakit->umur); ?>">
                                                <?php echo e($HistoryPenyakit->nama); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <input type="hidden" id="nama" name="nama">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" id="gender" name="gender" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="text" id="umur" name="umur" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="penyakit">Riwayat Penyakit</label>
                                    <textarea id="penyakit" name="penyakit" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="diagnosis">Diagnosis</label>
                                    <textarea id="diagnosis" name="diagnosis" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <textarea id="catatan" name="catatan" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('patientSelect').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var nama = selectedOption.getAttribute('data-nama');
            var gender = selectedOption.getAttribute('data-gender');
            var umur = selectedOption.getAttribute('data-umur');
            document.getElementById('nama').value = nama;
            document.getElementById('gender').value = gender;
            document.getElementById('umur').value = umur;
        });
    });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Ujian_Dosbim_PAW\resources\views/addHistory.blade.php ENDPATH**/ ?>