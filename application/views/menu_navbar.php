    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"
                href="<?=base_url();?>"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                href="<?=base_url('news');?>"><i class="fa fa-newspaper"></i> Berita</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-th-list"></i> TKDD
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('page/4');?>">Kewaspadaan Dini</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/5');?>">Penanganan Konflik</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-th-list"></i> Ormas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('faq');?>">Syarat Ormas</a></li>
            <li><a class="dropdown-item" href="<?=base_url('data-ormas');?>">Ormas Terdaftar</a></li>
           
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-th-list"></i> Radikal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('page/2');?>">Narasi Tekstual</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/3');?>">Riwayat Radikalisme di Lubuklinggau</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                href="<?=base_url('pengaduan');?>"><i class="fa fa-mail-bulk"></i> Pengaduan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-flag"></i> Parpol
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('page/6');?>">Index Parpol</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/7');?>">Perolehan Kursi</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/8');?>">Perolehan Suara</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-microscope"></i> Penelitian
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('pengajuan-penelitian');?>">Pengajuan Penelitian</a></li>
            <li><a class="dropdown-item" href="<?=base_url('cek-status-pengajuan');?>">Cek Status Pengajuan Penelitian</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-id-card"></i> Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('page/9');?>">Aturan Hukum</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/10');?>">Pernyataan Komitmen Bersama</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/11');?>">Foto Kegiatan</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/12');?>">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="<?=base_url('page/13');?>">Tupoksi Kesbangpol</a></li>
             <li><hr class="dropdown-divider"></li>
            <?php if(!$this->session->userdata('user_login')):?>
            <li><a class="dropdown-item" href="<?=base_url('user/login');?>">Login</a></li>
            <li><a class="dropdown-item" href="<?=base_url('user/daftar');?>">Daftar</a></li>
            <?php else:?>
            <li><a class="dropdown-item" href="<?=base_url('beranda');?>">Admin Panel</a></li>
            <?php endif;?>
          </ul>
        </li>
    </ul>
