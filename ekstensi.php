<?php
  // Membuat koneksi ke database
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'db_sekolah';
  $koneksi = mysqli_connect($servername, $username, $password, $database);

  // Menjalankan query untuk mengambil data dari tabel siswa
  $query = "SELECT * FROM tb_siswa";
  $result = mysqli_query($koneksi, $query);

  // Menampilkan data siswa pada halaman web
  echo '<h1>Data Siswa</h1>';
  echo '<table>';
  echo '<thead>';
  echo '<tr><th>NIM</th><th>Nama</th><th>Jurusan</th></tr>';
  echo '</thead>';
  echo '<tbody>';
  while ($row = mysqli_fetch_assoc($query)) {
    echo '<tr>';
    echo '<td>'.$row['nim'].'</td>';
    echo '<td>'.$row['nama'].'</td>';
    echo '<td>'.$row['jurusan'].'</td>';
    echo '</tr>';
  }
  echo '</tbody>';
  echo '</table>';

  // Menutup koneksi ke database
  mysqli_close($koneksi);
?>
