<?php
$nama_mahasiswa =$_POST ['nama'];
$jenis_kelamin =$_POST ['jenis kelamin'];
$mata_kuliah =$_POST ['mata kuliah'];
$nomor_telepon =$_POST ['nomor telepon'];
$prodi =$_POST ['prodi'];

echo "<h1>Hasil Form Pendaftaran Mahasiswa</h1>";
echo "nama : " . $nama_mahasiswa . "<BR>"; 
echo "jenis kelamin : " . $jenis_kelamin . "<br>";
echo "mata kuliah : " . $mata_kuliah . "<br>";
echo "nomor_telepon : " . $nomor_telepon . "<br>";
echo "program_studi : " . $studi . "<br>";