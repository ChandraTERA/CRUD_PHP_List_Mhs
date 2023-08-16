<?php
    include 'koneksi.php';

    function tambah_data($data, $files) {
                
                // var_dump($_POST);    //Pengecekan data upload
                // var_dump($_FILES);   //Jenis file data upload
            
            $nisn = $data ['nisn'];
            $nama_siswa = $data['nama_siswa'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $foto = $_FILES ['foto']['name'];
            $alamat = $data['alamat']; 

                // echo $_FILES ['foto']['name'];       //nama foto dan format dan echo
                // die();

            $dir = "img/";
            $tmpFile = $_FILES ['foto']['name'];

                // move_uploaded_file($tmpFile, $dir. $foto);
                // die() */; 

                // if(isset($_FILES['foto'])){
                        //     $foto = $_FILES['foto']['name'];
                        //     $tmpFile = $_FILES['foto']['tmp_name'];
                        //     $dir = "img/";
                        //     move_uploaded_file($tmpFile, $dir . $foto);
                        // } else {
                            //     $foto = "20230418_205348.jpg"; // jika tidak diupload, gunakan foto default
                            // }
                            // die

            move_uploaded_file($tmpFile, $dir. $img);
            
            $query = "INSERT INTO tb_siswa VALUES(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
            $sql = mysqli_query($GLOBALS['conn'], $query); 

            return true;
    }

    function ubah_data($data, $files) {
                
                $id_siswa = $data['id_siswa'];
                $nisn = $data ['nisn'];
                $nama_siswa = $data['nama_siswa'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $alamat = $data['alamat'];

                $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = 'id_siswa'"; 
                $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
                $result = mysqli_fetch_assoc($sqlShow);

                    if ($files['foto']['name'] == "") {
                      // var_dump($_FILES);
                      // echo "Ada ";
                      $foto = $result =['foto_siswa'];
                      unlink("img/".$result['foto_siswa']);
                      move_uploaded_file($files['foto']['tmp_name'], 'img/'.$files['foto']['name']);
                    }else{
                      // var_dump($_FILES);
                      // echo "tidak ada";
                    $foto = $files['foto']['name'];
                       }

                    $query = "UPDATE tb_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', foto_siswa='$foto', alamat='$alamat' WHERE id_siswa='$id_siswa'";
                    
                    $sql = mysqli_query($GLOBALS['conn'], $query);
                    
                    return true;
    }

    function hapus_data($data) {

                $id_siswa = $data['hapus'];

                
                $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = 'id_siswa'"; 
                $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
                $result = mysqli_fetch_assoc($sqlShow); 

                // Var_dump($result);

                unlink("img/".$result['foto_siswa']);
                
                $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
                $sql = mysqli_query($GLOBALS['conn'], $query);

                return true;
    }
?>

