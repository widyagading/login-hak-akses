@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Data Pembelian</h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <a href="{{ route('pembelian.create') }}" class="btn btn-sm btn-primary">Tambah Pembelian</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Kd_barang</th>
                <th>Jumlah</th>
                <th>total_harga</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 2; @endphp
            @foreach($data as $datas)
                <tr>
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kd_barang }}</td>
                    <td>{{ $datas->jumlah }}</td>
                    <td>{{ $datas->total_harga }}</td>
                    <td>

                      <?php if (Session::get('hak_akses')=="admin") { ?>
                        <form action="{{ route('pembelian.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('pembelian.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form><?php } ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
