<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit='simpan'>
            <h3 class="text-lg font-bold">Form Input Menu</h3>
            <div class="py-4 space-y-2">
                <div class="flex justify-center">
                    <label for="pickphoto" class="avatar">
                        <div class="w-32 rounded-xl">
                            <img src="{{ $photo ? $photo->temporaryUrl() : url('noimages.png')  }}" >
                        </div>
                        <input type="file" id="pickphoto" class="hidden" wire:model='photo' >
                    </label>
                </div>
                <label class="form-control">
                    <div class="label">
                      <span class="label-text">Nama Menu</span>
                    </div>
                    <input type="text" placeholder="Type here" @class(['input input-bordered', 'input-error' => $errors->first('form.name')]) wire:model="form.name" />
                </label>
                <label class="form-control">
                    <div class="label">
                      <span class="label-text">Harga Menu</span>
                    </div>
                    <input type="menu" placeholder="Type here" @class(['input input-bordered', 'input-error' => $errors->first('form.price')]) wire:model="form.price" />
                </label>
                <label class="form-control">
                    <div class="label">
                      <span class="label-text">Tipe Menu</span>
                    </div>
                    <select @class(['select select-bordered', 'select-error' => $errors->first('form.type')]) wire:model="form.type">
                        <option value=""></option>
                        @foreach ($types as $type )
                            <option value="{{ $type }}">{{ $type }}</option>

                        @endforeach
                    </select>
                </label>
                <label class="form-control">
                    <div class="label">
                      <span class="label-text">Keterangan</span>
                    </div>
                    <textarea placeholder="Tulis keterangan menu disini" @class(['input input-bordered', 'input-error' => $errors->first('form.desc')]) wire:model="form.desc">

                    </textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button class="btn btn-ghost" wire:click='closeModal'>Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
