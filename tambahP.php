<?php
include 'koneksi.php';
$username	= $_POST['username'];
$password  = md5($_POST['password']);
$nip 	    = $_POST['nip'];
$nama 	= $_POST['nama'];
$jabatan 	= $_POST['jabatan'];
$alamat 	= $_POST['alamat'];
$sql= "insert into admin(username,password,id,nama,jabatan,alamat)values('$username','$password','$nip','$nama','$jabatan','$alamat')";

      
if (!mysqli_query($conn, $sql))
{
    echo "<script> alert('Gagal menambahkan pegawai'); location = 'pegawai.php'; </script>";             	
 }
else
 {               
    echo "<script> alert('Berhasil menambahkan pegawai'); location = 'pegawai.php'; </script>";
    
 }
      

?>
       
      	

