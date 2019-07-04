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
	if ($page=='userview/home') {						//menu1
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/pengawas') {				//menu2
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsaintekdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsoshumdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahcampurandistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsaintekdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsoshumdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahcampurandistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipengawasujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsaintekdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahsoshumdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahcampurandaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editpengawassaintek') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editpengawassoshum') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editpengawascampuran') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandaftarpengawas') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipengawassiagaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdistribusipenanggungujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipengawassiagaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdistribusipenanggungujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipengawassiagaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandistribusipenanggungujian') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdaftarpengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsaintekdaftarpenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdaftarpengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelsoshumdaftarpenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandaftarpengawassiaga') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tabelcampurandaftarpenanggung') {
			$menu['home'] = '';
			$menu['pengawas'] = 'active';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/koordinator') {			//menu3
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahdistribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahdistribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/distribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdistribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabelkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabelkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdistribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabelkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabelkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandistribusikoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabelkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabelkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdistribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabelkoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabelkoordinatorutamaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdistribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabelkoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabelkoordinatorutamaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandistribusikoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabelkoordinatorujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabelkoordinatorutamaujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekdaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabeldaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintektabeldaftarkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumdaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabeldaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumtabeldaftarkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurandaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabeldaftarkoordinator') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campurantabeldaftarkoordinatorutama') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = 'active';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftartempatujian') {		//menu4
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarlokasi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshum') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuran') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahlokasi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarinstansi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahinstansi') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/daftarruangan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/ruanganpelatihan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/ruanganujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahruanganujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/tambahruanganpelatihan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editruanganpelatihan') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/editruanganujian') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = 'active';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/halamanreport') {			//menu5	
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatalbum') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekalbum') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumalbum') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuranalbum') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatbadge') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekbadge') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/pengawasbadgesaintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/pengawassiagabadgesaintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/koordinatorbadgesaintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/koordinatorutamabadgesaintek') {
			$menu['home'] = '';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = 'active';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumbadge') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuranbadge') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihathonor') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekhonor') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumhonor') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuranhonor') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/honor') {
			$menu['home'] = '';
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/honorbersih') {
			$menu['home'] = '';
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekjadwal') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumjadwal') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuranjadwal') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatjadwal') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/lihatpresensi') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/saintekpresensi') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/soshumpresensi') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	else if ($page=='userview/campuranpresensi') {
			$menu['home'] = 'active';
			$menu['pengawas'] = '';
			$menu['koordinator'] = '';
			$menu['daftartempatujian'] = '';
			$menu['halamanreport'] = '';
			$this->load->view('layout/menu',$menu);
		 }
	

	?>
	<div class="container" style="border-color: <?php echo $border?>;border-style: solid;">
		<?php $this->load->view($page)?>
	</div>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
</html>