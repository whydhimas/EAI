<?php
include ('connection.php');

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
	<title>BTS LIST | DISKOMINFO KOTA BANDUNG</title>
  <link rel="shortcut icon" href="diskominfo_kota_bandung.png" />
  
	<style>

body {
  margin: 0;
  font-family: verdana;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid #ddd;
  }

  tr , td, th {
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

  .btnlogin {
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

  .btnlogin:hover {
    background-color: #387C3B;
    color: white;
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
	<div style="background-color: #f2f2f2; position: fixed; top: 0; right: 0; left: 0; box-shadow: 0 0 2px 1px rgba(0,0,0,.5);">
		<br>
			<center><img src="kota_bdg.png" width="80px"></center>
		<br>
	</div>
	<br><br><br><br><br><br><br>
  <center>
    <div>
      <form method="get" action="goods_for_user.php">
      <input type="text" name="valuetosearch" placeholder=" Search anything" />
      <button type="submit" name="search" class="btnsearch">Search</button>
      </form>
      <br>
      <div style="height:400px; overflow:auto;">
      <table>
        <tr>
          <th>ID Survey</th>
          <th>Pemilik Menara</th>
          <th>Lokasi</th>
          <th>Kelurahan</th>
          <th>Kecamatan</th>
          <th>Operator</th>
          <th></th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
          <td><?php echo $row['id_survey'];?></td>
          <td><?php echo $row['pemilik_menara'];?></td>
          <td><?php echo $row['lokasi_menara'];?></td>
          <td><?php echo $row['kel_menara'];?></td>
          <td><?php echo $row['kec_menara'];?></td>
          <td><?php echo $row['operator_menara'];?></td>
          <td><a href="goods_for_user_detail.php?id=<?php echo $row['id'];?>" class="detail_btn" onclick="window.open('goods_for_user_detail.php?id=<?php echo $row['id'];?>', 'newwindow', 'width=550,height=600'); return false;"><button class="btndetail">Detail</button></a></td>
        </tr>
        <?php endwhile;?>
      </table>
      </div>
    </div>
    <a href="page_login.php"><button class="btnlogin" style="vertical-align:middle;"><span>Are u Admin?</span></button></a>
    </center>
</body>
</html>