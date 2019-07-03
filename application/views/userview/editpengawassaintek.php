<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 20px; width: 5px; margin-top: 8px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 20px; width: 3px; margin-top: 8px; margin-left: 3px;"></span> &nbsp;
        <b style="color: #2F669F; font-size: 22px;">Edit Pengawas (SAINTEK)</b>
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NPU</td>
          <td><input class="form-control" placeholder="Ketik NPU" type="text" name="npu" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NIP</td>
          <td><input class="form-control" placeholder="Ketik NIP" type="text" name="nip" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nama Pengawas</td>
          <td><input class="form-control" placeholder="Ketik Nama Pengawas" type="text" name="nama_pengawas" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Gelar Depan</td>
          <td><input class="form-control" placeholder="Ketik Gelar Depan" type="text" name="gelar_depan" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\simpan.png" style="width: 50px; height: 50px;">&nbsp;&nbsp;Simpan</button></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Gelar Belakang</td>
          <td><input class="form-control" placeholder="Ketik Gelar Belakang" type="text" name="gelar_belakang" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><a href="<?php base_url() ?>tabelsaintekdaftarpengawas"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 52px; height: 50px;"> Kembali</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kode Instansi</td>
          <td><input class="form-control" placeholder="Ketik Kode Instansi" type="text" name="kode_instansi" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Golongan</td>
          <td>
            <select name="kelas" class="form-control" style="width: 140px; margin-left: 50px;margin-bottom: 15px;">
            <option value="kelas">-Pilih Angka-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
          </td>
          <td><b style="margin-left: -260px; font-size: 25px;">/</b></td>
          <td>
            <select name="kelas" class="form-control" style="width: 140px; margin-left: -615px;margin-bottom: 15px;">
            <option value="kelas">-Pilih Huruf-</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">D</option>
            <option value="5">e</option>
            </select> 
          </td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NPWP</td>
          <td><input class="form-control" placeholder="Ketik NPWP" type="text" name="npwp" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Telepon</td>
          <td><input class="form-control" placeholder="Ketik Telepon" type="text" name="telepon" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Jabatan</td>
          <td><input class="form-control" placeholder="Ketik Jabatan" type="text" name="jabatan" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Status Pengawas</td>
          <td>
            <select name="kelas" class="form-control" style="width: 250px; margin-left: 50px;margin-bottom: 15px;">
            <option value="kelas">-Pilih Status-</option>
            <option value="1">Dosen</option>
            <option value="2">Pascasarjana</option>
            <option value="3">Mahasiswa</option>
            </select> 
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>