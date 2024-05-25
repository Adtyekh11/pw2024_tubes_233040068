<?php 
require '../../functions.php';
$id = $_GET['id'];
if (hapus($id) > 0){
    echo "<script>
          alert('Data berhasil dihapus');
          document.location.href = '../../admin/dashboard/dashboard.php';
          </script>";
   }
?>