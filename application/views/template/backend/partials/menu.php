<?php $pag = $this->uri->segment(1); ?>
<?php $page = $this->uri->segment(2); ?>
<?php $pages = $this->uri->segment(3); ?>
<div class="sidebar-menu">
	<header class="logo-env">
		<!-- logo -->
		<!-- <div class="logo">
				<a href="index.html">
					<img src="<?= base_url() ?>assets/images/logo-light.jpg" width="120" alt="" />
				</a>
			</div> -->


		<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
		<div class="sidebar-mobile-menu visible-xs">
			<a href="#" class="with-animation">
				<!-- add class "with-animation" to support animation -->
				<i class="entypo-menu"></i>
			</a>
		</div>
	</header>

	<ul id="main-menu" class="">
		<!-- add class "multiple-expanded" to allow multiple submenus to open -->
		<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
		<li><a href=" <?php echo base_url() ?> " target="_blank"><i class="entypo-monitor"></i><span>Halaman Depan</span></a></li>
		<li <?php if ($page == "Dashboard") echo 'class="active opened active" '; ?>><?= anchor('admin/Dashboard', '<i class=entypo-gauge></i><span>Dashboard</span>'); ?></li>
		<li <?php if ($pag == "Kriteria" || $pag == "kriteria" || $pag == "Subkriteria" || $pag == "subkriteria") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-layout"></i>
				<span>Kriteria</span>
			</a>
			<ul>
				<li <?php if ($pag == "Kriteria" || $pag == "kriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kriteria', '<span class=entypo-layout>Kriteria</span>'); ?></li>
				<li <?php if ($pag == "Subkriteria" || $pag == "subkriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Subkriteria', '<span class=entypo-menu> Subkriteria</span>'); ?></li>
			</ul>
		</li>
		<li <?php if ($pag == "client" || $pag == "Client") echo 'class="active opened active" '; ?>><?= anchor('Client', '<i class=entypo-doc-text></i><span>Client</span>'); ?></li>
		<li <?php if ($pag == "Alternatif" || $pag == "alternatif" || $page == "Banding" || $page == "banding" || $page == "Hasil" || $page == "hasil") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-book"></i>
				<span>Konsultasi</span>
			</a>
			<ul>
				<li <?php if ($pag == "alternatif" || $pag == "Alternatif") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Alternatif', '<span class=entypo-direction>Alternatif</span>'); ?></li>
				<li <?php if ($page == "banding" || $page == "Banding") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/banding', '<span class=entypo-switch> Perbandingan</span>'); ?></li>
				<li <?php if ($page == "hasil" || $page == "Hasil") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/hasil', '<span class=entypo-chart-bar>Hasil Konsultasi</span>'); ?></li>
			</ul>
		</li>
		<li <?php if ($page == "pesan" || $page == "Pesan") echo 'class="active opened active" '; ?>><?= anchor('pesan', '<i class=entypo-mail></i><span>Pesan</span>'); ?></li>
		
		<!-- Pengaturan -->
		
<?php if ($this->ion_auth->is_admin()) { ?>

		<li <?php if ($page == "Auth" || $page == "auth") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="entypo-tools"></i>
				<span>Pengaturan</span>
			</a>
			<ul>
				<li <?php if ($page == "Auth" || $page == "auth") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/Auth', '<span class=entypo-user> Users</span>'); ?></li>
			</ul>
		</li>
<?php } ?>

		<?php
		if ($this->ion_auth->is_admin()) { ?>
		
		<!-- Video Content -->
		<li <?php if ($pag == "Masukkan" || $pag == "masukkan" || $page == "Hapus" || $page == "hapus") echo 'class="active opened active multiple-expanded" '; ?>>
			<a href="ui-panels.html">
				<i class="fas fa-file-video"></i>
				<span>Video</span>
			</a>
			<ul>
				<li <?php if ($page == "Masukkan" || $page == "masukkan") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Video/index', '<i class="fas fa-film"></i><span> Tambahkan video</span>'); ?></li>

				<li <?php if ($page == "Hapus" || $page == "hapus") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Video/delete', '<i class="fas fa-minus-circle"></i><span> Hapus video</span>'); ?></li>
			</ul>
		</li>
		<!-- END Video Content -->

		<li>
			<a href="javascript:;" onclick="jQuery('#modal-1').modal('show');"><i class="entypo-help"></i><span>Tentang</span></a>
		</li>

	<?php } ?>
	</ul>

</div>
<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title">Tentang Website</h4>
			</div>

			<div class="modal-body">
				<strong>Tentang Website</strong><br>
				<i class="glyphicon glyphicon-ok"></i> Profil<br>
				<i class="glyphicon glyphicon-ok"></i> Forum Diskusi<br>
				<i class="glyphicon glyphicon-ok"></i> Private Consultant<br>
				<i class="glyphicon glyphicon-ok"></i> Open Chat Online<br>
				<i class="glyphicon glyphicon-ok"></i> Video Content<br>
				<i class="glyphicon glyphicon-ok"></i> Islamic Law Resource<br>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>