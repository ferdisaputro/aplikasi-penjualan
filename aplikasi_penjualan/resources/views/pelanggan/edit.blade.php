@extends('layouts.main')
@section('container')
   <main class="container py-3">
      @include('partials.alert')
      <section>
         <form action="/pelanggan/{{ $pelanggan->id }}" method="POST" class="py-2 col-11 mx-auto">
            @csrf
            @method('put')
            <input type="hidden" value="{{ $pelanggan->id }}">
            <h3 class="text-center">Edit data pelanggan</h3>
            <div class="row row-cols-md-2">
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="nama" name="nama" value="{{ $pelanggan->nama }}" class="form-control @error('nama')
                        is-invalid
                     @enderror" placeholder="Nama">
                     <span class="input-group-text">Nama pelanggan</span>
                     <div id="nama" class="invalid-feedback">
                        @error('nama')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <select type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                        <option value="pria" {{ $pelanggan->jenis_kelamin == 'pria'? "selected" : '' }}>Pria</option>
                        <option value="wanita" {{ $pelanggan->jenis_kelamin == 'wanita'? "selected" : '' }}>Wanita</option>
                        <option value="non_binary">Non biner</option>
                        <option value="walmart_bag">Kresek alfamart</option>
                     </select>
                     <span class="input-group-text">Jenis kelamin</span>
                     <div id="jenis_kelamin" class="invalid-feedback">
                        @error('jenis_kelamin')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="telepon" name="telepon" value="{{ $pelanggan->telepon }}" placeholder="08" class="form-control @error('telepon')
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
                     @enderror" placeholder="JL.">{{ $pelanggan->alamat }}</textarea>
                     <span class="input-group-text">Alamat</span>
                     <div id="alamat" class="invalid-feedback">
                        @error('alamat')
                           {{ $message }}
                        @enderror
                     </div>
                  </div>
               </div>

            </div>

            <input type="submit" class="form-control btn btn-outline-secondary">

         </form>
      </section>
   </main>
@endsection