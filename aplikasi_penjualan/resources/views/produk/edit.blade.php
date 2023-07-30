@extends('layouts.main')
@section('container')
   <main class="container py-3">
      @include('partials.alert')
      <section>
         <form action="/produk/{{ $produk->id }}" method="POST" class="py-2 col-11 mx-auto">
            @method('put')
            @csrf
            <h3 class="text-center">Edit produk</h3>
            <div class="row row-cols-md-2">
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="kode_produk" name="kode_produk" value="{{ $produk->kode_produk }}" class="form-control @error('kode_produk')
                        is-invalid
                     @enderror" placeholder="Kode produk">
                     <span class="input-group-text">Kode produk</span>
                     <div id="kode_produk" class="invalid-feedback">
                        @error('kode_produk')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control @error('nama_produk')
                        is-invalid
                     @enderror" placeholder="Nama produk">
                     <span class="input-group-text">Nama produk</span>
                     <div id="nama_produk" class="invalid-feedback">
                        @error('nama_produk')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="harga" name="harga" value="{{ $produk->harga }}" class="form-control currency-input @error('harga')
                        is-invalid
                     @enderror" placeholder="Rp.">
                     <span class="input-group-text">Harga</span>
                     <div id="harga" class="invalid-feedback">
                        @error('harga')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="row">
                     <div class="col">
                        <div class="input-group has-validation mb-3">
                           <input type="number" id="stok" name="stok" value="{{ $produk->stok }}" min="0" placeholder="0" class="form-control @error('stok')
                              is-invalid
                           @enderror" value="08">
                           <span class="input-group-text">Stok</span>
                           <div id="stok" class="invalid-feedback">
                              @error('stok')
                                 {{ $message }}
                              @enderror
                           </div>          
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group has-validation mb-3">
                           <select type="number" id="satuan" name="satuan" value="{{ $produk->satuan }}" placeholder="0" class="form-select @error('satuan') is-invalid @enderror" value="08">
                              <option value="pcs">PCS</option>
                              <option value="botol">Botol</option>
                              <option value="kardus">Kardus</option>
                              <option value="pak">Pak</option>
                              <option value="liter">Liter</option>
                              <option value="lainnya">Lainnya</option>
                           </select>
                           <span class="input-group-text">Satuan</span>
                           <div id="satuan" class="invalid-feedback">
                              @error('satuan')
                                 {{ $message }}
                              @enderror
                           </div>          
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <select type="text" id="supplier_id" name="supplier_id" class="form-select @error('supplier_id') is-invalid @enderror" placeholder="JL.">
                        @foreach ($suppliers as $supplier)
                           <option value="{{ $supplier->id }}" {{ $produk->supplier_id == $supplier->id? "selected" : '' }}>{{ $supplier->nama }}</option>
                        @endforeach
                     </select>
                     <span class="input-group-text">supplier</span>
                     <div id="supplier_id" class="invalid-feedback">
                        @error('supplier_id')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

            </div>

            <div class="">
               <input type="submit" value="Update" class="form-control btn btn-outline-secondary">
            </div>

         </form>
      </section>
   </main>
@endsection