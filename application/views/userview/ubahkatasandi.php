<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 10px;padding-bottom: 7px;margin-top: 2.5em">
      <div class="row" style="margin-left: 5px;">
        <span style="background-color: #2F669F; height: 25px; width: 5px; margin-top: 3px; margin-left: 5px;"></span>
        <span style="background-color: #2F669F; height: 25px; width: 2px; margin-top: 3px; margin-left: 2px;"></span> &nbsp;
        <h4 style="color: #2F669F;"><b>Ubah Kata Sandi</b></h4>
      </div>  
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;border-width: 1px;border-color: #d6d6c2;padding-bottom: 50px;">
      <div class="row" style="margin-left: 60px;" >
        <div class="container" style=" border-width: 0px; margin-bottom: 20px; margin-top: 40px;">
        <table border="0" style="margin-top: 30px;" align="center">  
          <tr>            
              <!-- ini untuk WHERE-->
              <input class="form-control" style="min-width: 250px;" type="password" name="" hidden>            
            <td style="padding: 5px 5px 5px 5px;">
              <h5>Kata Sandi Lama</h5>
            </td>
            <td style="padding: 5px 5px 5px 5px;">
              <input class="form-control" style="min-width: 250px;" type="password" name="lama" placeholder="Masukkan Kata Sandi Lama">
            </td>
            </tr>
            <tr>
              <td style="padding: 5px 5px 5px 5px;">
                <h5>Kata Sandi Baru</h5>
              </td>
              <td style="padding: 5px 5px 5px 5px;">
                <input class="form-control" style="min-width: 250px;" id="password" onkeyup="check()" type="password" name="baru1" placeholder="Masukkan Kata Sandi Baru">
              </td>
            </tr>
            <tr>
              <td style="padding: 5px 5px 5px 5px;">
                <h5>Konfirmasi Kata Sandi Baru</h5>
              </td>
              <td style="padding: 5px 5px 5px 5px;">
                <input class="form-control" style="min-width: 250px;" id="confirm_password" onkeyup="check()" type="password" name="baru2" placeholder="Konfirmasi Kata Sandi Baru">
              </td>
            </tr>
            <tr>
              <td></td><td><span id='message'></span></td>
            </tr>
        </table>
        <div class="container-fluid">
          <div class="row"> 
            <div  align="center">
              <button id="simpan" type="submit" class="btn btn-primary" style="min-width: 100px; margin-right: 20px; margin-left: 380px; margin-top: 20px;">Simpan</button>
            </div>
            <div>
              <button type="reset" class="btn btn-danger" style="min-width: 100px; margin-top: 20px;">Reset Form</button>
            </div>
          </div>
        </div>
</div>
</div>
</div> 
</div>
</div>