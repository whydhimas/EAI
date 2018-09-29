<?php
include ('connection.php');
include "session.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($sambung, "SELECT * FROM tb_bts WHERE id ='$id'");
    $results = mysqli_fetch_array($query);
    $id = $results['id'];
    $idsurvey = $results['id_survey'];
    $pemilikmenara  = $results['pemilik_menara'];
    $lokasimenara = $results['lokasi_menara'];
    $kelurahanmenara  = $results['kel_menara'];
    $kecamatanmenara = $results['kec_menara'];
    $operatormenara = $results['operator_menara'];
    $longdecimalmenara = $results['longdecimal_menara'];
    $Latdecimalmenara = $results['latdecimal_menara'];
    $papaninformmenara = $results['papan_inform_menara'];
    $heightmenara = $results['height_menara'];
    $heightbuilding = $results['height_building'];
    $heightantenna = $results['height_antenna'];
    $strukturmenara = $results['struktur_menara'];
    $kategorimenara = $results['kategori_menara'];
    $tahunmenara = $results['tahun_menara'];
    $kelistrikanmenara = $results['kelistrikan_menara'];
    $panjangmenara = $results['panjang_menara'];
    $lebarmenara = $results['lebar_menara'];
    $luassitus = $results['luas_situs'];
    $typesitus = $results['type_situs'];
    $jalananmenara = $results['jalanan_menara'];
    $tatagunalahan = $results['tataguna_lahan'];
    $statuslahan = $results['status_lahan'];
    $nomorimb = $results['nomor_imb'];
    $nomorho = $results['nomor_ho'];
    $date = $results['date'];
    $ketlainlain = $results['ket_lain_lain'];
    $dataimb = $results['data_imb'];
    $fotomenara = $results['foto_menara'];
    $zonaretribusi = $results['zona_retribusi'];
    $indexzoneret = $results['index_zone_ret'];
    $indexstruktur = $results['index_struktur'];
    $jumlahindex = $results['jumlah_index'];
    $retribusimenara = $results['retribusi_menara'];
    $tagihanmenara = $results['tagihan_menara'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>EDIT BTS | E-KOPMA FRI</title>
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

   .btntedit, .back {
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
    .btntedit:hover, .back:hover {
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
    <br><br><h2>EDIT BTS</h2>
  <center>
    <form method="post" action="edit_process.php" enctype="multipart/form-data">
    <table>
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <tr>
        <td width="130px">ID Survey</td>
        <td width="20px">:</td>
        <td width="250px"><input type="text" name="id_survey" value="<?php echo $idsurvey;?>"></td>
      </tr>
      <tr>
        <td>Pemilik Menara</td>
        <td>:</td>
        <td><input type="text" name="pemilik_menara" value="<?php echo $pemilikmenara;?>"></td>
      </tr>
      <tr>
       <td>Lokasi Menara</td>
        <td>:</td>
        <td><input type="text" name="lokasi_menara" value="<?php echo $lokasimenara;?>"></td>
         </tr>

        <tr>
         <td>Kelurahan Menara</td>
        <td>:</td>
        <td><input type="text" name="kel_menara" value="<?php echo $kelurahanmenara;?>"></td>
        </tr>
        <tr>
         <td>Kecamatan Menara</td>
        <td>:</td>
        <td><input type="text" name="kec_menara" value="<?php echo $kecamatanmenara;?>"></td>
        </tr>
        <tr>
          <td>Operator Menara</td>
        <td>:</td>
        <td><input type="text" name="operator_menara" value="<?php echo $operatormenara;?>"></td>
        </tr>
        <tr>
          <td>Longdecimal Menara</td>
        <td>:</td>
        <td><input type="text" name="longdecimal_menara" value="<?php echo $longdecimalmenara;?>"></td>
        </tr>
        <tr>
          <td>Latdecimal Menara</td>
        <td>:</td>
        <td><input type="text" name="latdecimal_menara" value="<?php echo $Latdecimalmenara;?>"></td>
        </tr>
         <tr>
          <td>Papan Inform Menara</td>
        <td>:</td>
        <td><input type="text" name="papan_inform_menara" value="<?php echo $papaninformmenara;?>"></td>
        </tr>
         <tr>
          <td>Height Menara</td>
        <td>:</td>
        <td><input type="text" name="height_menara" value="<?php echo $heightmenara?>"></td>
        </tr>
         <tr>
          <td>Height Building</td>
        <td>:</td>
        <td><input type="text" name="height_building" value="<?php echo $heightbuilding;?>"></td>
        </tr>
         <tr>
          <td>Height Antenna</td>
        <td>:</td>
        <td><input type="text" name="height_antenna" value="<?php echo $heightantenna;?>"></td>
        </tr>
         <tr>
          <td>Struktur Menara</td>
        <td>:</td>
        <td><input type="text" name="struktur_menara" value="<?php echo $strukturmenara;?>"></td>
        </tr>
         <tr>
          <td>Kategori Menara</td>
        <td>:</td>
        <td><input type="text" name="kategori_menara" value="<?php echo $kategorimenara;?>"></td>
        </tr>
         <tr>
          <td>Tahun Menara</td>
        <td>:</td>
        <td><input type="text" name="tahun_menara" value="<?php echo $tahunmenara;?>"></td>
        </tr>
         <tr>
          <td>Kelistrikan Menara</td>
        <td>:</td>
        <td><input type="text" name="kelistrikan_menara" value="<?php echo $kelistrikanmenara;?>"></td>
        </tr>
         <tr>
          <td>Panjang Menara</td>
        <td>:</td>
        <td><input type="text" name="panjang_menara" value="<?php echo $panjangmenara;?>"></td>
        </tr>
         <tr>
          <td>Lebar Menara</td>
        <td>:</td>
        <td><input type="text" name="lebar_menara" value="<?php echo $lebarmenara;?>"></td>
        </tr>
         <tr>
          <td>Luas Situs</td>
        <td>:</td>
        <td><input type="text" name="luas_situs" value="<?php echo $luassitus;?>"></td>
        </tr>
         <tr>
          <td>Type Situs</td>
        <td>:</td>
        <td><input type="text" name="type_situs" value="<?php echo $typesitus;?>"></td>
        </tr>
         <tr>
          <td>Jalanan Menara</td>
        <td>:</td>
        <td><input type="text" name="jalanan_menara" value="<?php echo $jalananmenara;?>"></td>
        </tr>
         <tr>
          <td>Tataguna Lahan</td>
        <td>:</td>
        <td><input type="text" name="tataguna_lahan" value="<?php echo $tatagunalahan;?>"></td>
        </tr>
         <tr>
          <td>Status Lahan</td>
        <td>:</td>
        <td><input type="text" name="status_lahan" value="<?php echo $statuslahan;?>"></td>
        </tr>
         <tr>
          <td>Nomor IMB</td>
        <td>:</td>
        <td><input type="text" name="nomor_imb" value="<?php echo $nomorimb;?>"></td>
        </tr>
         <tr>
          <td>Nomor HO</td>
        <td>:</td>
        <td><input type="text" name="nomor_ho" value="<?php echo $nomorho;?>"></td>
        </tr>
         <tr>
          <td>Tanggal Bulan Tahun</td>
        <td>:</td>
        <td><input type="date" name="date" value="<?php echo $date;?>"></td>
        </tr>
         <tr>
          <td>Keterangan Lain-Lain</td>
        <td>:</td>
        <td><input type="text" name="ket_lain_lain" value="<?php echo $ketlainlain;?>"></td>
        </tr>
         <tr>
          <td>Data IMB</td>
        <td>:</td>
        <td><input type="text" name="data_imb" value="<?php echo $dataimb;?>"></td>
        </tr>
         <tr>
          <td>Gambar</td>
          <td>:</td>
          <td width="100px">
            <?php
              echo "<img src=images/".$fotomenara." width=250px>";
            ?>
            <input id="uploadImage" type="file" name="image" required>
          </td>
        </tr>
         <tr>
          <td>Zona Retribusi</td>
        <td>:</td>
        <td><input type="text" name="zona_retribusi" value="<?php echo $zonaretribusi;?>"></td>
        </tr>
         <tr>
          <td>Index Zone Ret</td>
        <td>:</td>
        <td><input type="text" name="index_zone_ret" value="<?php echo $indexzoneret;?>"></td>
        </tr>
         <tr>
          <td>Index Struktur</td>
        <td>:</td>
        <td><input type="text" name="index_struktur" value="<?php echo $indexstruktur;?>"></td>
        </tr>
         <tr>
          <td>Jumlah Index</td>
        <td>:</td>
        <td><input type="text" name="jumlah_index" value="<?php echo $jumlahindex;?>"></td>
        </tr>
         <tr>
          <td>Retribusi Menara</td>
        <td>:</td>
        <td><input type="text" name="retribusi_menara" value="<?php echo $retribusimenara;?>"></td>
        </tr>
         <tr>
          <td>Tagihan Menara</td>
        <td>:</td>
        <td><input type="text" name="tagihan_menara" value="<?php echo $tagihanmenara;?>"></td>
        </tr>
        <tr>
          <td colspan="3">
            <center>
              <button type="submit" class="btntedit" name="update">Update Barang</button> 
            </center>
          </td>
        </tr>
    </table>
    </form>
    <br>
    <a href="goods_lists.php"><button class="back">Back</button></a>
  </center>
</body>
</body>
<script type="text/javascript">
  function ConfirmLogout() {
      var x = confirm("Are you sure want to logout?");
      if (x)
          return true;
      else
        return false;
  }

  function allownumber(textbox, e) {
      var charCode = (e.which) ? e.which : e.keyCode;
      if (charCode == 46 || charCode > 31&& (charCode < 48 || charCode > 57)) {
        alert("Value must number!!");
        return false;
      } else {
        return true;
      }
  }

  function validatePicture(){
    var x = document.input["update"]["image"].value;
    if (x == null || x == ""){
      alert("Must upload image");
      return false;
    }
  }
</script>
</html>
