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
            {{-- Data --}}
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Tabel</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->segment(2) == 'kecamatan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.kecamatan.index') }}">Kecamatan</a></li>
                  <li class="{{ request()->segment(2) == 'agama' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.agama.index') }}">Agama</a></li>
                  <li class="{{ request()->segment(2) == 'warga-negara' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.warga-negara.index') }}">Warga Negara</a></li>
                  <li class="{{ request()->segment(2) == 'pendidikan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.pendidikan.index') }}">Pendidikan</a></li>
                  <li class="{{ request()->segment(2) == 'status-perkawinan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.status-perkawinan.index') }}">Status Perkawinan</a></li>
                  <li class="{{ request()->segment(2) == 'legalitas-perkawinan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.legalitas-perkawinan.index') }}">Legalitas Perkawinan</a></li>
                  <li class="{{ request()->segment(2) == 'pekerjaan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.pekerjaan.index') }}">Pekerjaan</a></li>
                  <li class="{{ request()->segment(2) == 'suku-bangsa' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.suku-bangsa.index') }}">Suku Bangsa</a></li>
                  <li class="{{ request()->segment(2) == 'negara' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.negara.index') }}">Negara</a></li>
                  <li class="{{ request()->segment(2) == 'tinggal-sementara' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.tinggal-sementara.index') }}">Tinggal Sementara WNA</a></li>
                  <li class="{{ request()->segment(2) == 'kunjungan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.kunjungan.index') }}">Kunjungan WNA</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->segment(2) == 'kelurahan' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.kelurahan.index') }}">Kelurahan</a></li>
                  <li class="{{ request()->segment(2) == 'wni' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wni.index') }}">Biodata Terpidana WNI</a></li>
                  <li class="{{ request()->segment(2) == 'wna' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wna.index') }}">Biodata Terpidana WNA</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Kartu TIK</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->segment(3) == 'biodata' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.biodata.index') }}">Biodata</a></li>
                  <li class="{{ request()->segment(3) == 'barang' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.barang.index') }}">Barang Cetakan</a></li>
                  <li class="{{ request()->segment(3) == 'organisasi' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.organisasi.index') }}">Organisasi</a></li>
                  <li class="{{ request()->segment(3) == 'terdakwa' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.terdakwa.index') }}">Terdakwa</a></li>
                  <li class="{{ request()->segment(3) == 'media' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.media.index') }}">Pengawasan Media</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Pidum Pidsus</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->segment(2) == 'korupsi' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.korupsi.index') }}">Korupsi</a>
                    </li>
                  <li class="{{ request()->segment(2) == 'narkotika' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.narkotika.index') }}">Narkotika</a></li>
                  <li class="{{ request()->segment(2) == 'umum' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.umum.index') }}">Umum</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-id-card"></i> <span>Labun Intel</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->segment(2) == 'pencegahan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pencegahan.index') }}">
                            Pencegahan
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengawasan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengawasan.index') }}">
                            Pengawasan
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'asing-pidana' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.asing-pidana.index') }}">
                            WNA Yang Terlibat
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengamanan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengamanan.index') }}">
                            Pengamanan SDJ
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengawasan_barang' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengawasan_barang.index') }}">
                            Pengawasan Barang
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengawasan_media' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengawasan_media.index') }}">
                            Pengawasan Media
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengobatan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengobatan.index') }}">
                            Pengobatan Tradiosional
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'kepercayaan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.kepercayaan.index') }}">
                            Pengawasan Kepercayaan
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'keagamaan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.keagamaan.index') }}">
                            Pengawasan Keagamaan
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pengawasan_organisasi' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengawasan_organisasi.index') }}">
                            Pengawasan Organisasi
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'ketertiban' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.ketertiban.index') }}">
                            Ketertiban Umum
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'pembinaan' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pembinaan.index') }}">
                            Pembinaan Masyarakat Taat Hukum
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'konflik' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.konflik.index') }}">
                            Pencegahan Konflik Sosial
                        </a>
                    </li>
                    <li class="{{ request()->segment(2) == 'posko' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.posko.index') }}">
                            Posko Perwakilan Kejaksaan
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
