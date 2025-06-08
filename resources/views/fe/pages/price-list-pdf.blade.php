<!DOCTYPE html>
<html>
<head>
    <title>Price List - Jambi Business Center</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .text-right {
            text-align: right;
        }
        .status-sold {
            color: #ff3b55;
        }
        .status-available {
            color: #32a852;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .terms {
            margin-top: 20px;
        }
        .terms ol {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Price List</h2>
        <h3>Jambi Business Center</h3>
    </div>

    <table>
        <thead>
            <tr>
                <th rowspan="2">Status</th>
                <th colspan="2" rowspan="2">Nomor Ruko</th>
                <th colspan="3">Ukuran Tanah</th>
                <th colspan="2">Bangunan</th>
                <th rowspan="2">Harga Jual<br>Exc. PPN</th>
                <th rowspan="2">PPN 11%</th>
                <th rowspan="2">Harga Jual<br>Inc. PPN</th>
            </tr>
            <tr>
                <th>Lebar (m)</th>
                <th>Panjang (m)</th>
                <th>Luas (m²)</th>
                <th>Type</th>
                <th>Luas (m²)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProduk as $item)
                <tr>
                    <td class="{{ $item->status == '1' ? 'status-sold' : 'status-available' }}">
                        {{ $item->status == '1' ? 'Terjual' : 'Tersedia' }}
                    </td>
                    <td>{{ $item->kode_ruko }}</td>
                    <td>{{ $item->no_ruko }}</td>
                    <td>{{ $item->l_tanah }}</td>
                    <td>{{ $item->p_tanah }}</td>
                    <td>{{ $item->luas_tanah }}</td>
                    <td>{{ $item->type_bangunan }}</td>
                    <td>{{ $item->l_bangunan }}</td>
                    <td class="text-right">{{ number_format($item->h_jual_exc_ppn, 0, ',', '.') }}</td>
                    <td class="text-right">{{ number_format($item->ppn, 0, ',', '.') }}</td>
                    <td class="text-right">{{ number_format($item->h_jual_inc_ppn, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="terms">
        <strong>KETENTUAN:</strong>
        <ol>
            <li>Harga dan PPN bisa berubah sewaktu-waktu</li>
            <li>Harga Jual sudah termasuk listrik 2200 watt dan PDAM</li>
            <li>Harga Jual belum termasuk Harga Kelebihan Tanah (jika ada), Biaya AJB, Biaya Balik Nama, BPHTB, Biaya KPR dan Biaya-biaya lain yang timbul akibat aturan baru pemerintah</li>
            <li>Harga Kelebihan Tanah adalah Rp.5.000.000,-/m² untuk selisih luas tanah >3% (belum termasuk PPN)</li>
            <li>Booking Fee sebesar Rp.25.000.000,- tidak dapat dikembalikan</li>
            <li>Jika dalam 14 hari sejak pembayaran Booking Fee tidak membayarkan Angsuran Uang Muka, maka pembelian dianggap batal dan Booking Fee hangus.</li>
            <li>KPR bukan tanggung jawab developer</li>
        </ol>
    </div>
</body>
</html>