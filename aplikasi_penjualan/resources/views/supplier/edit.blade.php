@extends('layouts.main')
@section('container')
   
   <main class="container py-3">
      @include('partials.alert')
      <section>
         <form action="/supplier/{{ $supplier->id }}" method="POST" class="py-2 col-11 mx-auto">
            @method('put')
            @csrf
            <h3 class="text-center">Tambah supplier</h3>
            <div class="row row-cols-md-2">
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="nama" name="nama" value="{{ $supplier->nama }}" class="form-control @error('nama')
                        is-invalid
                     @enderror" placeholder="Nama">
                     <span class="input-group-text">Nama supplier</span>
                     <div id="nama" class="invalid-feedback">
                        @error('nama')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="telepon" name="telepon" value="{{ $supplier->telepon }}" placeholder="08" class="form-control @error('telepon')
                        is-invalid
                     @enderror" value="08">
                     <span class="input-group-text">Nomor telp</span>
                     <div id="telepon" class="invalid-feedback">
                        @error('telepon')
                           {{ $message }}
                        @enderror
                     </div>          
                  </div>
               </div>
               
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <textarea type="text" id="alamat" name="alamat" class="form-control @error('alamat')
                        is-invalid
                     @enderror" placeholder="JL.">{{ $supplier->alamat }}</textarea>
                     <span class="input-group-text">Alamat</span>
                     <div id="alamat" class="invalid-feedback">
                        @error('alamat')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

            </div>

            <div class="">
               <input type="submit" class="form-control btn btn-outline-secondary">
            </div>

         </form>
      </section>
   </main>

@endsection