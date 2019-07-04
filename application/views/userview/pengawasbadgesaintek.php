<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 8px;padding-bottom: -1px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 18px; width: 7px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 18px; width: 3px; margin-top: 7px; margin-left: 3px;"></span> &nbsp;
        <h4 style="color: #2F669F;"><b>Lencana Pengawas (SAINTEK)</b></h4>  
      </div>  
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 10px; margin-top: 10px; padding-top: 25px;">
      <form><center>
        <table border="2" style="width:1050px; margin-bottom: 20px;">
            <tr>
              <th style="font-size: 20px; font-family: Arial;text-align: justify;">No</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">NPU</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Nama Pengawas</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Unit Kerja</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Tanggal</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Jabatan</th>
              <th style="font-size: 20px; font-family: Arial;text-align: center;">Aksi</th>
            </tr>
            <?php 
              $batas = 1;
            foreach ($result as $data => $v) {
            
            echo "<tr>
              <td style='text-align: center;'>".$batas++ ."</td>
              <td style='text-align: center;'>".$v->NPU."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->NamaPengawas."</td>
              <td style='padding-left: 0.5em;padding-right:0.5em'>".$v->UnitKerja."</td>
              <td style='text-align: center;padding-left: 0.5em;padding-right:0.5em'>".$v->Tanggal."</td>
              <td style='text-align: center;padding-left: 0.5em'>".$v->Jabatan."</td>
              <td><a href='<?php base_url() ?>cetak'>CETAK</a></td>
            </tr>";
            } ?>
        </table>
      </center></form>
      <td style="padding-left: 230px;"><a href="<?php base_url() ?>saintekbadge"><img src="<?php echo base_url()?>img\icon\keluar1.png" style="width: 50px; height: 40px;margin-left: 990px;"></button></a></td>
    </div>
  </div>
</div>