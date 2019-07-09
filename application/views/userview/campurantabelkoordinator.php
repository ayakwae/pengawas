<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 8px;padding-bottom: -1px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 18px; width: 7px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 18px; width: 3px; margin-top: 7px; margin-left: 3px;"></span> &nbsp;
        <h4 style="color: #2F669F;"><b>Distribusi Koordinator Pelatihan (CAMPURAN)</b></h4>  
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 7px;">
      <div class="row" style="margin-left: 60px;" >
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
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Lokasi</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Ruangan</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Nama</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Tanggal</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Waktu</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;" colspan="2">Aksi</th>
            </tr>
            <?php 
              $batas = 1;
            foreach ($result as $data => $v) {
            
            echo "<tr>
              <td style='text-align: center;'>".$batas++ ."</td>
              <td style='text-align: center;'>".$v->NamaLokasi."</td>
              <td style='text-align: center;'>".$v->Ruangan."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->nama."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->Tanggal."</td>
              <td style='text-align: center;padding-left: 0.5em;padding-right:0.5em'>".$v->Waktu."</td>
              <td><a href='".base_url()."editcampurandistribusikoordinator'><img src='".base_url()."img/icon/edit.png' style='margin-top:0px;margin-left:0px;max-width:30px; max-height: 30px;'></a></td>
              <td><a href='".base_url()."#'><img src='".base_url()."img/icon/delete.png' style='margin-top:0px;margin-left:12px;max-width:30px; max-height: 30px;''></a></td>
            </tr>";
            } ?>
        </table>
      </form></center>
      <table>
        <tr>
          <td>
            <a href="<?php base_url() ?>tambahcampurandistribusikoordinator">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\tambah.png" style="width: 20px; height: 20px; padding-top: -1px;">&nbsp;&nbsp;Tambah</button>
            </a>
          </td>
          <td>
            <a href="<?php base_url() ?>campurandistribusikoordinator"><img src="<?php echo base_url()?>img\icon\keluar1.png" style="width: 50px; height: 40px;margin-left: 910px;"></button>
            </a>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>