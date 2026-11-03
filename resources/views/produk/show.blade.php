<h2>Daftar Produk</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produk as $item)
        <tr>
            <!-- Loop iteration untuk membuat nomor urut otomatis 1, 2, 3... -->
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $item->nama_produk }}</td>
            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
            <td>{{ $item->deskripsi_produk }}</td>
        </tr>
        @endforeach
    </tbody>
</table>