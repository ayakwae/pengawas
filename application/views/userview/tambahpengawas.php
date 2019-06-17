<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 25px; width: 15px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 25px; width: 5px; margin-top: 7px; margin-left: 5px;"></span> &nbsp;&nbsp;
        <h3 style="color: #2F669F;"><b>Tambah Pengawas</b></h3>  
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NIP</td>
          <td><input class="form-control" placeholder="Ketik NIP/NIK/NIM" type="text" name="nip_nik_nim" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nama Pengawas</td>
          <td><input class="form-control" placeholder="Ketik Nama Pengawas" type="text" name="nama_pengawas" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nama Unit</td>
          <td><input class="form-control" placeholder="Ketik Nama Unit" type="text" name="nama_unit" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\simpan.png" style="width: 50px; height: 50px;">&nbsp;&nbsp;Simpan</button></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Status Pengawas</td>
          <td>
            <select name="kelas" class="form-control" style="width: 250px; margin-left: 50px;">
            <option value="kelas">-Pilih Status-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select> 
          </td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Golongan</td>
          <td>
            <select name="kelas" class="form-control" style="width: 140px; margin-left: 50px;">
            <option value="kelas">-Pilih Angka-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select> 
          </td>
          <td>
            <select name="kelas" class="form-control" style="width: 140px; margin-left: -240px;">
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
          <td style="font-family: calibri; font-size: 20px;">Lokasi Mengawas</td>
          <td><input class="form-control" placeholder="Ketik Lokasi Mengawas" type="text" name="lokasi_mengawas" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 230px;"><a href="<?php base_url() ?>daftarpengawas"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 60px; height: 50px;">&nbsp;&nbsp;Keluar</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kelompok Ujian</td>
          <td>
            <select name="kelas" class="form-control" style="width: 250px; margin-left: 50px;">
            <option value="kelas">-Pilih Tingkat-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
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
            <th style="font-size: 25px; font-family: calibri;">No</th>
            <th style="font-size: 25px; font-family: calibri;">NIP</th>
            <th style="font-size: 25px; font-family: calibri;">Nama Pengawas</th>
            <th style="font-size: 25px; font-family: calibri;">Nama Unit</th>
            <th style="font-size: 25px; font-family: calibri;">Status Pengawas</th>
            <th style="font-size: 25px; font-family: calibri;">Golongan</th>
            <th style="font-size: 25px; font-family: calibri;">Lokasi</th>
            <th style="font-size: 25px; font-family: calibri;">Kelompok Ujian</th>
          </tr>
          <tr>
            <td>1.</td>
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
          </tr>
          <tr>
            <td>3.</td>
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
          </tr>
          <tr>
            <td>5.</td>
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
          </tr>
          <tr>
            <td>7.</td>
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
          </tr>
          <tr>
            <td>9.</td>
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
          </tr>
          <tr>
            <td>11.</td>
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