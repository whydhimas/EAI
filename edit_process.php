<?php
include('connection.php');
// == fungsi update ==
if(isset($_POST['update'])){ // ketika button update di klik

  $id = $_POST['id'];
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

  $query = mysqli_query($sambung, "SELECT * FROM tb_bts WHERE id ='$id'");
  $results = mysqli_fetch_array($query);
  if ($foto != $results['foto_menara']) {
    unlink('images/'.$results['foto_menara']);
    move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
    mysqli_query($sambung, "UPDATE tb_bts SET id_survey='$idsurvey', pemilik_menara='$pemilik', lokasi_menara='$lokasi', kel_menara='$kelurahan', kec_menara='$kecamatan', operator_menara='$operator',longdecimal_menara='$longdecimal', latdecimal_menara='$latdecimal' , papan_inform_menara='$papan', height_menara='$heightmenara' , height_building='$heightbuilding', height_antenna='$heightantenna', struktur_menara='$struktur', kategori_menara='$kategori', tahun_menara='$tahun' , kelistrikan_menara='$kelistrikan' , panjang_menara='$panjang' , lebar_menara='$lebar' , luas_situs='$luas' , type_situs='$type' , jalanan_menara='$jalanan' , tataguna_lahan='$tataguna' , status_lahan='$status' , nomor_imb='$nomorimb' , nomor_ho='$nomorho', date='$date', ket_lain_lain='$keteranganlain', data_imb='$dataimb', foto_menara='$foto', zona_retribusi='$zona', index_zone_ret='$indexzone', index_struktur='$indexstruk', jumlah_index='$jumlahindex', retribusi_menara='$retribusi', tagihan_menara='$tagihan', tanggal_update='$date_update' WHERE id='$id'");
  }else{
    mysqli_query($sambung, "UPDATE  tb_bts SET id_survey='$idsurvey', pemilik_menara='$pemilik', lokasi_menara='$lokasi', kel_menara='$kelurahan', kec_menara='$kecamatan', operator_menara='$operator',longdecimal_menara='$longdecimal', latdecimal_menara='$latdecimal' , papan_inform_menara='$papan', height_menara='$heightmenara' , height_building='$heightbuilding', height_antenna='$heightantenna', struktur_menara='$struktur', kategori_menara='$kategori', tahun_menara='$tahun' , kelistrikan_menara='$kelistrikan' , panjang_menara='$panjang' , lebar_menara='$lebar' , luas_situs='$luas' , type_situs='$type' , jalanan_menara='$jalanan' , tataguna_lahan='$tataguna' , status_lahan='$status' , nomor_imb='$nomorimb' , nomor_ho='$nomorho', date='$date', ket_lain_lain='$keteranganlain', data_imb='$dataimb', zona_retribusi='$zona', index_zone_ret='$indexzone', index_struktur='$indexstruk', jumlah_index='$jumlahindex', retribusi_menara='$retribusi', tagihan_menara='$tagihan', tanggal_update='$date_update' WHERE id='$id'");
  }
}
  echo '
  <script language="javascript">
  alert("Data Updated");
  document.location ="goods_lists.php";
  </script>
  ';
?>
