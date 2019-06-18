<!DOCTYPE>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh3IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/lel.css">
	<script src="<?php echo base_url() ?>script/css/sweetalert2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>script/css/sweetalert2.min.css">
	<script type="<?php echo base_url() ?>/script/js/script.jss"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<title>Sistem Sirkulasi Pengawas Ujian</title>
</head>
<body style="background-color: #87CEFA;">
	<?php 
	$this->load->view('layout/navbar');
	if ($page=='userview/home') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/pengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';	
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/koordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';		
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftartempatujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';	
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarlokasi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = 'active';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahlokasi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = 'active';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = 'active';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshum') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = 'active';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuran') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = 'active';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarinstansi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = 'active';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarruangan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = 'active';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahruangan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = 'active';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/ruanganpelatihan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = 'active';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/ruanganujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = 'active';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/halamanreport') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = 'active';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatjadwal') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = 'active';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatpresensi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = 'active';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihathonor') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = 'active';
			$menu['halamanprofil'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/honor') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$menu['lihathonor'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/honorbersih') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = '';
			$menu['lihathonor'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['daftarpengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftarkoordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['daftarlokasi'] = '';
			$menu['daftarinstansi'] = '';
			$menu['daftarruangan'] = '';
			$menu['halamanreport'] = '';
			$menu['halamanprofil'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	?>
	<div class="container" style="border-color: <?php echo $border?>;border-style: solid;">
		<?php $this->load->view($page)?>
	</div>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
</html>