<header class="topbar" >
    <!-- ============================================================== -->
    <!-- Navbar scss in header.scss -->
    <!-- ============================================================== -->
    <nav>
        <div class="nav-wrapper" >
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <a href="javascript:void(0)" class="brand-logo" style="padding:10px">
                <h4 class="m-t-10 m-l-30" style="font-weight: bold;">Abase Admin</h4>
                <!-- <span class="text">
                    <img class="light-logo" src="../../assets/images/logo-light-text.png">
                    <img class="dark-logo" src="../../assets/images/logo-text.png">
                </span> -->
            </a>
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <!-- <ul class="left">
                <li class="hide-on-med-and-down">
                    <a href="javascript: void(0);" class="nav-toggle">
                        <span class="bars bar1"></span>
                        <span class="bars bar2"></span>
                        <span class="bars bar3"></span>
                    </a>
                </li>
                <li class="hide-on-large-only">
                    <a href="javascript: void(0);" class="sidebar-toggle">
                        <span class="bars bar1"></span>
                        <span class="bars bar2"></span>
                        <span class="bars bar3"></span>
                    </a>
                </li>
            </ul> -->
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="right">
                <!-- ============================================================== -->
                <!-- Profile icon scss in header.scss -->
                <!-- ============================================================== -->
                <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img
                            src="{{ asset('images') }}/{{ Auth::user()->foto }}" alt="user"
                            class="circle profile-pic"></a>
                    <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img
                                        src="{{ asset('images') }}/{{ Auth::user()->foto }}"
                                        alt="user"></div>
                                <div class="u-text">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->email }}</p>                                    
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">power_settings_new</i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- Navbar scss in header.scss -->
    <!-- ============================================================== -->
</header>