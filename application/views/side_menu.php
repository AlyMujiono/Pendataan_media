<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="user-panel">
  <div class="pull-left image">
    <img src="<?= base_url('assets/img/user/' . $usr->foto); ?>" class="img-circle" alt="avatar">
  </div>
  <div class="pull-left info">
    <p><?= $usr->username; ?></p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>
<ul class="sidebar-menu" data-widget="tree">
  <li class="header divider">NAVIGASI</li>
  <?= ce_nav_menu($this->config->item('nav_menu')); ?>
  <li class="<?php if ($this->uri->segment(1) == 'about') echo 'active'; ?>"><a href="<?= base_url('about'); ?>"><i class="fa fa-support"></i> <span>Tentang Aplikasi</span></a></li>
</ul>