<div class="sidebar-wrapper sidebar-theme">
   <nav id="sidebar">
      <div class="profile-info">
         <figure class="user-cover-image"></figure>
         <div class="user-info">
            <img src="<?= base_url('assets/images/profile-default.png') ?>" alt="avatar">
            <h6 class=""><?= $this->session->userdata('username') ?> </h6>
            <p class=""><?= $this->session->userdata('cm') ?> | <?= $this->session->userdata('checkin_code') ?> </p>
         </div>
      </div>
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">
         <!-- PATIENT MENU -->
         <?php if ($this->session->userdata('cm')) { ?>
            <li class="menu">
               <a href="<?= base_url('welcome') ?>" aria-expanded="true" class="dropdown-toggle">
                  <div class="">
                     <div class="icon-container">
                        <i data-feather="clipboard"></i><span class="icon-name">Formulir Kontrol</span>
                     </div>
                  </div>
               </a>
            </li>
            <li class="menu">
               <a href="<?= base_url('results') ?>" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                     </svg>
                     <span>Hasil Kontrol</span>
                  </div>
               </a>
            </li>
            <li class="menu">
               <a href="<?= base_url('user_guide') ?>" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                     <div class="icon-container">
                        <i data-feather="book-open"></i><span class="icon-name">Panduan pengguna</span>
                     </div>
                  </div>
               </a>
            </li>
            <li class="menu">
               <a target="_blank" href="<?= base_url('feedback') ?>" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                     <div class="icon-container">
                        <i data-feather="message-circle"></i><span class="icon-name">Pengaduan</span>
                     </div>
                  </div>
               </a>
            </li>
            <li class="menu">
               <a target="_blank" href="https://www.rskariadi.co.id/page-contact.htm" aria-expanded="false" class="dropdown-toggle">
                  <div class="">
                     <div class="icon-container">
                        <i data-feather="phone-call"></i><span class="icon-name">Hubungi Kami</span>
                     </div>
                  </div>
               </a>
            </li>
         <?php } else { ?>

         <?php }  ?>
      </ul>
   </nav>
</div>