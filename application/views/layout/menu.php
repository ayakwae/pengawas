<style type="text/css">
.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 1px; padding-right: 1px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar"  style="margin-top: -1px; border-style: solid;border-color: black; border-width: 0px; margin-bottom: -15px; background-color: #DCDCDC;">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray;">|</p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-expanded" href="<?php echo base_url()?>home" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-right: 25px; margin-left: 25px;">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray; margin-right: 20px;">|</p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-expanded" href="<?php echo base_url()?>pengawas" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-right: 35px; margin-left: 20px;">Daftar Pengawas</a>
      </li>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray; margin-right: 20px;">|</p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-expanded" href="<?php echo base_url()?>koordinator" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-right: 40px; margin-left: 20px;">Daftar Koordinator</a>
      </li>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray; margin-right: 20px;">|</p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-expanded" href="<?php echo base_url()?>daftartempatujian" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-right: 40px; margin-left: 20px;">Daftar Tempat Ujian</a>
      </li>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray; margin-right: 20px;">|</p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-expanded" href="<?php echo base_url()?>lihathonor" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-right: 50px; margin-left: 25px;">Honor</a>
      </li>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray; margin-right: 0px;">|</p>
      </li>
      <div class="dropdown">
      <li class="nav-item" >
        <u class="nav-link" href="<?php echo base_url()?>halamanprofil" style="font-family: calibri; font-size: 20px; margin-top: -5px; margin-left: 25px; margin-right: 25px;"><?= $this->fungsi->user_login()->username ?></u>
          <div class="dropdown-content">
            <a href="<?= site_url('auth/logout') ?>">Keluar</a>
          </div>
      </li>
      </div>
      <li class="nav-item">
        <p class="navbar-nav" style="padding-top: 5px; color: gray;">|</p>
      </li>
    </ul>
  </div>
</nav>