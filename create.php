<?php
include('config.php');
?>

<!doctype html>
<head>
    <style>
        td,tr{
            border-collapse:collapse;
            height:30px;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
    </style>
</head>
<body>
    
<h2>Maklumat Pemohon</h2>
<form method="POST">
<table>
<tr>
    <td><label>Nama: </label>   </td>
    <td><input type="text" name="nama"></td>
    <td><label>Jantina: </label></td>
    <td><input type="radio" name="jantina" value="Lelaki">Lelaki<input type="radio" name="jantina" value="Perempuan">Perempuan</td>
</tr>
<tr>
    <td><label>No. KP Baru: </label></td>
    <td><input type="text" name="nokpbaru"></td>
    <td><label>No. KP Lama</label></td>
    <td><input type="text" name="nokplama"></td>
</tr>
<tr>
    <td><label>Tarikh Lahir: </label></td>
    <td><input type="date" name="tarikhlahir"></td>
    <td><label>Bangsa: </label></td>
    <td><select name="bangsa"><option value="Melayu">Melayu</option><option value="Cina">Cina</option><option value="India">India</option><option value="Lain-lain">Lain-lain</option></select></td>
</tr>
<tr>
    <td><label>Warganegara: </label></td>
    <td><select name="warganegara"><option value="Warga Malaysia">Warga Malaysia</option><option value="Lain-lain">Lain-lain</option></select></td>
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
    <td><select name="perkahwinan"><option value="Bujang">Bujang</option><option value="Berkahwin">Berkahwin</option></select></td>
</tr>


<tr><td><h2>Maklumat Komunikasi</h2></tr></td>

<tr>
    <td><label>Alamat: </label></td>
    <td><textarea rows="4" cols="40" name="alamat"></textarea></td>
    <td><label>Poskod: </label></td>
    <td><input type="text" name="poskod"></td>
</tr>
<tr>
    <td><label>Negeri: </label></td>
    <td><input type="text" name="negeri"></td>
    <td><label>Bandar: </label></td>
    <td><input type="text" name="bandar"></td>
</tr>
<tr><td><h2>Lain-lain</h2></tr></td>
<tr>
<td><label>No. Tel Rumah/Pejabat: </label></td>
<td><input type="text" name="telrumah"></td>
<td><label>No. Telefon Bimbit: </label></td>
<td><input type="text" name="notel"></td>
</tr>
<tr>
<td><label>No. Fax: </label></td>
<td><input type="text" name="nofax"></td>
<td><label>Alamat Emel: </label></td>
<td><input type="text" name="emel"></td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="Hantar">
<button><a href="view.php">Papar</a></button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

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
$telrumah=$_POST['telrumah'];
$notel=$_POST['notel'];
$nofax=$_POST['nofax'];
$emel=$_POST['emel'];

    $sql="INSERT into formpendaftaran (nama, jantina, nokpbaru, nokplama, tarikhlahir, bangsa, warganegara, bekasparajurit,
    ibutunggal, oku, perkahwinan, alamat, poskod, negeri, bandar, telrumah, notel, nofax, emel) values ('$nama','$jantina','$nokpbaru','$nokplama', '$tarikhlahir','$bangsa',
    '$warganegara','$bekasparajurit','$ibutunggal','$oku','$perkahwinan','$alamat',$poskod,'$negeri','$bandar','$telrumah','$notel','$nofax','$emel')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Data berjaya didaftarkan');</script>";
    }else{
        echo "Error: " . mysqli_error($conn);
    } 
}

?>