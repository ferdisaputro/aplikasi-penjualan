@extends('layouts.main')
@section('container')
   <table class="table table-stripped">
      <thead>
         <tr>
            <th>Id detail penjualan</th>
            <th>Nama item</th>
            <th>Kuantitas</th>
            <th>Harga satuan</th>
            <th>Total harga</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($penjualan->penjualanDetail as $penjualanDetail)
            <tr>
               <td>{{ $penjualanDetail->id }}</td>
               <td>{{ $penjualanDetail->penjualanDetailProduk->nama_produk }}</td>
               <td>{{ $penjualanDetail->kuantitas }}</td>
               <td>{{ $penjualanDetail->penjualanDetailProduk->harga }}</td>
               <td>{{ $penjualanDetail->total }}</td>
               <td>
                  <a href="/penjualan/{{ $penjualanDetail->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/penjualanDetail/{{ $penjualanDetail->id }}" class="d-inline" method="post">
                     @method('delete')
                     @csrf
                     <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Anda yakin ingin menggapus detail penjualan pelanggan {{ $penjualan->pelanggan->nama?? '' }}?')"><span data-feather="trash"></span></button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
@endsection