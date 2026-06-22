<!DOCTYPE html>
<html>

<head>
    <title>Laporan Rekapitulasi Perpustakaan Digital</title>
    <style>
        body {
            margin: 30px;
            color: black;
            font-family: "Times New Roman", Times, serif;
            font-size: 14px;
        }

        .header-table {
            width: 100%;
            border-bottom: 3px double #0a68cc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .logo-img {
            width: 70px;
            height: 70px;
        }

        .header-text {
            text-align: center;
        }

        .header-text h3 {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
            color: #0a68cc;
        }

        .header-text h1 {
            margin: 5px 0;
            font-size: 22px;
            font-weight: bold;
            color: #0a68cc;
        }

        .header-text p {
            margin: 0;
            font-size: 10px;
            color: #555;
        }

        .title {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 25px;
        }

        .title h2 {
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: underline;
        }

        .title p {
            margin: 5px 0 0 0;
            font-size: 12px;
            font-style: italic;
        }

        /* Statistics Grid */
        .stats-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .stats-table td {
            width: 25%;
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .stats-val {
            font-size: 24px;
            font-weight: bold;
            color: #0a68cc;
            margin-bottom: 5px;
        }

        .stats-label {
            font-size: 11px;
            color: #555;
            text-transform: uppercase;
            font-weight: bold;
        }

        /* Monthly Loans Table */
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 40px;
        }

        .report-table th {
            background-color: #0a68cc;
            color: white;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            border: 1px solid #0a68cc;
        }

        .report-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .report-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Signature section */
        .signature-table {
            width: 100%;
            margin-top: 50px;
        }

        .signature-title {
            margin-bottom: 60px;
        }
    </style>
</head>

<body>
    <!-- Kop Surat -->
    <table class="header-table">
        <tr>
            <td style="width: 15%; text-align: left;">
                <img class="logo-img" src="{{ public_path('assets/images/logo-sasmita.jpg') }}" alt="Logo Sasmita Jaya">
            </td>
            <td class="header-text">
                <h3>YAYASAN SASMITA JAYA</h3>
                <h1>UNIVERSITAS PAMULANG</h1>
                <h3>KAMPUS SERANG</h3>
                <p>Jl. Raya Serang-Jakarta, Kalodran, Walantaka, Serang, Banten Telp/Hp.0821 2422 5399</p>
            </td>
            <td style="width: 15%; text-align: right;">
                <img class="logo-img" src="{{ public_path('assets/images/logo-unpam.jpg') }}" alt="Logo UNPAM Jaya">
            </td>
        </tr>
    </table>

    <!-- Judul Laporan -->
    <div class="title">
        <h2>Laporan Rekapitulasi Perpustakaan</h2>
        <p>Tanggal Cetak: {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i') }} WIB</p>
    </div>

    <!-- Ringkasan Statistik -->
    <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px; margin-bottom: 10px;">I. Ringkasan Statistik</h3>
    <table class="stats-table">
        <tr>
            <td>
                <div class="stats-val">{{ $userCount }}</div>
                <div class="stats-label">Total Anggota</div>
            </td>
            <td>
                <div class="stats-val">{{ $bookCount }}</div>
                <div class="stats-label">Total Judul Buku</div>
            </td>
            <td>
                <div class="stats-val">{{ $approvedLoans }}</div>
                <div class="stats-label">Buku Dipinjam</div>
            </td>
            <td>
                <div class="stats-val">{{ $pendingLoans }}</div>
                <div class="stats-label">Antrean Booking</div>
            </td>
        </tr>
    </table>

    <!-- Laporan Transaksi Bulanan -->
    <h3 style="border-bottom: 1px solid #ddd; padding-bottom: 5px; margin-bottom: 10px;">II. Statistik Transaksi Bulanan</h3>
    <table class="report-table">
        <thead>
            <tr>
                <th style="width: 15%;">No.</th>
                <th>Bulan & Tahun</th>
                <th style="width: 35%;">Jumlah Transaksi Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            @forelse($loansPerMonth as $index => $loan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($loan->month . '-01')->translatedFormat('F Y') }}</td>
                    <td><strong>{{ $loan->total }}</strong> kali transaksi</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak ada data transaksi peminjaman aktif saat ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Tanda Tangan -->
    <table class="signature-table">
        <tr>
            <td style="width: 60%;"></td>
            <td style="text-align: center; width: 40%;">
                <p>Serang, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                <p class="signature-title">Mengetahui,<br><strong>Petugas Perpustakaan</strong></p>
                <br><br><br>
                <p>_______________________</p>
                <p>NIP/NIDN. Staf Perpustakaan</p>
            </td>
        </tr>
    </table>
</body>

</html>
