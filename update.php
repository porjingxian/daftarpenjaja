<!doctype html>
<head>
<style>

    tr,td{
        border:1px solid;
        border-collapse:collapse;
        text-align:center;
        height:35px;
    }

    table{
        border-collapse:collapse;
        width: 100%;
    }

</style>
</head>
<?php

include "config.php"; 
$id = $_GET['id']; 

$sql = mysqli_query($conn,"select * from formpendaftaran where id='$id'"); 

$data = mysqli_fetch_array($sql); 

if(isset($_POST['update']))
{
    
$nama=$_POST['nama'];
$jantina=$_POST['jantina'];
$nokpbaru=$_POST['nokpbaru'];
$nokplama=$_POST['nokplama'];
$tarikhlahir=date('Y-m-d', strtotime($_POST['tarikhlahir']));
$bangsa=$_POST['bangsa'];
$warganegara=$_POST['warganegara'];
$bekasparajurit=$_POST['bekasparajurit'];
$ibutunggal=$_POST['ibutunggal'];
$oku=$_POST['oku'];
$perkahwinan=$_POST['perkahwinan'];
$alamat=$_POST['alamat'];
$poskod=$_POST['poskod'];
$negeri=$_POST['negeri'];
$bandar=$_POST['bandar'];
	
    $update = "UPDATE formpendaftaran set nama='$nama', jantina='$jantina', nokpbaru='$nokpbaru', nokplama='$nokplama',
    tarikhlahir='$tarikhlahir', bangsa='$bangsa', warganegara='$warganegara', bekasparajurit='$bekasparajurit', ibutunggal='$ibutunggal',
    oku='$oku', perkahwinan='$perkahwinan', alamat='$alamat', poskod='$poskod', negeri='$negeri', bandar='$bandar'
    where id='$id'";
	
    if(mysqli_query($conn,$update))
    {
        echo "<script>alert('Data berjaya dikemaskini');</script>";
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>
<h2>Kemaskini Maklumat Pemohon</h2>
<form method="POST">
<table>
<tr>
    <td><label>Nama: </label>   </td>
    <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
    <td><label>Jantina: </label></td>
    <td><input type="radio" name="jantina" value="Lelaki">Lelaki<input type="radio" name="jantina" value="Perempuan">Perempuan</td>
</tr>
<tr>
    <td><label>No. KP Baru: </label></td>
    <td><input type="text" name="nokpbaru" value="<?php  echo $data['nokpbaru'] ?>"></td>
    <td><label>No. KP Lama</label></td>
    <td><input type="text" name="nokplama" value="<?php  echo $data['nokplama'] ?>"></td>
</tr>
<tr>
    <td><label>Tarikh Lahir: </label></td>
    <td><input type="date" name="tarikhlahir" value="<?php  echo $data['tarikhlahir'] ?>"></td>
    <td><label>Bangsa: </label></td>
    <td><select name="bangsa"><option value="<?php echo $data['bangsa'] ?>"><?php echo $data['bangsa'] ?></option>
    <option value="Melayu">Melayu</option><option value="Cina">Cina</option><option value="India">India</option><option value="Lain-lain">Lain-lain</option></select></td>
</tr>
<tr>
    <td><label>Warganegara: </label></td>
    <td><select name="warganegara"><option value="<?php echo $data['warganegara'] ?>"><?php echo $data['warganegara'] ?></option>
    <option value="Warga Malaysia">Warga Malaysia</option><option value="Lain-lain">Lain-lain</option></select></td>
    <td><label>Bekas Parajurit</label></td>
    <td><input type="radio" name="bekasparajurit" value="Ya">Ya<input type="radio" name="bekasparajurit" value="Tidak">Tidak</td>
</tr>
<tr>
    <td><label>Ibu Tunggal: </label></td>
    <td><input type="radio" name="ibutunggal" value="Ya">Ya<input type="radio" name="ibutunggal" value="Tidak">Tidak</td>
    <td><label>Orang Kurang Upaya: </label></td>
    <td><input type="radio" name="oku" value="Ya">Ya<input type="radio" name="oku" value="Tidak">Tidak</td>
</tr>
<tr>
    <td><label>Status Perkahwinan: </label></td>
    <td><select name="perkahwinan"><option value="<?php echo $data['perkahwinan'] ?>"><?php echo $data['perkahwinan'] ?></option>
    <option value="Bujang">Bujang</option><option value="Berkahwin">Berkahwin</option></select></td>
</tr>
</table>
<h2>Kemaskini Maklumat Komunikasi</h2>
<table>
<tr>
    <td><label>Alamat: </label></td>
    <td><textarea rows="4" cols="40" name="alamat"><?php  echo $data['alamat'] ?></textarea></td>
    <td><label>Poskod: </label></td>
    <td><input type="text" name="poskod" value="<?php  echo $data['poskod'] ?>"></td>
</tr>
<tr>
    <td><label>Negeri: </label></td>
    <td><input type="text" name="negeri" value="<?php  echo $data['negeri'] ?>"></td>
    <td><label>Bandar: </label></td>
    <td><input type="text" name="bandar" value="<?php  echo $data['bandar'] ?>"></td>
</tr>
</table>
<h2>Lain-lain</h2>
<table>
<tr>
<td><label>No. Tel Rumah/Pejabat: </label></td>
<td><input type="text" name="telrumah" value="<?php echo $data['telrumah'] ?>"></td>
<td><label>No. Telefon Bimbit: </label></td>
<td><input type="text" name="notel" value="<?php echo $data['notel'] ?>"></td>
</tr>
<tr>
<td><label>No. Fax: </label></td>
<td><input type="text" name="nofax" value="<?php echo $data['nofax'] ?>"></td>
<td><label>Alamat Emel: </label></td>
<td><input type="text" name="emel" value="<?php echo $data['emel']?>"></td>
</tr>
</table>
<br>
  <input type="submit" name="update" value="Kemaskini">
  <button><a href="view.php">Kembali</a></button>
</form>
</body>
</html>