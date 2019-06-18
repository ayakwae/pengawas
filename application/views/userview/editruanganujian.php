<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 20px; width: 5px; margin-top: 8px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 20px; width: 3px; margin-top: 8px; margin-left: 3px;"></span> &nbsp;
        <b style="color: #2F669F; font-size: 22px;">Edit Ruangan Ujian</b>
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">ID Ruangan</td>
          <td><input class="form-control" placeholder="Ketik ID Ruangan" type="text" name="id_ruangan" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Lokasi</td>
          <td><input class="form-control" placeholder="Ketik Lokasi" type="text" name="lokasi" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nomor Ruang</td>
          <td><input class="form-control" placeholder="Ketik Nomor Ruang" type="text" name="nomor_ruang" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\simpan.png" style="width: 50px; height: 50px;">&nbsp;&nbsp;Simpan</button></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nama Ruang</td>
          <td><input class="form-control" placeholder="Ketik Nama Ruang" type="text" name="nama_ruang" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><a href="<?php base_url() ?>ruanganujian"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 60px; height: 50px;">&nbsp;&nbsp;Keluar</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kapasitas</td>
          <td><input class="form-control" placeholder="Ketik Kapasitas" type="text" name="kapasitas" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Keterangan Ruang</td>
          <td><input class="form-control" placeholder="Ketik Keterangan Ruang" type="text" name="keterangan_ruang" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
      </table>
    </div>
  </div>
</div>