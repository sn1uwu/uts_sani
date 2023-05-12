<?php
include 'koneksi.php';

if (isset($_POST["tambahbuku"])) {
    if (createBuku($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'buku.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'buku.php';
        </script>";
    }
}

?>

<?php include './component/head.php' ?>

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
                        <th>Judul Buku :</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>ISBN</th>
                        <th>Jumlah Buku</th>
                        <th>Lokasi</th>
                        <th>Tanggal Input</th>
                    </tr>
                    <?php $query = "SELECT * FROM tb_buku";
                    $i = 1;
                    $datas = readBuku($query) ?>
                    <?php foreach ($datas as $data) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data['judul_buku']; ?></td>
                            <td><?= $data['pengarang_buku']; ?></td>
                            <td><?= $data['penerbit_buku']; ?></td>
                            <td><?= $data['tahun_terbit']; ?></td>
                            <td><?= $data['isbn']; ?></td>
                            <td><?= $data['jumlah_buku']; ?></td>
                            <td><?= $data['lokasi']; ?></td>
                            <td><?= $data['tgl_input']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modaltambah">
                        Tambah Kelas
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
                    <h4 class="modal-title">Tambah Buku</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post">
                        Judul Buku
                        <input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control" required>
                        <br>
                        Pengarang Buku
                        <input type="text" name="pengarang_buku" placeholder="Pengarang Buku" class="form-control" required>
                        <br>
                        Penerbit Buku
                        <input type="text" name="penerbit_buku" placeholder="Penerbit Buku" class="form-control" required>
                        <br>
                        Tahun Terbit
                        <input type="text" name="tahun_terbit" placeholder="Tahun Terbit" class="form-control" required>
                        <br>
                        ISBN
                        <input type="text" name="isbn" placeholder="ISBN" class="form-control" required>
                        <br>
                        Jumlah Buku
                        <input type="text" name="jumlah_buku" placeholder="Jumlah Buku" class="form-control" required>
                        <br>
                        Lokasi
                        <select class="form-control mb-3" type="text" name="lokasi" required>
                            <option value="Rak 1" selected>Rak 1</option>
                            <option value="Rak 2">Rak 2</option>
                            <option value="Rak 3">Rak 3</option>
                        </select>
                        <br>
                        Tanggal Input
                        <input type="date" name="tgl_input" placeholder="Tanggal Input" class="form-control" required>
                        <br>
                        <!-- Kompetensi Keahlian
                        <input type="text" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" class="form-control" required>
                        <br> -->
                        <button type="submit" class="btn btn-primary" name="tambahbuku">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php include './component/footer.php'; ?>