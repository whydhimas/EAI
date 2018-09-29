<?php
include ('connection.php');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = mysqli_query($sambung, "SELECT * FROM tb_bts WHERE id ='$id'");
  $row = mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row['pemilik_menara'];?></title>
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
    <div style="font-family: courier; background-color: #f2f2f2; width: 500px;">
        <table>
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <tr>
            <th>ID Survey</th>
            <td width="10px">:</td>
            <td width="250px"><?php echo $row['id_survey'];?></td>
          </tr>
          <tr>
            <th>Pemilik Menara</th>
            <td>:</td>
            <td><?php echo $row['pemilik_menara'];?></td>
          </tr>
          <tr>
            <th>Lokasi</th>
            <td>:</td>
            <td><?php echo $row['lokasi_menara'];?></td>
          <tr>
            <th>Kelurahan</th>
            <td>:</td>
            <td><?php echo $row['kel_menara'];?></td>
          </tr>
          <tr>
            <th>Kecamatan</th>
            <td>:</td>
            <td><?php echo $row['kec_menara'];?></td>
          </tr>
          <tr>
          <th>Operator</th>
          <td>:</td>
          <td><?php echo $row['operator_menara'];?></td>
          </tr>
          <tr>
            <th>Longdecimal</th>
            <td>:</td>
            <td><?php echo $row['longdecimal_menara'];?></td>
          </tr>
          <tr>
            <th>Latdecimal</th>
            <td>:</td>
            <td><?php echo $row['latdecimal_menara'];?></td>
          </tr>
          <tr>
            <th>Papan Informasi Tower</th>
            <td>:</td>
            <td><?php echo $row['papan_inform_menara'];?></td>
          </tr>
          <tr>
            <th>Tower Heights</th>
            <td>:</td>
            <td><?php echo $row['height_menara'];?></td>
          </tr>
          <tr>
            <th>Building Heights</th>
            <td>:</td>
            <td><?php echo $row['height_building'];?></td>
          </tr>
          <tr>
            <th>Antenna Heights</th>
            <td>:</td>
            <td><?php echo $row['height_antenna'];?></td>
          </tr>
          <tr>
            <th>Struktur Tower</th>
            <td>:</td>
            <td><?php echo $row['struktur_menara'];?></td>
          </tr>
          <tr>
            <th>Kategori</th>
            <td>:</td>
            <td><?php echo $row['kategori_menara'];?></td>
          </tr>
          <tr>
            <th>Tahun Pendirian</th>
            <td>:</td>
            <td><?php echo $row['tahun_menara'];?></td>
          </tr>
          <tr>
            <th>Kelistrikan</th>
            <td>:</td>
            <td><?php echo $row['kelistrikan_menara'];?></td>
          </tr>
           <tr>
            <th>Panjang</th>
            <td>:</td>
            <td><?php echo $row['panjang_menara'];?></td>
          </tr>
           <tr>
            <th>Lebar</th>
            <td>:</td>
            <td><?php echo $row['lebar_menara'];?></td>
          </tr>
           <tr>
            <th>Luas Site</th>
            <td>:</td>
            <td><?php echo $row['luas_situs'];?></td>
          </tr>
           <tr>
            <th>Type Site</th>
            <td>:</td>
            <td><?php echo $row['type_situs'];?></td>
          </tr>
           <tr>
            <th>US Public Road</th>
            <td>:</td>
            <td><?php echo $row['jalanan_menara'];?></td>
          </tr>
           <tr>
            <th>Tataguna Lahan</th>
            <td>:</td>
            <td><?php echo $row['tataguna_lahan'];?></td>
          </tr>
           <tr>
            <th>Status Lahan</th>
            <td>:</td>
            <td><?php echo $row['status_lahan'];?></td>
          </tr>
           <tr>
            <th>Nomor IMB</th>
            <td>:</td>
            <td><?php echo $row['nomor_imb'];?></td>
          </tr>
           <tr>
            <th>Nomor HO</th>
            <td>:</td>
            <td><?php echo $row['nomor_ho'];?></td>
          </tr>
          <tr>
            <th>Tanggal Bulan Tahun</th>
            <td>:</td>
            <td><?php echo $row['date'];?></td>
          </tr>
          <tr>
            <th>Keterangan Lain</th>
            <td>:</td>
            <td><?php echo $row['ket_lain_lain'];?></td>
          </tr>
          <tr>
            <th>Data IMB</th>
            <td>:</td>
            <td><?php echo $row['data_imb'];?></td>
          </tr>
          <tr>
            <th>Foto</th>
            <td>:</td>
            <td><?php echo $row['foto_menara'];?></td>
          </tr>
          <tr>
            <th>Zona Retribusi</th>
            <td>:</td>
            <td><?php echo $row['zona_retribusi'];?></td>
          </tr>
          <tr>
            <th>Index Zona Ret</th>
            <td>:</td>
            <td><?php echo $row['index_zone_ret'];?></td>
          </tr>
          <tr>
            <th>Index Struktur</th>
            <td>:</td>
            <td><?php echo $row['index_struktur'];?></td>
          </tr>
          <tr>
            <th>Jumlah Index</th>
            <td>:</td>
            <td><?php echo $row['jumlah_index'];?></td>
          </tr>
          <tr>
            <th>Retribusi</th>
            <td>:</td>
            <td>Rp. <?php echo $row['retribusi_menara'];?></td>
          </tr>
          <tr>
            <th>Tagihan</th>
            <td>:</td>
            <td>Rp. <?php echo $row['tagihan_menara'];?></td>
          </tr>
          <tr>
            <th>Last Updated Data</th>
            <td>:</td>
            <td><?php echo $row['tanggal_update'];?></td>
          </tr>
          <tr>
            <th>Foto Menara</th>
            <td>:</td>
            <td width="100px">
              <?php
                echo "<img src=images/".$row['foto_menara']." width=250px>";
              ?>
            </td> 
          </tr>
          <tr>
            <th rowspan="3" colspan="3">
              <div id="map" style="width:450px; height:400px;"></div>
              <script>
                // Initialize and add the map
                function initMap() {
                  // The location of BTS
                  var placeBTS = {lat: <?php echo $row['latdecimal_menara'];?>, lng: <?php echo $row['longdecimal_menara'];?>};
                  // The map, centered at BTSxEXO
                  var map = new google.maps.Map(
                      document.getElementById('map'), {zoom: 16, center: placeBTS});
                  // The marker, positioned at BTS
                  var marker = new google.maps.Marker({position: placeBTS, map: map});
                }
              </script>
              <!-- API KEY dapat dari CREDENTIALS -->
              <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyFVIASm4akbkISkxyXv3BX3_ma9qB0os&callback=initMap"></script>
            </th>
            <td></td>
          </tr>
      </table>
    </div>
    <br>
    </center>
</body>
</html>