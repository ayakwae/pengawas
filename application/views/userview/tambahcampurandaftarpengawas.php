<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 20px; width: 5px; margin-top: 8px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 20px; width: 3px; margin-top: 8px; margin-left: 3px;"></span> &nbsp;
        <b style="color: #2F669F; font-size: 22px;">Tambah Pengawas</b>
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
          <td style="padding-left: 230px;"><a href="<?php base_url() ?>tabelcampurandaftarpengawas"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 60px; height: 50px;">&nbsp;&nbsp;Kembali</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kode Instansi</td>
          <td><input class="form-control" placeholder="Ketik Kode Instansi" type="text" name="kode_instansi" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Golongan</td>
          <td>
            <select name="kelas" class="form-control" style="width: 140px; margin-left: 50px;margin-bottom: 15px;">
            <option value="kelas"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Pilih-</option>
            <option value="1">1A</option>
            <option value="2">1B</option>
            <option value="3">1C</option>
            <option value="4">1D</option>
            <option value="5">2A</option>
            <option value="6">2B</option>
            <option value="7">2C</option>
            <option value="8">2D</option>
            <option value="9">3A</option>
            <option value="10">3B</option>
            <option value="11">3C</option>
            <option value="12">3D</option>
            <option value="13">4A</option>
            <option value="14">4B</option>
            <option value="15">4C</option>
            <option value="16">4D</option>
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

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 10px; margin-top: 10px; padding-top: 25px;">
      <form><center>
        <table border="2" style="width:1000px; text-align: center; margin-bottom: 20px;">
          <tr>
            <th style="font-size: 20px; font-family: calibri;">No</th>
            <th style="font-size: 20px; font-family: calibri;">NPU</th>
            <th style="font-size: 20px; font-family: calibri;">NIP</th>
            <th style="font-size: 20px; font-family: calibri;">Nama Pengawas</th>
            <th style="font-size: 20px; font-family: calibri;">Gelar Depan</th>
            <th style="font-size: 20px; font-family: calibri;">Gelar Belakang</th>
            <th style="font-size: 20px; font-family: calibri;">Kode Instansi</th>
            <th style="font-size: 20px; font-family: calibri;">Golongan</th>
            <th style="font-size: 20px; font-family: calibri;">NPWP</th>
            <th style="font-size: 20px; font-family: calibri;">Telepon</th>
            <th style="font-size: 20px; font-family: calibri;">Jabatan</th>
            <th style="font-size: 20px; font-family: calibri;">Status Pengawas</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>4.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>5.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>6.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>7.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>8.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>9.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>10.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
          <tr>
            <td>11.</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
          </tr>
        </table>
      </center></form>
    </div>
  </div>
</div>