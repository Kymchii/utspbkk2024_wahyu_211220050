<li class="menu-header"><span> Menu Utama</span></li>
<li class="nav-item{{ request()->is('pegawai/keluhan') ? ' active' : '' }}"><a href="{{ url('/pegawai/keluhan') }}"><i class="fas fa-thumbtack"></i><span>Keluhan</span></a></li>