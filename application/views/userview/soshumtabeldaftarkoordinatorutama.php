<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 8px;padding-bottom: -1px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 18px; width: 7px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 18px; width: 3px; margin-top: 7px; margin-left: 3px;"></span> &nbsp;
        <h4 style="color: #2F669F;"><b>Daftar Koordinator Utama Pelatihan (SOSHUM)</b></h4>  
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <center><table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Cari</td>
          <td><input class="form-control" placeholder="Ketik" type="text" name="cari" style="padding-right: 100px; margin-left: 30px; margin-bottom: 5px;"></td>
          <td style="padding-left: 100px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\search.png" style="width: 20px; height: 20px;">&nbsp;&nbsp;Cari</button></td>
        </tr>
      </table></center>
    </div>
  </div>
</div>

<div class="row">
<div class="container" style="margin-top: 10px;">
  <a href="<?php base_url() ?>tambahsoshumdaftarkoordinatorutama">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\tambah.png" style="width: 20px; height: 20px; padding-top: -1px;">&nbsp;&nbsp;Tambah</button>
  </a>
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 10px; margin-top: 10px; padding-top: 25px;">
      <form><center>
        <table border="2" style="width:1000px; text-align: center; margin-bottom: 20px;">
          <tr>
            <th style="font-size: 20px; font-family: calibri;">No</th>
            <th style="font-size: 20px; font-family: calibri;">NPU</th>
            <th style="font-size: 20px; font-family: calibri;">Nama Koordinator</th>
            <th style="font-size: 20px; font-family: calibri;">Instansi</th>
            <th style="font-size: 20px; font-family: calibri;">Jabatan</th>
            <th style="font-size: 20px; font-family: calibri;">Kelompok Ujian</th>
            <th style="font-size: 20px; font-family: calibri;text-align: center;" colspan="2">Aksi</th>
          </tr>
          </tr>
            <?php 
              $batas = 1;
            foreach ($result as $data => $v) {
            
            echo "<tr>
              <td style='text-align: center;'>".$batas++ ."</td>
              <td style='text-align: center;'>".$v->NPU."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->NamaPengawas."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->NamaInstansi."</td>
              <td style='text-align: center;padding-left: 0.5em;padding-right:0.5em'>".$v->Jabatan."</td>
              <td style='text-align: center;padding-left: 0.5em'>".$v->KelompokUjian."</td>
              <td><a href='".base_url()."editsoshumdaftarkoordinatorutama'><img src='".base_url()."img/icon/edit.png' style='margin-top:0px;margin-left:0px;max-width:30px; max-height: 30px;''><input type='text' name='npu' hidden value='".$v->NPU."' ></a></td>
              <td><a href='".base_url()."?'><img src='".base_url()."img/icon/delete.png' style='margin-top:0px;margin-left:12px;max-width:30px; max-height: 30px;''><input type='text' name='npu' hidden value='".$v->NPU."' ></a></td>
            </tr>";
            } ?>
        </table>
      </center></form>
      <td style="padding-left: 230px;"><a href="<?php base_url() ?>soshumdaftarkoordinator"><img src="<?php echo base_url()?>img\icon\keluar1.png" style="width: 50px; height: 40px;margin-left: 990px;"></button></a></td>
    </div>
  </div>
</div>