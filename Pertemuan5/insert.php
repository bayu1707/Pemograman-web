<?php
  // KONEKSI DATABASE
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web009";

  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Cek koneksi
  if ($conn->connect_error) {
      die("Koneksi gagal: " . $conn->connect_error);
  }

  // PROSES DATA SAAT FORM DISUBMIT
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $hobi = implode(", ", $_POST["hobi"]); // Menggabungkan hobi menjadi string
      $jenisKelamin = $_POST["jenis_kelamin"] == "L" ? "Laki-laki" : "Perempuan";
      $tglLahir = $_POST["tglLahir"];

      // INSERT DATA KE DATABASE
      $sql = "INSERT INTO kontak (nama, email, hobi, jkel)
              VALUES ('$nama', '$email', '$hobi', '$jenisKelamin')";

      if ($conn->query($sql) === TRUE) {
          echo "Data berhasil disimpan!";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

  $conn->close();
?>