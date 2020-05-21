<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS2 smt4</title>
</head>
<body>
    <h1 style="text-align: center; font-size:50px;"> Form Penginputan Data BUKU</h1>
    
<form method="get" name="frm" action="">
  <input name="jumlah" type="text" />
  <input type="submit" name="btnJumlah" value="Ok" />
  </form>

<form method="post" name="frmpost" action="">

  <table width="547" border="0" cellpadding="0" cellspacing="0">
  <tr>

  <td width="32" height="22" valign="top">No</td>
  <td width="114" valign="top">Kode Buku</td>
  <td width="240" valign="top">Judul Buku</td>
  <td width="161" valign="top">Tahun Terbit</td>
  <td width="161" valign="top">Pengarang</td>

  </tr>

  <?php
  if(isset($_GET['jumlah']) && $_GET['jumlah']>0){
  $jumlah_form = $_GET['jumlah'];
  }
  else{
  $jumlah_form = 1;
  }
  for($i=1; $i<=$jumlah_form; $i++){
  ?>
  <tr>
  <td height="23"><?php echo $i; ?></td>
  <td><input name="kode[]" type="text" size="10" /></td>
  <td><input name="judul[]" type="text" size="30" /></td>
  <td><input name="tahun[]" type="text" size="30" /></td>
  <td><input name="pengarang[]" type="text" /></td>
  </tr>
  <?php
  }
  ?>
  <tr>
  <td height="23" colspan="4" align="right"><input type="submit" name="btnOk" value="Simpan" /></td>
  </tr>
  </table>
  </form>
  <?php
  
  if(isset($_POST['btnOk'])){

  $kode = $_POST['kode'];
  $judul = $_POST['judul'];
  $tahun = $_POST['tahun'];
  $pengarang= $_POST['pengarang'];

  foreach($kode as $key => $val){
  echo 'Kode Buku = '.$kode[$key].', Judul Buku = '.$judul[$key].', Tahun Terbit = '.$tahun[$key]. ', Pengarang = '.$pengarang[$key].'<br/>';
   }}
  ?>
</body>
</html>