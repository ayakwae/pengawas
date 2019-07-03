<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 8px;padding-bottom: -1px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 18px; width: 7px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 18px; width: 3px; margin-top: 7px; margin-left: 3px;"></span> &nbsp;
        <h4 style="color: #2F669F;"><b>Daftar Tempat Ujian SAINTEK</b></h4>  
      </div>  
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 10px; margin-top: 10px; padding-top: 25px;">
      <center><form>
        <table border="2" style="width:1050px; margin-bottom: 20px;">
            <tr>
              <th style="font-size: 20px; font-family: Arial;text-align: justify;">No</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Kode Lokasi</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Nama Lokasi</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Alamat Lokasi</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Kelompok Ujian</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Aksi</th>
            </tr>
            <?php 
              $batas = 1;
            foreach ($result as $data => $v) {
            
            echo "<tr>
              <td style='text-align: center;'>".$batas++ ."</td>
              <td style='text-align: center;'>".$v->KodeLokasi."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->NamaLokasi."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->AlamatLokasi."</td>
              <td style='text-align: center;padding-left: 0.5em'>".$v->KelompokUjian."</td>
              <td><a href='".base_url()."editlokasi'><img src='".base_url()."img/icon/edit.png' style='margin-top:0px;margin-left:0px;max-width:30px; max-height: 30px;''><input type='text' name='kodelokasi' hidden value='".$v->KodeLokasi."' ></a></td>
            </tr>";
            } ?>
        </table>
      </form></center>
      <div class="row">
<div class="container" style="margin-top: 10px;margin-left: 70px;">
  <a href="<?php base_url() ?>tambahlokasi">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\tambah.png" style="width: 20px; height: 20px; padding-top: -1px;">&nbsp;&nbsp;Tambah</button>
  </a>
</div>
</div>
      <td style="padding-left: 230px;"><a href="<?php base_url() ?>daftarlokasi"><img src="<?php echo base_url()?>img\icon\keluar1.png" style="width: 50px; height: 40px;margin-left: 960px;"></button></a></td>
    </div>
  </div>
</div>