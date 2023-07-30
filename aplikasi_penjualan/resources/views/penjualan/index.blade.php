{{-- @dd($penjualans->last()->penjualanDetail) --}}
@extends('layouts.main')
@section('container')
   <main class="container py-3">
      @include('partials.alert')
      <section>
         <form action="/penjualan" method="POST" class="py-2 col-11 mx-auto">
            @csrf
            <h3 class="text-center">Tambah penjualan</h3>
            <div class="row row-cols-md-2">
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <select id="id" name="id" value="{{ old('id') }}" placeholder="0" class="form-select @error('id') is-invalid @enderror" value="08">
                        @foreach ($pelanggans as $pelanggan)
                           <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                        @endforeach
                     </select>
                     <span class="input-group-text">pelanggan</span>
                     <div id="id" class="invalid-feedback">
                        @error('id')
                           {{ $message }}
                        @enderror
                     </div>          
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan')
                        is-invalid
                     @enderror" placeholder="Kode produk"></textarea>
                     <span class="input-group-text">Keterangan</span>
                     <div id="keterangan" class="invalid-feedback">
                        @error('keterangan')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>
            </div>

            <div class="container">
               <div class="row row-cols-sm-2 row-cols-md-2 products">
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <select type="text" id="kode_produk" name="produk[1][kode_produk]" class="form-select @error('kode_produk') is-invalid @enderror" placeholder="JL.">
                           <option value="" selected>Pilih barang</option>
                           @foreach ($produks as $produk)
                              <option value="{{ $produk->id }}|{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                           @endforeach
                        </select>
                        <span class="input-group-text">Produk</span>
                        <div id="kode_produk" class="invalid-feedback">
                           @error('kode_produk')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <input type="number" min="1" value="1" id="kuantitas" name="produk[1][kuantitas]" class="form-control @error('kuantitas') is-invalid @enderror">
                        <span class="input-group-text">Jumlah</span>
                        <div id="kuantitas" class="invalid-feedback">
                           @error('kuantitas')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <select type="text" id="kode_produk" name="produk[2][kode_produk]" class="form-select @error('kode_produk') is-invalid @enderror" placeholder="JL.">
                           <option value="" selected>Pilih barang</option>
                           @foreach ($produks as $produk)
                              <option value="{{ $produk->id }}|{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                           @endforeach
                        </select>
                        <span class="input-group-text">Produk</span>
                        <div id="kode_produk" class="invalid-feedback">
                           @error('kode_produk')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <input type="number" min="1" value="1" id="kuantitas" name="produk[2][kuantitas]" class="form-control @error('kuantitas') is-invalid @enderror">
                        <span class="input-group-text">Jumlah</span>
                        <div id="kuantitas" class="invalid-feedback">
                           @error('kuantitas')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <select type="text" id="kode_produk" name="produk[3][kode_produk]" class="form-select @error('kode_produk') is-invalid @enderror" placeholder="JL.">
                           <option value="" selected>Pilih barang</option>
                           @foreach ($produks as $produk)
                              <option value="{{ $produk->id }}|{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                           @endforeach
                        </select>
                        <span class="input-group-text">Produk</span>
                        <div id="kode_produk" class="invalid-feedback">
                           @error('kode_produk')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group has-validation mb-3">
                        <input type="number" min="1" value="1" id="kuantitas" name="produk[3][kuantitas]" class="form-control @error('kuantitas') is-invalid @enderror">
                        <span class="input-group-text">Jumlah</span>
                        <div id="kuantitas" class="invalid-feedback">
                           @error('kuantitas')
                              {{ $message }}
                           @enderror
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-outline-primary form-control tambah-produk mb-3"><span data-feather="plus"></span></button>
            </div>

            <div class="">
               <input type="submit" class="form-control btn btn-outline-secondary">
            </div>

         </form>
      </section>

      <section>
         <table class="table table-stripped">
            <thead>
               <tr>
                  <th>Id penjualan</th>
                  <th>Nama pelanggan</th>
                  <th>Jumlah item</th>
                  <th>Total belanja</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($penjualans as $penjualan)
                  <tr>
                     <td>{{ $penjualan->id?? '' }}</td>
                     <td>{{ $penjualan->pelanggan->nama?? '' }}</td>
                     <td>{{ $penjualan->penjualanDetail->sum('kuantitas') }}</td>
                     <td>{{ $penjualan->total }}</td>
                     <td>
                        <a href="/penjualan/{{ $penjualan->id }}" class="badge bg-success"><span data-feather="eye"></span></a>
                        <form action="/penjualan/{{ $penjualan->id }}" class="d-inline" method="post">
                           @method('delete')
                           @csrf
                           <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Anda yakin ingin menggapus data penjualan pelanggan {{ $penjualan->pelanggan->nama?? '' }}?')"><span data-feather="trash"></span></button>
                        </form>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </section>
   </main>
@endsection

@once
   @push('scripts')
      <script>
         let amount = 4
         
         $('.tambah-produk').on('click', function (e) {
            const produk = `
                     <div class="col">
                        <div class="input-group has-validation mb-3">
                           <select type="text" id="kode_produk" name="produk[${amount}][kode_produk]" class="form-select @error('kode_produk') is-invalid @enderror" placeholder="JL.">
                              <option value="" selected>Pilih barang</option>
                              @foreach ($produks as $produk)
                                 <option value="{{ $produk->id }}|{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                              @endforeach
                           </select>
                           <span class="input-group-text">Produk</span>
                           <div id="kode_produk" class="invalid-feedback">
                              @error('kode_produk')
                                 {{ $message }}
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group has-validation mb-3">
                           <input type="number" min="1" value="1" id="kuantitas" name="produk[${amount}][kuantitas]" class="form-control @error('kuantitas') is-invalid @enderror">
                           <span class="input-group-text">Jumlah</span>
                           <div id="kuantitas" class="invalid-feedback">
                              @error('kuantitas')
                                 {{ $message }}
                              @enderror
                           </div>
                        </div>
                     </div>
                  `
            $('.products').append(produk)
            amount++
         })
      </script>
   @endpush
@endonce