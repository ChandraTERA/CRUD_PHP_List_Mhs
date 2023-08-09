<?php
include 'koneksi.php';
    session_start();

    
    $id_siswa = '';
    $nisn = '';
    $nama_siswa = '';
    $jenis_kelamin = '';
    $alamat = '';

    if (isset($_GET['ubah'])) {
        
        $id_siswa = $_GET['ubah'];
        
        $query = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);
        $nisn = $result['nisn'];
        $nama_siswa = $result['nama_siswa'];
        $jenis_kelamin = $result['jenis_kelamin'];
        $alamat = $result['alamat'];
        // var_dump($result);

        // die();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="style2.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat data Crud</title>
</head>


<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                CRUD BS5
            </a>
        </div>
      </nav>
      
    <form method="POST" action="proses.php" enctype="multipart/form-data">
        <!-- Id Siswa -->
        <!-- <input type="hidden" name="id_siswa" value="<?= $id_siswa ?>"> -->
        <!-- Nomor Induk Siswa -->
        <input type="hidden" value='<?= $id_siswa; ?>' name='id_siswa'>
            <div class="container-fluid">
                <div class="mb-3 row mt-3">
                    <label for="nisn" class="col-sm-2 col-form-label">
                        NISN
                    </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Mis : 6720xxx" value='<?php echo $nisn; ?>' autofocus>
                    </div>    
                </div>
            </div>

        <!-- Nama Siswa -->
            <div class="container-fluid">
                <div class="mb-3 row">
                    <label for="nama siswa" class="col-sm-2 col-form-label">
                        Nama Siswa
                    </label>
                    <div class="col-sm-5">
                    <input value="<?php echo $nama_siswa; ?>" type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Chandra Tera" required autocomplete="off">
                    </div>    
                </div>
            </div>

        <!-- Jenis Kelamin -->
        <div class="container-fluid">
            <div class="mb-3 row">
                <label for="jenis kelamin" class="col-sm-2 col-form-label">
                    Jenis Kelamin
                </label>
                <div class="col-sm-10">
                    <label value="<?php echo $jenis_kelamin; ?>" for="jenis kelamin" class="col-sm-2.5 col-form-label">
                        <select id= "jenis kelamin" class="form-select" name="jenis_kelamin">
                        <option <?php if ($jenis_kelamin == 'Laki - laki') {echo 'selected';}?> value="Laki - laki">Laki - Laki</option>
                        <option <?php if ($jenis_kelamin == 'Perempuan') {echo 'selected';}?> value="Perempuan">Perempuan</option>
                    </select>
                </label>
                </div>    
            </div>
        </div>

        <!-- Upload Foto -->
    
        <div class="container-fluid">
            <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label">
                        Foto Siswa
                    </label>
                    <div class="col-sm-5">
                        <input <?php if (!isset($_GET['ubah'])) {echo 'required';}?> class="form-control" type="file" name="foto" id="foto" accept="image/*">
                    </div>       
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label mt-10">ALamat Lengkap</label>
                        <div class="col-sm-5 mt-2">
                            <textarea  class="form-control" id="alamat" name="alamat" rows="2" required><?php echo $alamat; ?></textarea>
                        </div>
                    </div>
            </div>    
        </div>

        <!-- Tombol -->
        <div class="container-fluid">
            <div class="mb-3 row">
                <div class="col">
                    <?php
                        if (isset($_GET['ubah'])) {
                    
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary" style="margin-right: 5px;">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>  
                        Simpan perubahan
                        </button>
                    <?php
                        }else {
                    ?>
                    
                            <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>  
                            Tambah
                            </button>
                                <?php
                            }
                            ?>    
                            <a href="index.php" type="submit" value="add" class="btn btn-danger">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                                Batal
                            </a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>