<style type="text/css">
  .circle {
      width: 180px;
      height: 186px;
      background: white;
      border-radius: 50%
    }
</style>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 25px; width: 15px; margin-top: 7px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 25px; width: 5px; margin-top: 7px; margin-left: 5px;"></span> &nbsp;&nbsp;
        <h3 style="color: #2F669F;"><b>Profil</b></h3>
      </div>  
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;padding-bottom: 50px;">
      <div class="row" style="margin-top: 25px; margin-left: 60px;">
        <div class="col-md-6">
        <div class="container" style="background-color:#1E90FF; border-width: 0px; height:470px;  width: 300px; margin-top: 40px; margin-left: 0px; padding-top: 1px;">
          <div class="circle" style="margin: 30px 20px 20px 47px;">
            <img src="<?php echo base_url()?>img/icon/pegawai_2.png" style="width: 190px; height: 190px; margin-top: -2px; margin-left: -4px;">
          </div>
          <center style="font-family: calibri;font-size: 34px;margin-top: 10px; margin-bottom: 50px;"><b>-namauser-</b></center>
          <center>
            <div class="container" style="margin-bottom: 20px;">
              <a href="<?php base_url() ?>editprofil">
                <button type="button" class="btn btn-primary"><img src="<?php echo base_url()?>img/icon/edit1.png" style="width: 15px; height: 15px; margin-top: -5px;">&nbsp;Edit Profil</button>
              </a>
            </div>
            <div>
              <a href="<?php base_url() ?>ubahkatasandi">
                <button type="button" class="btn btn-danger">Ubah Kata Sandi</button>
              </a>
            </div>
          </center>
        </div>
        </div>
        <div class="col-md-6">
            <div class="container" style="background-color:#1E90FF; border-width: 0px; height:470px;  width: 600px; margin-top: 40px; padding-top: 1px; margin-left: -180px;">
              <div class="container" style="background-color:#F8F8F8; border-width: 0px; font-weight: 500; margin-bottom: 20px; margin-top: 30px;">
                <table width="300">
                  <tr>
                    <td style="width: 170px;"><b>NIP</b></td>
                    <td style="padding-left: 10px;"><?php ?></td>
                  </tr>
                </table>
              </div>
              <div class="container" style="background-color:#F8F8F8; border-width: 0px; font-weight: 500; margin-bottom: 20px;">
                <table width="300">
                  <tr>
                    <td style="width: 170px;"><b>Nama Petugas</b></td>
                    <td style="padding-left: 10px;"><?php ?></td>
                  </tr>
                </table>
              </div>
              <div class="container" style="background-color:#F8F8F8; border-width: 0px; font-weight: 500; margin-bottom: 20px;">
                <table width="300">
                  <tr>
                    <td style="width: 170px;"><b>Nama Unit</b></td>
                    <td style="padding-left: 10px;"><?php ?></td>
                  </tr>
                </table>
              </div>
              <div class="container" style="background-color:#F8F8F8; border-width: 0px; font-weight: 500; margin-bottom: 20px;">
                <table width="300">
                  <tr>
                    <td style="width: 170px;"><b>Status</b></td>
                    <td style="padding-left: 10px;"><?php ?></td>
                  </tr>
                </table>
              </div>
              <div class="container" style="background-color:#F8F8F8; border-width: 0px; font-weight: 500; margin-bottom: 20px;">
                <table width="300">
                  <tr>
                    <td style="width: 170px;"><b>Jabatan</b></td>
                    <td style="padding-left: 10px;"><?php ?></td>
                  </tr>
                </table>
              </div>
              <form method="post" action="<?=site_url('auth/logout')?>">
              <div style="margin-left: 470px; padding-top: 150px;">
                <button type="button" class="btn btn-danger" name="logout" onclick="window.location='<?php echo base_url("auth/logout")?>'"><img src="<?php echo base_url()?>img/icon/keluar.png" style="max-width: 30px; max-height: 60px;">Keluar</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>