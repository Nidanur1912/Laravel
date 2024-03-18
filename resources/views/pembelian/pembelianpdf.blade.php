<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 6px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: left;
            background-color: #FF7C9F;
            color: white;
        }
    </style>
</head>

<body>
 
    <h1>Data Pembelian</h1>

    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Nomor Nota Pembelian</th>
            <th>Tanggal Pembelian</th>
            <th>Total Pembelian</th>
            <th>Nama Distributor</th>
            <th>Nama User</th>
        </tr>
        
        @php
            $no=1;
        @endphp
        @foreach ($pembelian as $pembelian)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $pembelian->nonota_beli }}</td>
            <td>{{ $pembelian->tgl_beli }}</td>
            <td>{{ $pembelian->total_beli }}</td>
            <td>{{ $pembelian->fdistributor->nama_distributor }}</td>
            <td>{{ $pembelian->fuser->name }}</td>
        </tr>
        @endforeach
        
    </table>

</body>

</html>
