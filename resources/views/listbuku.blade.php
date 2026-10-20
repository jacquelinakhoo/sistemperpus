 <table border="1" width="600">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Bahasa</th>
            <th>Cover</th>
            <th>Stok</th>
            <th>Jumlah Hal</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Penulis</th>
            <th>ID Penerbit</th>
            <th>Lokasi Rak</th>
            

        </tr>
        @php $no = 1; @endphp
        @foreach ($buku as $b)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $b->Judul }}</td>
            <td>{{ $b->Kategori }}</td>
            <td>{{ $b->Bahasa }}</td>
            <td>{{ $b->Cover }}</td>
            <td>{{ $b->Stok }}</td>
            <td>{{ $b->JumlahHal }}</td>
            <td>{{ $b->TahunTerbit }}</td>
            <td>{{ $b->ISBN }}</td>
            <td>{{ $b->Penulis }}</td>
            <td>{{ $b->IDPenerbit }}</td>
            <td>{{ $b->LokasiRak }}</td>
        </tr>
        @endforeach
    </table>
