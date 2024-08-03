<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="search" class="input input-bordered" placeholder="Pencarian" >
        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-plus class="size-5" />
            <span>Tambah Menu</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead class="">
                <th class="">No</th>
                <th class="">Menu</th>
                <th class="">Harga</th>
                <th class="">Keterangan</th>
                <th class="">Actions</th>
            </thead>
            <tbody class="">
                @foreach ($menus as $menu )
                    <tr class="">
                        <td class="">{{ $no++ }}</td>
                        <td class="">
                            <div class="flex gap-3 items-center">
                                <div class="avatar">
                                    <div class="w-12 rounded-lg">
                                        <img src="{{ $menu->gambar }}" alt="" onerror="console.log('Image failed to load:', this.src)">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="font-bold">{{ $menu->name }}</div>
                                    <div>{{ $menu->type }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="">{{ $menu->harga }}</td>
                        <td class="">{{ $menu->desc }}</td>
                        <td class="">
                            <button class="btn btn-xs btn-square" wire:click="$dispatch('editMenu', {menu : {{ $menu->id }}})">
                                <x-tabler-edit class="size-5" />
                            </button>
                            <button class="btn btn-xs btn-square" wire:click="$dispatch('deleteMenu', {menu : {{ $menu->id }}})">
                                <x-tabler-trash class="size-5" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('menu.actions')
</div>
