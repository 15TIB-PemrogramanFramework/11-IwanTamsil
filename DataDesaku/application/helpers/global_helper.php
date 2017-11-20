<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('admin/').'">Menu</a>
	</li>

		<li>
		<a href="'.site_url('admin/').'"><i class="fa fa-home"></i> Home</a>
	</li><li>
	<a href="'.site_url('admin_user').'"> <i class="fa fa-users" aria-hidden="true"></i></i>Data Warga</a>
	</li><li>
	<a href="'.site_url('admin/dataktp').'"> <i class="fa fa-folder"></i> Data KTP</a>
	</li>
	<li>
	<a href="'.site_url('admin/datakk').'"> <i class="fa fa-folder"></i> Data KK</a>
	</li><li>
	<a href="'.site_url('menuuser/pesan').'"><i class="fa fa-comment" aria-hidden="true"></i></i> Saran/Komentar</a>
	</li><li>

	<a href="'.site_url('login/logout').'"><i class="fa fa-power-off"></i>Keluar </a>
	</li>';
	}
