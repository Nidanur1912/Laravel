@extends('adminlte::page')
@section('title', 'Detail Pembelian')
@section('content_header')
    <h1 class="m-0 text-dark">Detail Pembelian</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('detail_pembelian.create') }}" class="btn btn-success mb-2">Tambah</a>
                    <a href="/exportpdf3" class="btn btn-warning mb-2">Export PDF</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Pembelian</th>
                                <th>Tanggal Kadarluarsa</th>
                                <th>Harga Beli</th>
                                <th>Jumlah Beli</th>
                                <th>Sub Total Beli</th>
                                <th>Persen Margin Jual</th>
                                <th>ID Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_pembelian as $key => $detail_pembelian)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $detail_pembelian->id_pembelian }}</td>
                                    <td>{{ $detail_pembelian->tgl_kadarluarsa }}</td>
                                    <td>{{ $detail_pembelian->harga_beli }}</td>
                                    <td>{{ $detail_pembelian->jumlah_beli }}</td>
                                    <td>{{ $detail_pembelian->sub_total_beli }}</td>
                                    <td>{{ $detail_pembelian->persen_margin_jual }}</td>
                                    <td>{{ $detail_pembelian->id_obat }}</td>
                                    <td>
                                        <a href="{{ route('detail_pembelian.edit', $detail_pembelian) }}"
                                            class="btn btn-primary btn-xs"> Edit</a>
                                        <a href="{{ route('detail_pembelian.destroy', $detail_pembelian) }}"
                                            onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                            Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
