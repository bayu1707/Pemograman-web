<?php
$nama = isset($_POST["nama"]) ? $_POST["nama"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$hobi = isset($_POST["hobi"]) ? $_POST["hobi"] : [];
$jenisKelamin = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : '';
$tglLahir = isset($_POST["tglLahir"]) ? $_POST["tglLahir"] : '';

// PERIKSA JENIS KELAMIN
if ($jenisKelamin == "L") {
    $jenisKelamin = "Laki-laki";
} else {
    $jenisKelamin = "Perempuan";
}

// HITUNG UMUR
function hitung_umur($tglLahir) {
    $lahir = new DateTime($tglLahir);
    $tanggal_sekarang = new DateTime();
    $umur = $tanggal_sekarang->diff($lahir);
    return $umur->y;
}

$umur = hitung_umur($tglLahir);

// PRINT NAMA, EMAIL
echo '
Nama: '.$nama.'
<br>Email: '.$email;

// PRINT HOBI
if (!empty($hobi)) {
    $jumlah_hobi = count($hobi);
    if ($jumlah_hobi == 1) {
        echo $hobi[0];
    } else {
        $hobi_terakhir = array_pop($hobi);
        $strHobi = implode(", ", $hobi)." dan ".$hobi_terakhir;
    }
    echo '<br>Hobi: '.$strHobi;
} else {
    echo '<br>Hobi: Tidak ada';
}

// PRINT JENIS KELAMIN, UMUR
echo '
<br>Jenis Kelamin: '.$jenisKelamin.'
<br>Umur: '.$umur.'
';
?>
