<?php
include 'koneksi.php';
if (isset($_POST['tambahanggota'])) {
    if (createAnggota($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil ditambahkan!');
                document.location.href = 'anggota.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal ditambahkan!');
            document.location.href = 'anggota.php';
        </script>";
    }
}

?>

<?php include './component/head.php'; ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include './component/sidebar.php'; ?>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- table -->
                <table class="table table-striped">
                    <tr>
                        <th>No :</th>
                        <th>NIM :</th>
                        <th>Nama Anggota</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Gender</th>
                        <th>Prodi</th>
                    </tr>
                    <?php $query = "SELECT * FROM tb_anggota";
                    $i = 1;
                    $datas = readAnggota($query) ?>
                    <?php foreach ($datas as $data) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data['nim']; ?></td>
                            <td><?= $data['nama_anggota']; ?></td>
                            <td><?= $data['tempat_lahir']; ?></td>
                            <td><?= $data['tgl_lahir']; ?></td>
                            <td><?= $data['jk']; ?></td>
                            <td><?= $data['prodi']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>



                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah">
                        Tambah Anggota
                    </button>






                    </tbody>
                    </table>
                </div>
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
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Tambah -->
    <div class="modal fade" id="Modaltambah">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kelas</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Form -->
                    <form action="" method="post">
                        NIM
                        <input type="text" name="nim" placeholder="NIM" class="form-control" required>
                        <br>
                        Nama Anggota
                        <input type="text" name="nama_anggota" placeholder="Nama Anggota" class="form-control" required>
                        <br>
                        Tempat Lahir
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required>
                        <br>
                        Tanggal Lahir
                        <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" required>
                        <br>
                        Gender
                        <input type="text" name="jk" placeholder="Gender" class="form-control" required>
                        <br>
                        Prodi
                        <input type="text" name="prodi" placeholder="prodi" class="form-control" required>
                        <br>
                        <!-- Kompetensi Keahlian
                        <input type="text" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" class="form-control" required>
                        <br> -->
                        <button type="submit" class="btn btn-primary" name="tambahanggota">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>





    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="endor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>