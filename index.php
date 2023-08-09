<?php
    include  'koneksi.php'; 
    session_start();
    
    ?>


<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Membuat Field Set">
    <!-- <link rel="icon" href="../img/" type="image/x-icon"> -->
    <link rel="icon" href="../img/module_table_bottom.png" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

   <!-- Datatables -->
   <link href="datatables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
   <link href="datatables/Buttons-2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet"/>
    
    <title>Membuat Crud</title>
    
    
</head>

<body>

      <!-- Judul -->
      <div class="container">
        <nav class="navbar navbar-light bg-light">
            <h1 class="mt-4">Data Siswa</h1>
        </nav>
          <figure>
              <blockquote class="blockquote">
                  <p>Database yang telah di simpan</p>
                </blockquote>
                <figcaption class="blockquote-footer" style="color: blue">
                    CRUD <cite title="Source Title">Create Update dan Delete</cite>
                </figcaption>
        </figure>
                <div class="jarak" class="btn-group me-2">
                    <a href="kelola.php"
                    type="button" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    &nbsp;Tambah Data
                    </a>

                    <a href="cetak.php" target="_blank" type="button" class="btn btn-outline-success" rel="noopener noreferrer">
                        <i class="fa fa-print" aria-hidden="true"></i>
                        &nbsp;Print Data
                    </a>
                </div>

                <br>

            <?php
                if (isset($_SESSION['eksekusi'])):
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php
                            echo $_SESSION ['eksekusi'];
                        ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            
            <?php
                session_destroy();
                endif;
            ?>

            <!-- <form action="" method="POST">
                <input type="search" name="keyword" autofocus size="20" autocomplete>
                <button type="submit" name="cari" class="button">Cari!</button>
            </form> -->

            

            <div class="table-responsive">
                <table id="dt" class="table align-middle cell-border table-hover">
                    <thead>
                        <div>
                            <tr>
                                <th>No.</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto Siswa</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </div>
                    </thead>
                    <div>
                    <tbody>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM tb_siswa");

                            while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td class="coba"><center>
                                <?php
                                     echo $no++;
                                    // echo $result['id_siswa'];
                                ?>.
                            </center></td>
                            <td>
                                <?php
                                    echo $result['nisn'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $result['nama_siswa'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $result['jenis_kelamin'];
                                ?>
                            </td>
                            <td>
                                <img src="img/<?php
                                    echo $result['foto_siswa'];
                                ?>" alt="<?php echo $result['foto_siswa']; ?>" style="width: 150px;">
                            </td>
                            <td>
                                <?php
                                    echo $result['alamat'];
                                ?>
                            </td>
                            <td>
                                <center>
                                    <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-info btn-sm mt-2">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </center>
                                <center>
                                    <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm mt-2" onClick="return confirm('Apa anda yakin hapus data tersebut ???')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                        <?php
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- BS-5 -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <!-- DataTables -->
        <script src="datatables/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
        <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
        <script src="datatables/pdfmake-0.2.7/pdfmake.min.js"></script>
        <script src="datatables/pdfmake-0.2.7/vfs_fonts.js"></script>
        <script src="datatables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="datatables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="datatables/Buttons-2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="datatables/Buttons-2.3.6/js/buttons.bootstrap5.min.js"></script>
        <script src="datatables/Buttons-2.3.6/js/buttons.colVis.min.js"></script>
        <script src="datatables/Buttons-2.3.6/js/buttons.html5.min.js"></script>
        <script src="datatables/Buttons-2.3.6/js/buttons.print.min.js"></script>

        <script>    
        $(document).ready(function() {
            var table = $('#dt').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'print','csv', 'excel', 'pdf', 'colvis' ]
            } );
        
            table.buttons().container()
                .appendTo( '#dt_wrapper .col-md-6:eq(0)' );
        } );
        </script>


        <footer class="bg-primary text-white text-center text-lg-start">

        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><u>CRUD</u></h5>

                <p>
                CRUD adalah singkatan dari create, read, update, dan delete. 
                Kegunaan dari pemrograman CRUD adalah untuk membaca, menyisipkan, 
                memanipulasi, mengedit, dan menghapus data tabel. 
                Peran CRUD sangat krusial karena berhubungan dengan sistem informasi perusahaan.
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase"><u>NATIVE</u></h5>

                <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://www.w3schools.com/html/default.asp" target="_blank"class="text-white">HTML</a>
                </li>
                <li>
                    <a href="https://www.w3schools.com/css/default.asp" class="text-white">CSS</a>
                </li>
                <li>
                    <a href="https://www.w3schools.com/javascript/default.asp" class="text-white">JavaScript</a>
                </li>
                <li>
                    <a href="https://www.w3schools.com/php/default.asp" class="text-white">PHP</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0"><u>FRAMEWORK</u></h5>

                <ul class="list-unstyled">
                <li>
                    <a href="https://getbootstrap.com/" class="text-white">BOOTSTRAP</a>
                </li>
                <li>
                    <a href="https://datatables.net/" class="text-white">DataTables</a>
                </li>
                <li>
                    <a href="https://www.apachefriends.org/download.html" class="text-white">000webhost.com</a>
                </li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-9 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">WEB SERVER</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="https://www.apachefriends.org/download.html/" class="text-white">Apache</a>
                </li>
                <li>
                    <a href="https://www.apachefriends.org/download.html" class="text-white">MySQL</a>
                </li>
                <li>
                    <a href="https://www.apachefriends.org/download.html" class="text-white">FileZilla</a>
                </li>
                <li>
                    <a href="https://www.apachefriends.org/download.html" class="text-white">Tomcat</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Chandratera</a>
        </div>
        <!-- Copyright -->
        </footer>

        <h5>
            <a href="https://www.apachefriends.org/download.html" " target="_blank" rel="noopener noreferrer"></a>
        </h5>

    </body>
    </html>
