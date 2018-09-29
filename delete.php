<?php
include('connection.php'); 

// == fungsi delete ==
if (isset($_GET['id'])){ // ketika link delete di klik
  $id = $_GET['id'];
  $query = mysqli_query($sambung, "SELECT * FROM tb_bts WHERE id ='$id'");
  $results = mysqli_fetch_array($query);
  unlink('images/'.$results['foto_menara']);
  mysqli_query($sambung, "DELETE FROM tb_bts WHERE id ='$id'");
  
  echo '
  <script language="javascript">
  alert("Data Deleted");
  document.location ="goods_lists.php";
  </script>
  ';
}
?>
