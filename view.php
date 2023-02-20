<?php
include('config.php');
?>

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

<body>
<h2>Maklumat Pemohon</h2>
<table>
<thead>
<tr>
<th><strong>Nama</strong></th>
<th><strong>Jantina</strong></th>
<th><strong>No. KP Baru</strong></th>
<th><strong>No. KP Lama</strong></th>
<th><strong>Tarikh Lahir</strong></th>
<th><strong>Bangsa</strong></th>
<th><strong>Warganegara</strong></th>
<th><strong>Bekas Parajurit</strong></th>
<th><strong>Ibu Tunggal</strong></th>
<th><strong>Orang Kurang Upaya</strong></th>
<th><strong>Status Perkahwinan</strong></th>
<th><strong>Action</strong></th>

</tr>
</thead>

<tbody>
<?php
$count=1;
$sql="SELECT * FROM `formpendaftaran`;";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) { ?>

<td align="center"><?php echo $row["nama"]; ?></td>
<td align="center"><?php echo $row["jantina"]; ?></td>
<td align="center"><?php echo $row["nokplama"]; ?></td>
<td align="center"><?php echo $row["nokpbaru"]; ?></td>
<td align="center"><?php echo $row["tarikhlahir"]; ?></td>
<td align="center"><?php echo $row["bangsa"]; ?></td>
<td align="center"><?php echo $row["warganegara"]; ?></td>
<td align="center"><?php echo $row["bekasparajurit"]; ?></td>
<td align="center"><?php echo $row["ibutunggal"]; ?></td>
<td align="center"><?php echo $row["oku"]; ?></td>
<td align="center"><?php echo $row["perkahwinan"]; ?></td>


<td align="center">
<a href="update.php?id=<?php echo $row['id']; ?>"style="color:	green  ;">edit
<a href="delete.php?id=<?php echo $row['id']; ?>"style="color:	red ;">delete
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<table>
<h2>Maklumat Komunikasi</h2>
    <thead>
        <tr>
            <th><strong>Alamat</strong></th>
            <th><strong>Poskod</strong></th>
            <th><strong>Negeri</strong></th>
            <th><strong>Bandar</strong></th>
            <th><strong>Action</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $sql="SELECT * FROM `formpendaftaran`;";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <td align="center"><?php echo $row["alamat"]; ?></td>
        <td align="center"><?php echo $row["poskod"]; ?></td>
        <td align="center"><?php echo $row["negeri"]; ?></td>
        <td align="center"><?php echo $row["bandar"]; ?></td>
        <td align="center"><a href="update.php?id=<?php echo $row['id']; ?>"style="color:	green  ;">edit
        <a href="delete.php?id=<?php echo $row['id']; ?>"style="color:	red ;">delete
        </td>
        </tr>
        <?php $count++; } ?>
    </tbody>
        </table>
        <table>
<h2>Lain-lain</h2>
    <thead>
        <tr>
            <th><strong>No. Tel Rumah/Pejabat</strong></th>
            <th><strong>No. Telefon Bimbit</strong></th>
            <th><strong>No. Fax</strong></th>
            <th><strong>Alamat Emel</strong></th>
            <th><strong>Action</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $sql="SELECT * FROM `formpendaftaran`;";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) { ?>
        <td align="center"><?php echo $row["telrumah"]; ?></td>
        <td align="center"><?php echo $row["notel"]; ?></td>
        <td align="center"><?php echo $row["nofax"]; ?></td>
        <td align="center"><?php echo $row["emel"]; ?></td>
        <td align="center"><a href="update.php?id=<?php echo $row['id']; ?>"style="color:	green  ;">edit
        <a href="delete.php?id=<?php echo $row['id']; ?>"style="color:	red ;">delete
        </td>
        </tr>
        <?php $count++; } ?>
    </tbody>
</table>
</div><br><br>
<button><a href="create.php">Kembali</a></button>

</body>


</html>
