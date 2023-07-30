<section class="mt-4">
   <h3 class="text-center py-2">Data produk</h3>
   <table class="table table-striped">
      <thead>
         <tr>
            <td>#</td>
            <td>Kode produk</td>
            <td>Nama produk</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Satuan</td>
            <td>Supplier</td>
            <td>Action</td>
         </tr>
      </thead>
      <tbody>
         @foreach ($produks as $produk)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $produk->kode_produk }}</td>
               <td>{{ $produk->nama_produk }}</td>
               <td>{{ $produk->harga }}</td>
               <td>{{ $produk->stok }}</td>
               <td>{{ $produk->satuan }}</td>
               <td>{{ $produk->produkSupplier->nama?? '---' }}</td>
               <td class="d-flex">
                  <a href="/produk/{{ $produk->id }}/edit" class="me-1"><button class="badge border-0 bg-warning"><span data-feather="edit"></span></button></a>
                  <form action="/produk/{{ $produk->id }}" method="post">
                     @csrf
                     @method('delete')
                     <button type="submit" class="badge border-0 bg-danger" onclick="return confirm('Hapus {{ $produk->nama_produk }}')"><span data-feather="trash-2"></span></button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
      {{ $produks->links() }}
   </table>
   {{ $produks->links() }}
</section>