    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"
                href="<?=base_url();?>"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-th-list"></i> Media
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url('faq');?>">Syarat Media</a></li>
            <li><a class="dropdown-item" href="<?=base_url('data-ormas');?>">Media Terdaftar</a></li>
           
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-id-card"></i> Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <?php if(!$this->session->userdata('user_login')):?>
            <li><a class="dropdown-item" href="<?=base_url('user/login');?>">Login</a></li>
            <li><a class="dropdown-item" href="<?=base_url('user/daftar');?>">Daftar</a></li>
            <?php else:?>
            <li><a class="dropdown-item" href="<?=base_url('beranda');?>">Admin Panel</a></li>
            <?php endif;?>
          </ul>
        </li>
    </ul>
