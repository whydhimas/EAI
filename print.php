<?php
include 'connection.php';
include "session.php";
$data = mysql_query("select * from tb_barang");
?>

<style type="text/css">
  body {
    margin: 0;
    font-family: verdana;
  }

  th {
    background-color: #efefef;
  }
</style>

<html>
<head>
  <title>The Report</title>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body><br><br>
  <img src="kota_bdg.png" height="80"><center><h3>LAPORAN DAFTAR BTS<br>DINAS KOMUNIKASI DAN INFORMATIKA<br>KOTA BANDUNG</h3></center><br>
  <label>Dicetak pada: <br><label id="tanggalreal"></label></label><br><br>
  <label>Oleh : Admin<br></label><br><br>
  <table border="1" width="100%" style="border-collapse:collapse;" align="center">
    <tr class="tableheader" style="height: 30px;">
      <th>Kode</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stock</th>
      <th>Berat</th>
    </tr>
    <?php while($hasil = mysql_fetch_array($data)){ ?>
    <tr id="rowHover">
      <td width="10%" align="center"><?php echo $hasil['code_brg']; ?></td>
      <td width="30%" id="column_padding">&nbsp;<?php echo $hasil['nama_brg']; ?></td>
      <td width="10%" id="column_padding">&nbsp;Rp.<?php echo $hasil['harga_brg']; ?>,00</td>
      <td width="10%" id="column_padding">&nbsp;<?php echo $hasil['stock_brg']; ?></td>
      <td width="10%" id="column_padding">&nbsp;<?php echo $hasil['berat_brg']; ?>&nbsp;gram</td>
    </tr>
    <?php } ?>
    </table>
    <script>
      window.load = print_d();
      function print_d(){
      window.print();

      document.getElementById("tanggalreal").innerHTML = Date();

      }
    </script>
</body>
</html>  