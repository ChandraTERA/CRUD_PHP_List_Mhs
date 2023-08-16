<?php
    include  'koneksi.php'; 
    session_start();
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Membuat Field Set">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="img/Avatar1.png" type="image/x-icon">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

   <!-- Datatables -->
   <link href="datatables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
   <link href="datatables/Buttons-2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet"/>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Crud</title>
    
    <link rel="stylesheet" href">
    
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
                <div class="jarak">
                    <a href="kelola.php"
                    type="button" class="btn btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    &nbsp;Tambah Data
                    </a>

                    <a href="cetak.php" target="_blank" type="button" class="btn btn-success" rel="noopener noreferrer">
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


    </body>
    </html>