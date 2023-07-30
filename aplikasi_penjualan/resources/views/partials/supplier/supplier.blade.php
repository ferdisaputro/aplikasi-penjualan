<section class="mt-4">
   <h3 class="text-center py-2">Data Supplier</h3>
   <table class="table table-striped">
      <thead>
         <tr>
            <td>#</td>
            <td>Nama supplier</td>
            <td>Telepon</td>
            <td>Alamat</td>
            <td>Action</td>
         </tr>
      </thead>
      <tbody>
         @foreach ($suppliers as $supplier)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $supplier->nama }}</td>
               <td>{{ $supplier->telepon }}</td>
               <td>{{ $supplier->alamat }}</td>
               <td class="d-flex">
                  <a href="/supplier/{{ $supplier->id }}/edit" class="me-1"><button class="badge border-0 bg-warning"><span data-feather="edit"></span></button></a>
                  <form action="/supplier/{{ $supplier->id }}" method="post">
                     @csrf
                     @method('delete')
                     <button type="submit" class="badge border-0 bg-danger" onclick="return confirm('Hapus {{ $supplier->nama }} dari supplier')"><span data-feather="trash-2"></span></button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
      {{ $suppliers->links() }}
   </table>
   {{ $suppliers->links() }}
</section>