<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Cetak Undangan</title>
</head>
<style type="text/css">
 td {
  padding: 5px;
 }
</style>
<body  style="font-family:Times New Roman;font-size:12px">
<?php foreach($record->result() as $row){ ?>
<table style="padding-top: 3em;padding-left: 2em">
<tr>
	<td>Kepada Yth.</td>
</tr>
<tr>
	<td>Sdr/i. <?php echo $row->Nama ?></td>
</tr>
<tr>
	<td>NPU : <?php echo $row->NPU ?></td>
</tr>
<tr>
	<td>Staf Pengajar/Pegawai <?php echo $row->Instansi ?></td>
</tr>
<tr>
	<td>di -</td>                                 
</tr>
<tr>
	<td>Medan</td>
</tr>
</table>
<table style="padding-top: 8em;padding-left: 12em">
<tr>
	<td>Tanggal : <?php echo $row->Tanggal ?></td>
</tr>
<tr>
	<td>Pukul : <?php echo $row->Waktu ?></td>
</tr>
<tr>
	<td>Tempat : <?php echo $row->NamaLokasi ?></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->Alamat ?></td>
</tr>
</table>
<?php } ?>
</body>
</html>
