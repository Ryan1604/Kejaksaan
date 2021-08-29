<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#" class="logo">
                Kejaksaan
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" class="logo">
                {{-- <img src="{{ asset('img/logo.jpeg') }}" width="50" alt="navbar brand"> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ request()->path() == 'admin/dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="{{ request()->segment(2) == 'kelurahan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.kelurahan.index') }}">
                    <i class="fas fa-city"></i>
                    <span>Kelurahan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'wni' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.wni.index') }}">
                    <i class="fas fa-list"></i>
                    <span>Biodata Terpidana WNI</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'wna' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.wna.index') }}">
                    <i class="fas fa-list"></i>
                    <span>Biodata Terpidana WNA</span>
                </a>
            </li>
            <li class="dropdown {{ request()->segment(2) == 'history' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Kartu TIK</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('admin.wni.index') }}">Biodata</a></li>
                  <li><a class="nav-link" href="{{ route('admin.wni.index') }}">Barang Cetakan</a></li>
                  <li><a class="nav-link" href="{{ route('admin.wni.index') }}">Organisasi</a></li>
                  <li><a class="nav-link" href="{{ route('admin.wni.index') }}">Tersangka/Terdakwa/Terpidana</a></li>
                  <li><a class="nav-link" href="{{ route('admin.wni.index') }}">Pengawasan Media Komunikasi</a></li>
                </ul>
            </li>

            {{-- Reference Data --}}
            <li class="menu-header">Reference Data</li>
            <li class="{{ request()->segment(2) == 'kecamatan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.kecamatan.index') }}">
                    <i class="fas fa-map"></i>
                    <span>Kecamatan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'agama' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.agama.index') }}">
                    <i class="fas fa-table"></i>
                    <span>Agama</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'warga-negara' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.warga-negara.index') }}">
                    <i class="fas fa-flag"></i>
                    <span>Warna Negara</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'pendidikan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pendidikan.index') }}">
                    <i class="fas fa-book-open"></i>
                    <span>Pendidikan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'status-perkawinan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.status-perkawinan.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Status Perkawinan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'legalitas-perkawinan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.legalitas-perkawinan.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Legalitas Perkawinan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'pekerjaan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pekerjaan.index') }}">
                    <i class="fas fa-tasks"></i>
                    <span>Pekerjaan</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'suku-bangsa' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.suku-bangsa.index') }}">
                    <i class="fas fa-flag"></i>
                    <span>Suku Bangsa</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'negara' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.negara.index') }}">
                    <i class="fas fa-flag"></i>
                    <span>Negara</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'tinggal-sementara' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.tinggal-sementara.index') }}">
                    <i class="fas fa-passport"></i>
                    <span>Tinggal Sementara WNA</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'kunjungan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.kunjungan.index') }}">
                    <i class="fas fa-passport"></i>
                    <span>Kunjungan WNA</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
