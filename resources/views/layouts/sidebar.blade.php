<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-profile"">
                <style>
                    .user-profile {

                        background-image: url(" {{ asset('images/user-bg.jpg') }}"); padding: 20px
                15px 25px ; } </style>
                <div class="user-name">
                    <h5 class="white-text name">
                        <i class="material-icons m-r-10">account_circle</i>
                        <span class="hidden">
                            @if(auth()->user()->level == 1)
                                Super Admin
                            @endif
                            @if(auth()->user()->level == 2)
                                Admin
                            @endif
                        </span><br>
                    </h5>
                    <h6 class="white-text name m-t-5">
                        {{ Auth::user()->email }}
                    </h6>
                </div>
            </div>
        </li>
        <li>
            <ul class="collapsible m-t-15">
                @if(auth()->user()->level == 1)
                    <li>
                        <a href="/home" class="collapsible-header">
                            <i class="material-icons">dashboard</i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">group</i>
                            <span class="hide-menu">Siswa</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/siswa">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Data Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/kenaikan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Kenaikan Kelas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/kelulusan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Kelulusan</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">book</i>
                            <span class="hide-menu">PSM</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/spp">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Data PSM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/riwayatpembayaranspp">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Riwayat Pembayaran</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">class</i>
                            <span class="hide-menu">Tanggungan</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/tanggungan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Data Tanggungan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/riwayatpembayarantanggungan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Riwayat Pembayaran</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">playlist_add_check</i>
                            <span class="hide-menu">Cek Tanggungan dan PSM</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/cekspp">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Cek PSM Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cektanggungan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Cek Tanggungan Siswa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/alumni" class="collapsible-header">
                            <i class="material-icons">person</i>
                            <span class="hide-menu">Data Alumni</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tambah_user" class="collapsible-header">
                            <i class="material-icons">person_add</i>
                            <span class="hide-menu">Tambah User</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->level == 2)
                    <li>
                        <a href="/home" class="collapsible-header">
                            <i class="material-icons">dashboard</i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">group</i>
                            <span class="hide-menu">Siswa</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/siswa">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Data Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/kenaikan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Kenaikan Kelas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/kelulusan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Kelulusan Kelas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">book</i>
                            <span class="hide-menu">PSM</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/spp">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">PSM Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/riwayatpembayaranspp">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Riwayat Pembayaran</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header has-arrow">
                            <i class="material-icons">class</i>
                            <span class="hide-menu">Tanggungan</span>
                        </a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li>
                                    <a href="/tanggungan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Tanggungan Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/riwayatpembayarantanggungan">
                                        <i class="material-icons">hdr_weak</i>
                                        <span class="hide-menu">Riwayat Pembayaran</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/alumni" class="collapsible-header">
                            <i class="material-icons">person</i>
                            <span class="hide-menu">Tanggungan Alumni</span>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
    </ul>
</aside>