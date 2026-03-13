<h1>Katalog Produk</h1>

<ul>
@foreach($produk as $p)
<li>{{ $p['nama'] }} - Rp {{ $p['harga'] }}</li>
@endforeach
</ul>