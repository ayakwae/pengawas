<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 25px; width: 15px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 25px; width: 5px; margin-top: 7px; margin-left: 5px;"></span> &nbsp;&nbsp;
        <h3 style="color: #2F669F;"><b>Tambah Koordinator</b></h3>  
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nomor Ruangan</td>
          <td><input class="form-control" placeholder="Ketik Nomor Ruangan" type="text" name="nomor_ruangan" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NPU/NIP</td>
          <td><input class="form-control" placeholder="Ketik NPU/NIP" type="text" name="npu_nip" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nama Pengawas</td>
          <td><input class="form-control" placeholder="Ketik Nama Pengawas" type="text" name="nama_pengawas" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
           <td style="padding-left: 230px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\simpan.png" style="width: 50px; height: 50px;">&nbsp;&nbsp;Simpan</button></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Jabatan</td>
          <td><input class="form-control" placeholder="Ketik Jabatan" type="text" name="jabatan" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Hari/Tanggal Coaching</td>
          <td><input class="form-control" type="date" name="date" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><a href="<?php base_url() ?>daftarkoordinator"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 60px; height: 50px;">&nbsp;&nbsp;Keluar</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Jam Coaching</td>
          <td><input class="form-control" type="time" name="jam_coaching" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Tempat Coaching</td>
          <td><input class="form-control" placeholder="Ketik Tempat Coaching" type="text" name="tempat_coaching" style="padding-right: 200px; margin-left: 30px; margin-bottom: 5px;"></td>
        </tr>
      </table>
    </div>
  </div>
</div>