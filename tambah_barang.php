<?php
include ('connection.php');
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>DISKOMINFO JAWA BARAT</title>
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
    border: 1px solid #ddd;
  }

  th , td {
    border: none;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}

   .btntambahbrg, .back {
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
    .btntambahbrg:hover, .back:hover {
    background-color: #387C3B;
    color: white;
  }

  input[type="text"],
  input[type="password"],
  textarea {
      display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        height: 25px;
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
    <br><br><h2>ADD BTS</h2>
  <center>
    <form method="post" action="tambah_process.php" enctype="multipart/form-data">
    <table>
      <tr>
        <td>ID Survey</td>
        <td>:</td>
        <td><input type="text" name="id_survey" required></td>
      </tr>
      <tr>
        <td>Pemilik Menara</td>
        <td>:</td>
        <td><input type="text" name="pemilik_menara" required></td>
      </tr>
    <tr>
        <td>Lokasi</td>
        <td>:</td>
        <td><input type="text" name="lokasi_menara" required></td>
      </tr>
       <tr>
        <td>Kelurahan</td>
        <td>:</td>
        <td><input type="text" name="kel_menara" required></td>
      </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td><input type="text" name="kec_menara" required></td>
      </tr>
      <tr>
        <td>Operator</td>
        <td>:</td>
        <td><input type="text" name="operator_menara" required></td>
      </tr>
     <tr>
          <td>Longdecimal</td>
          <td>:</td>
          <td><input type="text" name="longdecimal_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
      <tr>
          <td>Latdecimal</td>
          <td>:</td>
          <td><input type="text" name="latdecimal_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
      <tr>
        <td>Papan Informasi Tower</td>
        <td>:</td>
        <td><input type="text" name="papan_inform_menara" required></td>
      </tr>
       <tr>
          <td>Tower Height</td>
          <td>:</td>
          <td><input type="text" name="height_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
      <tr>
          <td>Building Height</td>
          <td>:</td>
          <td><input type="text" name="height_building" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Antenna Height</td>
          <td>:</td>
          <td><input type="text" name="height_antenna" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
        <td>Struktur Towe</td>
        <td>:</td>
        <td><input type="text" name="struktur_menara" required></td>
      </tr>
       <tr>
        <td>Kategori</td>
        <td>:</td>
        <td><input type="text" name="kategori_menara" required></td>
      </tr>
      <tr>
          <td>Tahun Pendirian</td>
          <td>:</td>
          <td><input type="text" name="tahun_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
        <td>Kelistrikan</td>
        <td>:</td>
        <td><input type="text" name="kelistrikan_menara" required></td>
      </tr>
       <tr>
          <td>Panjang</td>
          <td>:</td>
          <td><input type="text" name="panjang_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Lebar</td>
          <td>:</td>
          <td><input type="text" name="lebar_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Luas Site</td>
          <td>:</td>
          <td><input type="text" name="luas_situs" onkeypress="return allownumber(this,event);" required></td>
        </tr>
          <tr>
        <td>Type Sites</td>
        <td>:</td>
        <td><input type="text" name="type_situs" required></td>
      </tr>
        <tr>
        <td>US Public Road</td>
        <td>:</td>
        <td><input type="text" name="jalanan_menara" required></td>
      </tr>
        <tr>
        <td>Tataguna Lahan</td>
        <td>:</td>
        <td><input type="text" name="tataguna_lahan" required></td>
      </tr>
        <tr>
        <td>Status Lahan</td>
        <td>:</td>
        <td><input type="text" name="status_lahan" required></td>
      </tr>
        <tr>
        <td>Nomor IMB</td>
        <td>:</td>
        <td><input type="text" name="nomor_imb" required></td>
      </tr>
        <tr>
        <td>Nomor HO</td>
        <td>:</td>
        <td><input type="text" name="nomor_ho" required></td>
      </tr>
        <tr>
        <td>Tanggal Bulan Tahun</td>
        <td>:</td>
        <td><input type="date" name="date" required></td>
      </tr>
       <tr>
          <td>Keterangan Lain</td>
          <td>:</td>
          <td><textarea name="ket_lain_lain" cols="21" style="height: 60px" required></textarea></td>
        </tr>
        <tr>
        <td>Data IMB</td>
        <td>:</td>
        <td><input type="text" name="data_imb" required></td>
      </tr>
      <tr>
       <td>Foto</td>
          <td>:</td>
          <td><input id="uploadImage" type="file" name="image" required></td>
        </tr>
          <tr>
        <td>Zona Retribusi</td>
        <td>:</td>
        <td><input type="text" name="zona_retribusi" required></td>
      </tr>
       <tr>
          <td>Index Zona Ret</td>
          <td>:</td>
          <td><input type="text" name="index_zone_ret" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Index Struktur</td>
          <td>:</td>
          <td><input type="text" name="index_struktur" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Jumlah Index</td>
          <td>:</td>
          <td><input type="text" name="jumlah_index" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Retribusi</td>
          <td>:</td>
          <td><input type="text" name="retribusi_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
         <tr>
          <td>Tagihan</td>
          <td>:</td>
          <td><input type="text" name="tagihan_menara" onkeypress="return allownumber(this,event);" required></td>
        </tr>
              
        
      <tr>
        <td colspan="3">
          <center>
            <button type="submit" class="btntambahbrg" name="tambah"><b>+</b> Tambah BTS</button> 
          </center>
        </td>
      </tr>
    </table>
    </form>
    <br>
    <a href="goods_lists.php"><button class="back">Back</button></a>
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

  function allownumber(textbox, e) {
 
      var charCode = (e.which) ? e.which : e.keyCode;
      if (charCode == 46 || charCode > 31&& (charCode < 48 || charCode > 57)) 
         {
            alert("Value must number!!");
            return false;
         }
     else
         {
             return true;
         }
  }
</script>
</html>
