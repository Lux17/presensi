<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-black sidebar collapse">
    <div class="position-sticky pt-3">
        <style>
            .nav-item.active {
            background-color: rgb(83, 121, 247);
        }
        </style>
        <ul class="nav flex-column">
            @if (auth()->user()->isAdmin() or auth()->user()->isOperator())
            <li class="nav-item {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
                <a class="nav-link " aria-current="page"
                    href="{{ route('dashboard.index') }}">
                    <i class="text-white fas fa-fw fa-tachometer-alt"></i>
                    {{-- <span data-feather="home" class="align-text-bottom text-white"></span> --}}
                    <span class="text-white">Dashboard </span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('positions.*') ? 'active' : '' }}">
                <a class="nav-link "
                    href="{{ route('positions.index') }}">
                    <i class="text-white fas fa-users fa-2x text-gray-300"></i>
                    {{-- <span data-feather="tag" class="align-text-bottom text-white"></span> --}}
                    <span class="text-white">Rombel</span>
                    
                </a>
            </li>
            <li class="nav-item  {{ request()->routeIs('employees.*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('employees.index') }}">
                    <i class="text-white fas fa-user fa-2x text-gray-300"></i>
                    {{-- <span data-feather="users" class="align-text-bottom text-white"></span> --}}
                    <span class="text-white">Anggota / User</span>
                    
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                    href="{{ route('holidays.index') }}">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Hari Libur
                </a>
            </li> -->
            <li class="nav-item {{ request()->routeIs('attendances.*') ? 'active' : '' }}">
                <a class="nav-link "
                    href="{{ route('attendances.index') }}">
                    <i class="text-white fas fa-fw fa-table"></i>
                    {{-- <span data-feather="clipboard" class="align-text-bottom text-white"></span> --}}
                    <span class="text-white">Absensi</span>
                    
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('presences.*') ? 'active' : '' }}">
                <a class="nav-link "
                    href="{{ route('presences.index') }}">
                    <i class="text-white fas fa-fw fa-clipboard-check"></i>
                    {{-- <span data-feather="clipboard" class="align-text-bottom text-white"></span> --}}
                    <span class="text-white">Data Kehadiran</span>
                    
                </a>
            </li>
            @endif
        </ul>

        <form action="{{ route('auth.logout') }}" method="post"
            onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
            @method('DELETE')
            @csrf
            <button class="w-full mt-4 d-block bg-transparent border-0 fw-bold text-danger px-3">Keluar</button>
        </form>
    </div>
</nav>