<?php
//buat koneksi MySQL untuk user: root, tanpa password, alamat:localhost
$con=mysqli_connect("localhost","root","","cv_db");
//cek apakah koneksi dengan MySQL berhasil
if (mysqli_connect_errno($con)){
echo "Koneksi dengan MySQL gagal :" . mysqli_connect_error();
}
else{
echo "Koneksi dengan MySQL berhasil <br>";
}

?>