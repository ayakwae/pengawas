<style> 

form {
    overflow: hidden;
}
 
label {
    float: left;
    width: 120px;
    padding-right: 24px;

}
 
input {
    float: left;
    width: calc(100% - 200px);
    margin-bottom: 10px;
    border:solid 1px;
}
 
button {
    float: right;
    width: calc(100% - 200px);
}

</style>

<div class="row">
  <div class="col-md-12">
    <div class="container" style="background: white;font-color:blue;border-width: 1px;border-color: #d6d6c2;padding-top: 1em;padding-bottom: 1em;margin-top: 2.5em; border:solid 1px;margin-bottom: 10px;">
      <div class="row" style="margin-left: 10px; margin-right: 100px;">
        <table id="myTable">
            <form>
    <label for="hari&tanggal" class="hari-tanggal">Hari/Tanggal</label>
    <input id="hari&tanggal" type="text">
 
    <label for="jam" class="Jam">Jam</label>
    <input id="jam" type="text">

    <label for="tgl" class="tanggal">Tanggal</label>
    <input id="tgl" type="text">
 
</form>
    <a href="<?php base_url() ?>search">
      <div class="container" style="background-color:#8dcff4; border-width: 0px; border-radius: 10px; height:40px;  width: 150px; margin-left: 900px;">
 <img src="<?php echo base_url()?>img/icon/search.png" style="margin-top:5px;margin-left:1px;max-width: 30px; max-height: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cari
      </div>
    </a>
      </table>
      </div>  
    </div>
  </div>
</div>
<a href="<?php base_url() ?>tambah">
<div class="container" style="background-color:#b4b4b4; border-width: 0px; border-radius: 10px; height:40px;  width: 150px; margin-left: 0px;">
<img src="<?php echo base_url()?>img/icon/tambah.png" style="margin-top:5px;margin-bottom:10px;margin-left:5px;max-width: 30px; max-height: 100px;">&nbsp;&nbsp;&nbsp;Tambah
</div>
</a>
<table>
 
</table>

        
