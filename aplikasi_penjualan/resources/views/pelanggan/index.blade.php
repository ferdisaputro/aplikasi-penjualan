@extends('layouts.main')
@section('container')
   <main class="container py-3">
      @include('partials.alert')
      <section>
         <form action="/pelanggan" method="POST" class="py-2 col-11 mx-auto">
            @csrf
            <h3 class="text-center">Registration</h3>
            <div class="row row-cols-md-2">
               <div class="col">
                  <div class="input-group has-validation mb-3">
                     <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control @error('nama')
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
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                        <option value="walmart_bag">Plastik alfamart</option>
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
                     <input type="text" id="telepon" name="telepon" value="{{ old('telepon') }}" placeholder="08" class="form-control @error('telepon')
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
                     @enderror" placeholder="JL.">{{ old('alamat') }}</textarea>
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

      @include('partials.pelanggan.pelanggan')
   </main>
@endsection