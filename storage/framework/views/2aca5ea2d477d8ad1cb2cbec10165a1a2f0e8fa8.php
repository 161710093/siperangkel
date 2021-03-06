<aside class="sidebar">
  <?php if(Auth::check()): ?>
  <div class="scroll-wrapper scrollbar-inner" style="position: relative;">
    <div class="scrollbar-inner scroll-content" style="height: 566.5px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
      <div class="user">
        <div class="user__info" data-toggle="dropdown">
          <img class="user__img" src="<?php echo e(asset('demo/img/profile-pics/4.jpg')); ?>" alt="">
          <div>
            <div class="user__name"><?php echo e(Auth::user()->name); ?></div>
            <div class="user__email" style="font-size:10px;"><?php echo e(Auth::user()->email); ?></div>
          </div>
        </div>
        <div class="dropdown-menu">
          
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();$('#logout-form').submit();">
              Keluar
          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
        </div>
      </div>

      <ul class="navigation">
        <li class="<?php echo e(Request::is('home') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('home')); ?>"><i class="zmdi zmdi-home"></i> Beranda</a></li>

        <li class="<?php echo e(Request::is('anggota') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('admin/anggota')); ?>"><i class="zmdi zmdi-accounts"></i> Anggota</a></li>

        <li class="<?php echo e(Request::is('barang') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('admin/barang')); ?>"><i class="zmdi zmdi-devices"></i> Barang</a></li>

        <li class="<?php echo e(Request::is('peminjaman') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('admin/peminjaman')); ?>"><i class="zmdi zmdi-assignment"></i> Peminjaman</a></li>

        <li class="<?php echo e(Request::is('pengembalian') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('admin/pengembalian')); ?>"><i class="zmdi zmdi-assignment-check"></i> Pengembalian</a></li>
     
     </ul>
    </div>
    <div class="scroll-element scroll-x">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="width: 100px;"></div>
      </div>
    </div>
    <div class="scroll-element scroll-y">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="height: 99px; top: 0px;"></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</aside>