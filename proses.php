<?php

    include 'fungsi.php';
    session_start();

    if (isset($_POST['aksi'])){
        if ($_POST['aksi'] == "add")  {
                    
                    $berhasil = tambah_data($_POST, $_FILES);

                    if ($berhasil) {
                          echo $_SESSION ['eksekusi'] = "Berhasil di tambahkan !";
                          header ("location: index.php");
                    }else {
                          echo "Data gagal di buat".$conn->$query;
                        }
                            //echo $nisn. " | ".$nama_siswa. " | ".$jenis_kelamin. " | ".$foto. " | ".$alamat;

                }else if ($_POST['aksi'] == "edit" ){

                            // header ("location: index.php");

                    $berhasil1 = ubah_data($_POST, $_FILES);

                    if ($berhasil1) {
                                echo $_SESSION ['eksekusi'] = "Berhasil di edit !";
                                header("Location:index.php");
                            }else {
                                echo "Gagal Update data siswa".$conn->error;
                            }    
                                $conn->close();
                        }
                        
                    }
         
        if (isset($_GET['hapus'])){

             $berhasil2 = hapus_data($_GET);
            if ($sql) {
               echo $_SESSION ['eksekusi'] = "Berhasil di hapus !";
               header ("location: index.php");
                
            }else {
                echo "Data gagal di hapus".$conn->$query;
            }

            // echo "Hapus Data <button><a href='index.php'>[Home]</button></a>";
            
    }
?>