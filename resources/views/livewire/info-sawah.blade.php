<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Informasi Pertanian') }}</div>

                    <div class="card-body">
                        {{-- add button --}}
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Tambah</a>
                            </div>
                        </div>
                        {{-- end add button --}}
                        <br>
                        {{-- perpage --}}
                        <div class="row">
                            <div class="col-md-6">
                                <select wire:model="perPage" class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" wire:model="search" class="form-control" placeholder="Search">
                            </div>
                        </div>

                        {{-- table --}}
                        <div class="row mt-2">
                            <div class=" col-md-12">
                                <div class="table-responsive">
                                    <table class="table  table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Hasil Produksi</th>
                                                <th>Jenis Tanaman</th>
                                                <th>Produktivitas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($infotanahs as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->produksi }}</td>
                                                <td>{{ $item->jenis_tnm }} .</td>
                                                <td>{{ $item->produktivitas }} t/ha</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" wire:click="tanahId({{ $item->id }})">Edit</a>
                                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" wire:click="tanahId({{ $item->id }})">Delete</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak ada data.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- addModal --}}
    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <form wire:submit.prevent="store">
                        <div class="form-group row">
                            <label for="produksi" class="col-md-4 col-form-label text-md-right">{{ __('Hasil Produksi') }}</label>
                            <div class="col-md-6 mb-2">
                            <input id="produksi" type="text" class="form-control @error('produksi') is-invalid @enderror" name="produksi" wire:model="produksi" required autocomplete="produksi" autofocus>
                                @error('produksi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- produksi --}}
                            <label for="jenis_tnm" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Tanaman') }}</label>
                            <div class="col-md-6 mb-2">
                            <select id="jenis_tnm" class="form-control @error('jenis_tnm') is-invalid @enderror" name="jenis_tnm" wire:model="jenis_tnm" required autocomplete="jenis_tnm" autofocus>
            <option value="">Pilih Jenis Pertanian</option>
            <option value="Sayuran">Sayuran</option>
            <option value="Buah-buahan">Buah-buahan</option>
        </select>
                                @error('jenis_tnm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- produktivitas --}}
                            <label for="produktivitas" class="col-md-4 col-form-label text-md-right">{{ __('Produktivitas') }}</label>
                            <div class="col-md-6 mb-2">
                                <input id="produktivitas" type="text" class="form-control @error('produktivitas') is-invalid @enderror" name="produktivitas" wire:model="produktivitas" required autocomplete="produktivitas" autofocus>
                                @error('produktivitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" @if($jenis_tnm=='' || $produksi=='' || $produktivitas=='' ) disabled @endif>Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end addModal --}}

    {{-- editModal --}}
    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <form wire:submit.prevent="update">
                        <div class="form-group row">
                            <label for="jenis_tnm" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Tanaman') }}</label>
                            <div class="col-md-6 mb-2">
                                <input id="jenis_tnm" type="text" class="form-control @error('jenis_tnm') is-invalid @enderror" name="jenis_tnm" wire:model="jenis_tnm" required autocomplete="jenis_tnm" autofocus>
                                @error('jenis_tnm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- produksi --}}
                            <label for="produksi" class="col-md-4 col-form-label text-md-right">{{ __('Hasil Produksi') }}</label>
                            <div class="col-md-6 mb-2">
                                <input id="produksi" type="text" class="form-control @error('produksi') is-invalid @enderror" name="produksi" wire:model="produksi" required autocomplete="produksi" autofocus>
                                @error('produksi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- produktivitas --}}
                            <label for="produktivitas" class="col-md-4 col-form-label text-md-right">{{ __('Produktivitas Tanah') }}</label>
                            <div class="col-md-6 mb-2">
                                <input id="produktivitas" type="text" class="form-control @error('produktivitas') is-invalid @enderror" name="produktivitas" wire:model="produktivitas" required autocomplete="produktivitas" autofocus>
                                @error('produktivitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" @if($jenis_tnm=='' || $produksi=='' || $produktivitas=='' ) disabled @endif>Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end editModal --}}

    {{-- deleteModal --}}
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Kamu Yakin akan Menghapus?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="delete">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end deleteModal --}}
</div>
