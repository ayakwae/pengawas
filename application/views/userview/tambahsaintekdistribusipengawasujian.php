<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 5px;padding-bottom: 10px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 20px; width: 5px; margin-top: 8px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 20px; width: 3px; margin-top: 8px; margin-left: 3px;"></span> &nbsp;
        <b style="color: #2F669F; font-size: 22px;">Tambah Distribusi Pengawas Ujian (SAINTEK)</b>
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 20px; margin-top: 25px; padding-top: 25px;">
      <table>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kode Distribusi Pengawas Ujian</td>
          <td><input class="form-control" placeholder="Ketik Kode Distribusi Pengawas Ujian" type="text" name="npu" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Kode Lokasi</td>
          <td>
            <select name="kode_lokasi" class="form-control" style="width: 140px; margin-left: 50px;margin-bottom: 15px;">
            <option value="kode_lokasi">&nbsp;&nbsp;&nbsp;&nbsp;-Pilih-</option>
            <option value="1">L001</option>
            <option value="2">L002</option>
            <option value="3">L003</option>
            <option value="4">L004</option>
            <option value="5">L005</option>
            </select>
          </td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Nomor Ruangan</td>
          <td>
            <select name="nomor_ruangan" class="form-control" style="width: 140px; margin-left: 50px;margin-bottom: 15px;">
            <option value="nomor_ruangan">&nbsp;&nbsp;&nbsp;&nbsp;-Pilih-</option>
            <option value="1">R001</option>
            <option value="2">R002</option>
            <option value="3">R003</option>
            <option value="4">R004</option>
            <option value="5">R005</option>
            </select>
          </td>
          <td style="padding-left: 200px;"><button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="<?php echo base_url()?>img\icon\simpan.png" style="width: 50px; height: 50px;">&nbsp;&nbsp;&nbsp;Simpan</button></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">NPU</td>
          <td><input class="form-control" placeholder="Ketik NPU" type="text" name="npu" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Jabatan</td>
          <td><input class="form-control" placeholder="Ketik Jabatan" type="text" name="jabatan" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
          <td style="padding-left: 200px;"><a href="<?php base_url() ?>tabelsaintekdistribusipengawasujian"><button type="button" class="btn btn-danger"><img src="<?php echo base_url()?>img\icon\keluar.png" style="width: 60px; height: 50px;">&nbsp;Kembali</button></a></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Tanggal Ujian</td>
          <td><input class="form-control" placeholder="Ketik Tanggal Ujian" type="date" name="tanggal_ujian" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;"></td>
        </tr>
        <tr>
          <td style="font-family: calibri; font-size: 20px;">Waktu Ujian</td>
          <td><input class="form-control" placeholder="Ketik Waktu Ujian" type="text" name="waktu_ujian" style="padding-right: 200px; margin-left: 50px; margin-bottom: 5px;margin-bottom: 15px;"></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- <div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 10px; margin-top: 10px; padding-top: 25px;">
      <form><center>
        <table border="2" style="width:930px; text-align: center; margin-bottom: 20px;">
          <tr>
            <th style="font-size: 20px; font-family: calibri;">No</th>
            <th style="font-size: 20px; font-family: calibri;">Kode Distribusi Pengawas Ujian</th>
            <th style="font-size: 20px; font-family: calibri;">Kode Lokasi</th>
            <th style="font-size: 20px; font-family: calibri;">Nomor Ruang</th>
            <th style="font-size: 20px; font-family: calibri;">NPU</th>
            <th style="font-size: 20px; font-family: calibri;">Jabatan</th>
            <th style="font-size: 20px; font-family: calibri;">Tanggal Ujian</th>
            <th style="font-size: 20px; font-family: calibri;">Waktu Ujian</th>
          </tr>
          <tr>
            <td>1.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>2.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>3.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>4.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>5.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>6.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>7.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>8.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>9.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
          <tr>
            <td>10.</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
        </table>
      </center></form>
    </div>
  </div>
</div> -->