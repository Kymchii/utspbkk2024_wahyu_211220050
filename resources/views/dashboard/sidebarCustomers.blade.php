<li class="menu-header"><span> Menu Utama</span></li>
<li class="nav-item{{ request()->is('customers/keluhan') ? ' active' : '' }}"><a href="{{ url('/customers/keluhan') }}"><i class="fas fa-thumbtack"></i><span>Keluhan</span></a></li>