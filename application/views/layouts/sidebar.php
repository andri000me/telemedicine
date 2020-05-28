<ul class="navbar-nav bg-gradient-light sidebar sidebar-primary accordion" id="accordionSidebar">
   <a class="sidebar-brand d-flex align-items-center justify-content-center" target="_blank" href="<?= base_url() ?>">
      <div class="sidebar-brand-icon">
         <img class="img-profile "
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/LOGO_kariadi.jpg/200px-LOGO_kariadi.jpg"
            width="60%">
      </div>
   </a>
   <hr class="sidebar-divider my-0">
   <br>
   <?php if($this->session->userdata('cm')){ ?>
   <div class="sidebar-heading">
      Data Menu Pasien
   </div>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>welcome">
         <i class="fas fa-fw fa-clipboard-check"></i>
         <span>Formulir Kontrol</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>results">
         <i class="fas fa-fw fa-chalkboard-teacher"></i>
         <span>Hasil Kontrol</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>feedback">
         <i class="fas fa-fw fa-id-card"></i>
         <span>Kritik & Saran</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>user_guide">
         <i class="fas fa-fw fa-book-medical"></i>
         <span>Panduan Pengguna</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" target="_blank" href="https://www.rskariadi.co.id/page-contact.htm">
         <i class="fas fa-fw fa-phone"></i>
         <span>Hubungi Kami</span></a>
   </li>
   <?php } else{ ?>

   <?php if($this->session->userdata('role') == -17 ){ ?>
   <!-- <hr class="sidebar-divider "> -->
   <div class="sidebar-heading">
      Menu Perawat
   </div>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>reserv_ns">
         <i class="fas fa-fw fa-users"></i>
         <span>Data Pasien</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>getPatient">
         <i class="fas fa-fw fa-clipboard"></i>
         <span>Riwayat Pasien Kontrol</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>user_guide">
         <i class="fas fa-fw fa-book-medical"></i>
         <span>Panduan Pengguna</span></a>
   </li>
   
   <?php } ?>
   <?php if($this->session->userdata('role') == 2 ){ ?>
   <!-- <hr class="sidebar-divider "> -->
   <div class="sidebar-heading">
      Menu Dokter
   </div>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>reserv_dr">
         <i class="fas fa-fw fa-users"></i>
         <span>Data Pasien</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>getPatient">
         <i class="fas fa-fw fa-clipboard"></i>
         <span>Riwayat Pasien Kontrol</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>user_guide">
         <i class="fas fa-fw fa-book-medical"></i>
         <span>Panduan Pengguna</span></a>
   </li>
   
   <?php } ?>
   <?php if($this->session->userdata('role') == -18){ ?>

   <!-- <hr class="sidebar-divider "> -->
   <div class="sidebar-heading">
      Settings
   </div>
   <li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ?>set_reservation">
         <i class="fas fa-fw fa-clipboard"></i>
         <span>Data Pasien Kontrol</span></a>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setUser" aria-expanded="true"
         aria-controls="lapkas">
         <i class="fas fa-fw fa-users"></i>
         <span>Users</span>
      </a>
      <div id="setUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Users:</h6>
            <a class="collapse-item" href="<?= base_url() ?>set_users">Data User</a>
            <!-- <a class="collapse-item" href="<?= base_url() ?>setting/user/role">User Role</a> -->
         </div>
      </div>
   </li>
   <?php } } ?>
   <hr class="sidebar-divider d-none d-md-block">
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
</ul>