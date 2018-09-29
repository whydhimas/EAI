<?php
include 'connection.php';
include "session.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($sambung, "SELECT * FROM tb_bts WHERE id ='$id'");
    $results = mysqli_fetch_array($query);
    $id = $results['id'];
    $idsurvey = $results['id_survey'];
    $pemilik = $results['pemilik_menara'];
    $lokasi = $results['lokasi_menara'];
    $kelurahan = $results['kel_menara'];
    $kecamatan = $results['kec_menara'];
    $operator = $results['operator_menara'];
    $longdecimal = $results['longdecimal_menara'];
    $latdecimal = $results['latdecimal_menara'];
    $papan = $results['papan_inform_menara'];
    $heightmenara = $results['height_menara'];
    $heightbuilding = $results['height_building'];
    $heightantenna = $results['height_antenna'];
    $struktur = $results['struktur_menara'];
    $kategori = $results['kategori_menara'];
    $tahun = $results['tahun_menara'];
    $kelistrikan = $results['kelistrikan_menara'];
    $panjang = $results['panjang_menara'];
    $lebar = $results['lebar_menara'];
    $luas = $results['luas_situs'];
    $type = $results['type_situs'];
    $jalanan = $results['jalanan_menara'];
    $tataguna = $results['tataguna_lahan'];
    $status = $results['status_lahan'];
    $nomorimb = $results['nomor_imb'];
    $nomorho = $results['nomor_ho'];
    $date = $results['date'];
    $keteranganlain = $results['ket_lain_lain'];
    $dataimb = $results['data_imb'];
    $foto = $results['foto_menara'];
    $zona = $results['zona_retribusi'];
    $indexzone = $results['index_zone_ret'];
    $indexstruk = $results['index_struktur'];
    $jumlahindex = $results['jumlah_index'];
    $retribusi = $results['retribusi_menara'];
    $tagihan = $results['tagihan_menara'];
    $dateupdated = $results['tanggal_update'];
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>BTS LISTS | E-KOPMA FRI</title>
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
    padding: 5px 10px;
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

  .back {
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

  .back:hover {
    background-color: #387C3B;
    color: white;
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
    <br><br><h2>BTS DETAILS</h2>
    <div style="font-family: courier; background-color: #f2f2f2; width: 500px;">
        <table border="1">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <tr>
            <th>ID Survey</th>
            <td width="10px">:</td>
            <td width="250px"><?php echo $idsurvey;?></td>
          </tr>
          <tr>
            <th>Pemilik Menara</th>
            <td>:</td>
            <td><?php echo $pemilik;?></td>
          </tr>
          <tr>
            <th>Lokasi</th>
            <td>:</td>
            <td><?php echo $lokasi;?></td>
          <tr>
            <th>Kelurahan</th>
            <td>:</td>
            <td><?php echo $kelurahan;?></td>
          </tr>
          <tr>
            <th>Kecamatan</th>
            <td>:</td>
            <td><?php echo $kecamatan;?></td>
          </tr>
          <tr>
          <th>Operator</th>
          <td>:</td>
          <td><?php echo $operator;?></td>
          </tr>
          <tr>
            <th>Longdecimal</th>
            <td>:</td>
            <td><?php echo $longdecimal;?></td>
          </tr>
          <tr>
            <th>Latdecimal</th>
            <td>:</td>
            <td><?php echo $latdecimal;?></td>
          </tr>
          <tr>
            <th>Papan Informasi Tower</th>
            <td>:</td>
            <td><?php echo $papan;?></td>
          </tr>
          <tr>
            <th>Tower Heights</th>
            <td>:</td>
            <td><?php echo $heightmenara;?></td>
          </tr>
          <tr>
            <th>Building Heights</th>
            <td>:</td>
            <td><?php echo $heightbuilding;?></td>
          </tr>
          <tr>
            <th>Antenna Heights</th>
            <td>:</td>
            <td><?php echo $heightantenna;?></td>
          </tr>
          <tr>
            <th>Struktur Tower</th>
            <td>:</td>
            <td><?php echo $struktur;?></td>
          </tr>
          <tr>
            <th>Kategori</th>
            <td>:</td>
            <td><?php echo $kategori;?></td>
          </tr>
          <tr>
            <th>Tahun Pendirian</th>
            <td>:</td>
            <td><?php echo $tahun;?></td>
          </tr>
          <tr>
            <th>Kelistrikan</th>
            <td>:</td>
            <td><?php echo $kelistrikan;?></td>
          </tr>
           <tr>
            <th>Panjang</th>
            <td>:</td>
            <td><?php echo $panjang;?></td>
          </tr>
           <tr>
            <th>Lebar</th>
            <td>:</td>
            <td><?php echo $lebar;?></td>
          </tr>
           <tr>
            <th>Luas Site</th>
            <td>:</td>
            <td><?php echo $luas;?></td>
          </tr>
           <tr>
            <th>Type Site</th>
            <td>:</td>
            <td><?php echo $type;?></td>
          </tr>
           <tr>
            <th>US Public Road</th>
            <td>:</td>
            <td><?php echo $jalanan;?></td>
          </tr>
           <tr>
            <th>Tataguna Lahan</th>
            <td>:</td>
            <td><?php echo $tataguna;?></td>
          </tr>
           <tr>
            <th>Status Lahan</th>
            <td>:</td>
            <td><?php echo $status;?></td>
          </tr>
           <tr>
            <th>Nomor IMB</th>
            <td>:</td>
            <td><?php echo $nomorimb;?></td>
          </tr>
           <tr>
            <th>Nomor HO</th>
            <td>:</td>
            <td><?php echo $nomorho;?></td>
          </tr>
          <tr>
            <th>Tanggal Bulan Tahun</th>
            <td>:</td>
            <td><?php echo $date;?></td>
          </tr>
          <tr>
            <th>Keterangan Lain</th>
            <td>:</td>
            <td><?php echo $keteranganlain;?></td>
          </tr>
          <tr>
            <th>Data IMB</th>
            <td>:</td>
            <td><?php echo $dataimb;?></td>
          </tr>
          <tr>
            <th>Foto Menara</th>
            <td>:</td>
            <td><?php  echo "<img src=images/".$foto." width=250px>";?></td>
          </tr>
          <tr>
            <th>Zona Retribusi</th>
            <td>:</td>
            <td><?php echo $zona;?></td>
          </tr>
          <tr>
            <th>Index Zona Ret</th>
            <td>:</td>
            <td><?php echo $indexzone;?></td>
          </tr>
          <tr>
            <th>Index Struktur</th>
            <td>:</td>
            <td><?php echo $indexstruk;?></td>
          </tr>
          <tr>
            <th>Jumlah Index</th>
            <td>:</td>
            <td><?php echo $jumlahindex;?></td>
          </tr>
          <tr>
            <th>Retribusi</th>
            <td>:</td>
            <td>Rp. <?php echo $retribusi;?></td>
          </tr>
          <tr>
            <th>Tagihan</th>
            <td>:</td>
            <td>Rp. <?php echo $tagihan;?></td>
          </tr>
          <tr>
            <th>Last Updated Data</th>
            <td>:</td>
            <td><?php echo $dateupdated;?></td>
          </tr>
          <tr>
            <td>              
              <a href="goods_lists.php"><button class="back">Back</button></a>
            </td>
          </tr>
      </table>
    </div>
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
