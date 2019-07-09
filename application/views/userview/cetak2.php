<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Cetak Badge</title>
    <style type="text/css">
		.font{
			font-size: 14px;
		}
	</style>
</head>
<body  style="font-family:Times New Roman;font-size:12px">
<img src="<?php echo base_url()?>img\back.png" width="500px" height="700px" style="padding-left: 2em;padding-top: 2em">
<?php foreach($record->result() as $row){ ?>
	<div class="container" style="border-radius: 1em;top: -40%">
		<div class="row" >
			<div class="col-md-4" align="center" style="text-align: center;padding-left: 4em;padding-bottom: 1em;position: absolute;top: 3%;left: 3%">
				<img src="<?php echo base_url()?>img\logo.png" width="150px" height="35px" style="position:absolute;left: 2%" >
				<img src="<?php echo base_url()?>img\Logo_USU.png" width="80px" height="80px" style="position: absolute;right: 1%;left: 100%;bottom: 5%;top: -170%">
				<table style="position: absolute;top: 300%;left: 30%" >
					
					<tr>
						<td colspan="2" class="font">KEMENTRIAN RISET TEKNOLOGI DAN</td>
					</tr>
					<tr>
						<td colspan="2" class="font">PENDIDIKAN TINGGI</td>
					</tr>
					<tr>
						<td colspan="2" class="font"> 
						PUSAT UTBK</td>
					</tr>
					<tr>
						<td colspan="2" class="font"> UNIVERSITAS SUMATERA UTARA</td>
					</tr>
					<tr>
						<td colspan="2" align="center" class="font">TAHUN 2019</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-4" style="text-align: center;padding-left: 8em;position: absolute;top: 15%;left: 5%">
				<table>
					<tr>
						<td align="center" colspan="2" class="font">
							PENGAWAS SIAGA
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2"><img src="<?php echo base_url()?>img/dos.jpg" width="200px" heigth="400px"> </td>
					</tr
					<tr>
						<td align="center" colspan="2" class="font"><?php echo $row->NamaPengawas ?></td>
					</tr>
					<tr>
						<td align="center" colspan="2" class="font"><?php echo $row->NPU ?></td>
					</tr>
					<tr>
						<td align="center" colspan="2" class="font"><?php echo $row->UnitKerja ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="containner" style="border-right: 2em">
		<div class="row" >
			<div class="col-md-4" style=" transform: rotate(90deg);position: absolute;top: 55%;left: 35%;width: 30%;">
				<table>
					<tr>
						<td class="font">
							Nama
						</td>
						<td class="font">
							:
						</td>
						<td class="font">
							<?php echo $row->NamaPengawas ?>
						</td>
					</tr>
					<tr>
						<td class="font">
							Unit Kerja
						</td>
						<td class="font">:</td>
						<td class="font">
							<?php echo $row->UnitKerja?>
						</td>
					</tr>
					<tr>
						<td class="font">
							Npu
						</td>
						<td class="font">:</td>
						<td class="font"><?php echo $row->NPU ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style=" padding-top: 4em; transform: rotate(90deg);position: absolute;top: 54%;left: 25%">
				<table>
					<tr>
						<td class="font">Tanggal</td>
						<td class="font">:</td>
						<td class="font"><?php echo $row->Tanggal ?></td>
					</tr>
					<tr>
						<td class="font">Jabatan</td>
						<td class="font">:</td>
						<td class="font"><?php echo $row->Jabatan ?></td>
					</tr>
					<tr>
						<td class="font">Lokasi</td>
						<td class="font">:</td>
						<td class="font"><?php echo $row->nama_lokasi ?></td>
					</tr>
					<tr>
						<td class="font">Ruangan</td>
						<td class="font">:</td>
						<td class="font"><?php echo $row->Ruangan ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<script>
		window.print();
	</script>
<?php } ?>
</body>
</html>
