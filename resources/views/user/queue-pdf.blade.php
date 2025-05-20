<!DOCTYPE html>
<html>

<head>
    <title>Bukti Antrian Peminjaman Buku</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 40px;
            color: black;
            font-family: "Ancizar Serif", serif;
        }

        img {
            width: 80px;
            height: 80px;
        }

        .section-2 {
            text-align: center;
        }

        .section-2 h2 {
            margin-bottom: 5px;
        }

        .content {
            margin-top: 30px;
            line-height: 1.6;
        }

        .content p {
            font-size: 16px;
            margin: 6px 0;
        }

        .note {
            margin-top: 40px;
            font-size: 14px;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
        }
    </style>
</head>

<body>
    <section class="section-1">
        <table width="100%" style="border-bottom: 2px solid #0a68cc; color: #0a68cc;">
            <tr>
                <td style="width: 10%; text-align: left;">
                    <img src="{{ public_path('assets/images/logo-sasmita.jpg') }}" alt="Logo Sasmita Jaya" width="140" height="140">
                </td>
                <td style="text-align: center;">
                    <h3>YAYASAN SASMITA JAYA</h3>
                    <h1 style="margin: -20px 0; font-size: 30px;">UNIVERSITAS PAMULANG</h1>
                    <h3>KAMPUS SERANG</h3>
                    <p style="margin-top: -15px; font-size: 12px; font-weight: 500;">
                        Jl. Raya Serang-Jakarta, Kalodran, Walantaka, Serang, Banten Telp/Hp.0821 2422 5399
                    </p>
                </td>
                <td style="width: 10%; text-align: right;">
                    <img src="{{ public_path('assets/images/logo-unpam.jpg') }}" alt="Logo UNPAM Jaya" width="140" height="140">
                </td>
            </tr>
        </table>
    </section>    
 
    <section class="section-2">
        <h2>Bukti Antrian Peminjaman Buku</h2>
        <div class="queue-number"><strong>No. Antrian:</strong> {{ $queue->queue_number }}</div>
    </section>

    <div class="content">
        <p><strong>Nama Peminjam:</strong> {{ $queue->user->name }}</p>
        <p><strong>Judul Buku:</strong> {{ $queue->book->title }}</p>
        <p><strong>Tanggal Pinjam:</strong> {{ \Carbon\Carbon::parse($queue->loan_date)->format('d M Y') }}</p>
        <p><strong>Tanggal Kembali:</strong> {{ \Carbon\Carbon::parse($queue->return_date)->format('d M Y') }}</p>
        <p><strong>Status:</strong> {{ ucfirst($queue->status) }}</p>
    </div>

    <div class="note">
        <p><strong>Catatan:</strong></p>
        <ul style="margin: 0; padding-left: 20px;">
            <li>Denda keterlambatan sebesar <strong>Rp. 10.000</strong> per hari per buku.</li>
            <li>Buku dapat diambil di <strong>Gedung Perpustakaan Lt. 2, Kampus SIFEST</strong>.</li>
        </ul>
    </div>
</body>

</html>


