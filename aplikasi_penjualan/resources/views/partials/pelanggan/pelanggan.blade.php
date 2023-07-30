<section class="mt-4">
   <h3 class="text-center py-2">Data Pelanggan</h3>
   <table class="table table-striped">
      <thead>
         <tr>
            <td>#</td>
            <td>Nama pelanggan</td>
            <td>Jenis kelamin</td>
            <td>Telepon</td>
            <td>Alamat</td>
            <td>Action</td>
         </tr>
      </thead>
      <tbody>
         @foreach ($pelanggans as $pelanggan)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $pelanggan->nama }}</td>
               <td>{{ $pelanggan->jenis_kelamin }}</td>
               <td>{{ $pelanggan->telepon }}</td>
               <td>{{ $pelanggan->alamat }}</td>
               <td class="d-flex">
                  <a href="/pelanggan/{{ $pelanggan->id }}/edit" class="me-1"><button class="badge border-0 bg-warning"><span data-feather="edit"></span></button></a>
                  <form action="/pelanggan/{{ $pelanggan->id }}" method="post">
                     @csrf
                     @method('delete')
                     <button type="submit" class="badge border-0 bg-danger" onclick="return confirm('Hapus {{ $pelanggan->nama }}')"><span data-feather="trash-2"></span></button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
      {{ $pelanggans->links() }}
   </table>
   {{ $pelanggans->links() }}
</section>