<?php
include ('connection.php');
// == fungsi input ==
if (isset($_POST['tambah'])) {

    $idsurvey = $_POST['id_survey'];
    $pemilik = $_POST['pemilik_menara'];
    $lokasi = $_POST['lokasi_menara'];
    $kelurahan = $_POST['kel_menara'];
    $kecamatan = $_POST['kec_menara'];
    $operator = $_POST['operator_menara'];
    $longdecimal = $_POST['longdecimal_menara'];
    $latdecimal = $_POST['latdecimal_menara'];
    $papan = $_POST['papan_inform_menara'];
    $heightmenara = $_POST['height_menara'];
    $heightbuilding = $_POST['height_building'];
    $heightantenna = $_POST['height_antenna'];
    $struktur = $_POST['struktur_menara'];
    $kategori = $_POST['kategori_menara'];
    $tahun = $_POST['tahun_menara'];
    $kelistrikan = $_POST['kelistrikan_menara'];
    $panjang = $_POST['panjang_menara'];
    $lebar = $_POST['lebar_menara'];
    $luas = $_POST['luas_situs'];
    $type = $_POST['type_situs'];
    $jalanan = $_POST['jalanan_menara'];
    $tataguna = $_POST['tataguna_lahan'];
    $status = $_POST['status_lahan'];
    $nomorimb = $_POST['nomor_imb'];
    $nomorho = $_POST['nomor_ho'];
    $date = $_POST['date'];
    $keteranganlain = $_POST['ket_lain_lain'];
    $dataimb = $_POST['data_imb'];
    $foto = $_FILES['image']['name'];
    $zona = $_POST['zona_retribusi'];
    $indexzone = $_POST['index_zone_ret'];
    $indexstruk = $_POST['index_struktur'];
    $jumlahindex = $_POST['jumlah_index'];
    $retribusi = $_POST['retribusi_menara'];
    $tagihan = $_POST['tagihan_menara'];
    $date_update = date('Y-m-d H:i:s');

  // $kode = $_POST['kode']; 
  // $nama = $_POST['nama'];
  // $jenis = $_POST['jenis'];
  // $harga = $_POST['harga'];
  // $stock = $_POST['stock'];
  // $berat = $_POST['berat'];
  // $keterangan = $_POST['keterangan'];
  // $fileName = $_FILES['image']['name'];
  // $date = date('Y-m-d H:i:s');

  $query = "INSERT INTO tb_bts (id_survey, pemilik_menara, lokasi_menara, kel_menara, kec_menara, operator_menara, longdecimal_menara, latdecimal_menara, papan_inform_menara, height_menara, height_building, height_antenna, struktur_menara, kategori_menara, tahun_menara, kelistrikan_menara, panjang_menara, lebar_menara, luas_situs, type_situs, jalanan_menara, tataguna_lahan, status_lahan, nomor_imb, nomor_ho, date, ket_lain_lain, data_imb, foto_menara, zona_retribusi, index_zone_ret, index_struktur, jumlah_index, retribusi_menara, tagihan_menara, tanggal_update) VALUES ('$idsurvey','$pemilik','$lokasi','$kelurahan','$kecamatan','$operator','$longdecimal','$latdecimal','$papan', '$heightmenara', '$heightbuilding', '$heightantenna', '$struktur', '$kategori', '$tahun','$kelistrikan', '$panjang', '$lebar', '$luas', '$type', '$jalanan', '$tataguna', '$status', '$nomorimb', '$nomorho', '$date', '$keteranganlain', '$dataimb', '$foto', '$zona', '$indexzone', '$indexstruk', '$jumlahindex', '$retribusi', '$tagihan','$date_update')";
  mysqli_query($sambung, $query);
  echo '
  <script language="javascript">
  alert("Data Added ");
  document.location ="goods_lists.php";
  </script>
  ';

  move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
  
}
?>
