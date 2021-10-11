@section('sidebar')
<div class="pcoded-wrapper">
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <div class="">
                {{-- <div class=" main-menu-header">
                    <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ Auth::user()->name }}</span>
                        <span id="more-details">{{ Auth::user()->email }}<i class="ti-angle-down"></i></span>
                    </div>
                </div>

                <div class="main-menu-content">
                    <ul>
                        <li class="more-details">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-layout-sidebar-left"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div> --}}
            </div>
            <!-- Search -->
            {{-- <div class="pcoded-search">
                <span class="searchbar-toggle"> </span>
                <div class="pcoded-search-box ">
                    <input type="text" placeholder="Search">
                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                </div>
            </div> --}}
            @if(auth()->user()->role!="1")
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasdashboardadmin {{ (request()->segment(1) == 'dashboardadmin') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{ Route('dashboardadmin.index') }}">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Transaction</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="hasroom {{ (request()->segment(1) == 'room') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{ Route('room.index') }}">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Book Room</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hastransaction" {{ (request()->segment(1) == 'transaction') ? 'active pcoded-trigger' : '' }}>
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Transaction</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Location</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmaps {{ (request()->segment(1) == 'maps') ? 'active pcoded-trigger' : '' }}">
                            <a href="{{ Route('maps.index') }}">
                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hascontactus {{ (request()->segment(1) == 'contactus') ? 'active pcoded-trigger' : '' }}">
                            <a href="{{ Route('contact-us.index') }}">
                                <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Contact Us</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </ul>
            @elseif(auth()->user()->role=="1")
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasdashboardadmin {{ (request()->segment(1) == 'dashboardadmin') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{ Route('dashboardadmin.index') }}">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Transaction</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasdetailtransaction {{ (request()->segment(1) == 'detailtransaction') ? 'active pcoded-trigger' : '' }}">
                        <a href="#">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Detail
                                Transaction</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasroom {{ (request()->segment(1) == 'room') ? 'active pcoded-trigger' : '' }}">
                        <a href="{{ Route('room.index') }}">
                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Room</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
</div>
@show