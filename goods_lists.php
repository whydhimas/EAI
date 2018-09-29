<?php
include 'connection.php';
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>BTS LISTS | DISKOMINFO KOTA BANDUNG</title>
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
  
   .btntambahbrg, .btnprint {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 9px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .btntambahbrg:hover, .btnprint:hover {
    background-color: #387C3B;
    color: white;
  }

  .btnedit {
    background-color: #4CAF50; /* green */
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
  .btnedit:hover {
    background-color: #387C3B;
    color: white
  }

  .btndelete {
    background-color: #D10000; /* red */
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .btndelete:hover {
    background-color: #8C0000;
    color: white
  }

  .btndetail {
    background-color: #ff9900; /* orange */
    border: none;
    color: white;
    padding: 5px 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .btndetail:hover {
    background-color: #b36b00;
    color: white
  }

</style>
</head>
<body>
  <ul>
    <li><center><br><img src="kota_bdg.png" width="110px;"><br><br></center></li>
    <li><a href="menu_admin.php">Home</a></li>
    <li><a class="active" href="goods_lists.php">BTS Lists</a></li>
    <li><a href="search_goods.php">Search BTS</a></li>
    <li><a href="about.php">About</a></li>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <li><a href="index.php">Back to Index</a></li>
    <li><a href="logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <br><br><h2>BTS LISTS & MANAGE</h2>
    <a href="tambah_barang.php"><button class="btntambahbrg"><b>+</b> Tambah BTS</button></a>
    <a href="print.php"><button class="btnprint" onClick="print_d()">Print All Data</button></a>
    <script type="javascript">
      function print_d(){
        window.open("print.php","_blank");
    }
    </script>
    <br>
    <br>
  <center>
    <div style="height:400px; overflow:auto;">
    <table border="1">
      <tr>
        <th>ID Survey</th>
          <th>Pemilik Menara</th>
          <th>Lokasi</th>
          <th>Kelurahan</th>
          <th>Kecamatan</th>
          <th>Operator</th>
          <th colspan="3">Action</th>
      </tr>
        <?php
      $results = mysqli_query($sambung, "SELECT * FROM tb_bts");
        while ($row = mysqli_fetch_array($results)) {
      ?>
      <tr>
        <td><?php echo $row['id_survey'];?></td>
          <td><?php echo $row['pemilik_menara'];?></td>
          <td><?php echo $row['lokasi_menara'];?></td>
          <td><?php echo $row['kel_menara'];?></td>
          <td><?php echo $row['kec_menara'];?></td>
          <td><?php echo $row['operator_menara'];?></td>
        <td>
          <a class="edit_btn" href="edit_goods.php?id=<?php echo $row['id'];?>"><button class="btnedit">Edit</button></a>
        </td>
        <td>
          <a class="del_btn" href="delete.php?id=<?php echo $row['id'];?>" onclick="return ConfirmDelete()"><button class="btndelete">Delete</button></a>
        </td>
        <td>
          <a class="detail_btn" href="goods_detail.php?id=<?php echo $row['id'];?>"><button class="btndetail">Detail</button></a>
        </td>
      </tr>
      <?php } ?>
    </table>
    </div>
    </center>
</body>
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

  function ConfirmDelete()
    {
      var x = confirm("Delete the data?");
      if (x)
          return true;
      else
        return false;
    }
</script>
</html>
