<?php
include ('connection.php');
include "session.php";

if (isset($_GET['search'])){
  $valuetosearch = $_GET['valuetosearch'];
  $query = "SELECT * FROM `tb_bts` WHERE CONCAT (`id_survey`, `pemilik_menara`, `lokasi_menara`, `kel_menara`, `kec_menara`, `operator_menara`) LIKE '%".$valuetosearch."%'";
  $search_result = filtertable($query);
}
else {
  $query = "SELECT * FROM `tb_bts`";
  $search_result = filterTable($query);
}

function filtertable($query){
  $connect = mysqli_connect("localhost", "root", "", "diskominfo_bdg");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>SEARCH BTS | DISKOMINFO KOTA BANDUNG</title>
  <link rel="shortcut icon" href="diskominfo_kota_bandung.png" />
  <style type="text/css">
  body {
    margin: 0;
    font-family: verdana;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 20%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    box-shadow: 0 0 2px 1px rgba(0,0,0,.5);
  } 

  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color: #4CAF50;
    color: white;
  }

  li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th , td {
    border: none;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

  .btnsearch {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 19px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .btnsearch:hover {
    background-color: #387C3B;
    color: white
  }

  input[type="text"],
  input[type="password"],
  textarea {
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 26px;
    width: 300px;
  }
</style>
</head>
<body>
  <ul>
    <li><center><br><img src="kota_bdg.png" width="110px;"><br><br></center></li>
    <li><a href="menu_admin.php">Home</a></li>
    <li><a href="goods_lists.php">BTS Lists</a></li>
    <li><a class="active" href="search_goods.php">Search BTS</a></li>
    <li><a href="about.php">About</a></li>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <li><a href="index.php">Back to Index</a></li>
    <li><a href="logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <br><br><h2>SEARCH BTS</h2>
    <center>
      <form method="get" action="search_result.php">
      <input type="text" name="valuetosearch" placeholder=" Search anything" />
      <button type="submit" name="search" class="btnsearch">Search</button>
      <br><br>
      <div style="height:400px; overflow:auto;">
      <table>
        <tr>
          <th>ID Survey</th>
          <th>Pemilik Menara</th>
          <th>Lokasi</th>
          <th>Kelurahan</th>
          <th>Kecamatan</th>
          <th>Operator</th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
          <td><?php echo $row['id_survey'];?></td>
          <td><?php echo $row['pemilik_menara'];?></td>
          <td><?php echo $row['lokasi_menara'];?></td>
          <td><?php echo $row['kel_menara'];?></td>
          <td><?php echo $row['kec_menara'];?></td>
          <td><?php echo $row['operator_menara'];?></td>
        </tr>
      <?php endwhile;?>
      </table>
      </div>
      </form>
      <br>
      <a href="search_goods.php"><button name="clear" class="btnsearch" style="width: 100px">Clear</button></a>
    </center>
  </div>
</body>
<script type="text/javascript">
  function ConfirmLogout()
    {
      var x = confirm("Are you sure want to logout?");
      if (x)
          return true;
      else
        return false;
    }
</script>
</html>
