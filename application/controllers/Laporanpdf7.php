<?php
Class Laporanpdf7 extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(200 ,7,'DAFTAR HADIR PENGAWAS UJIAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $data = $this->db->get('daftar_presensi_koordinator_saintek')->result();
        foreach ($data as $v) {};
            $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(20,6,'Kelompok Ujian:'.$v->KelompokUjian);
             $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(20,6,'Tanggal :'.$v->Tanggal);
             $pdf->Cell(10,7,'',0,1);
            $pdf->Cell(20,6,'Pukul :'.$v->Waktu);
        
                //Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'N0',1,0);
        $pdf->Cell(25,6,'NPU',1,0);
        $pdf->Cell(80,6,'Instansi',1,0);
        $pdf->Cell(55,6,'Nama Pengawas',1,0);
        $pdf->Cell(25,6,'Tanda Tangan',1,1);
        $pdf->SetFont('Arial','',10);
        $batas = 1;
        $tt = 1;
        $data = $this->db->get('daftar_presensi_koordinator_saintek')->result();
                foreach ($data as $row){
            $pdf->Cell(10,6,$batas++,1,0);
            $pdf->Cell(25,6,$row->NPU,1,0);
            $pdf->Cell(80,6,$row->Instansi,1,0);
            $pdf->Cell(55,6,$row->Nama,1,0);
            $pdf->Cell(25,6,$tt++,1,1); 

        }
        $pdf->Output();
    }
}

?>