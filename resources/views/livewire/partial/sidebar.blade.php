<ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4 border-r-2 border-base-300 space-y-4">
    <li>
        <h2 class="menu-title">Dashboard</h2>
        <ul>
            <li>
                <a href="{{route('home')}}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-dashboard class="sixe-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-file-plus class="sixe-5" />
                    <span>Input Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Data Master</h2>
        <ul>
            <li>
                <a href="{{ route('menu.index') }}" @class(['active' => Route::is('menu.index')]) wire:navigate>
                    <x-tabler-layout-grid-add class="sixe-5" />
                    <span>Menu Makanan</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-users class="sixe-5" />
                    <span>Data Customer</span>
                </a>
            </li>
            <li>
                <button wire:click='logout'>
                    <x-tabler-file class="sixe-5" />
                    <span>Riwayat Transaksi</span>
                </button>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Account</h2>
        <ul>
            <li>
                <a href="{{route('profile')}}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user class="sixe-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click='logout'>
                    <x-tabler-logout class="sixe-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>

  </ul>
