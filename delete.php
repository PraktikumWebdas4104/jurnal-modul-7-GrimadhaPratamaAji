<?php 
require_once("DB.php");
$nim = $_GET["nim"];
$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
if(mysqli_query($conn,$query)) {
  header("Location: list.php");
}else {
  echo "Gagal menghapus data ". $nim;
}