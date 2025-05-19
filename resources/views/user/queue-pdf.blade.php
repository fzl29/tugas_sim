<!DOCTYPE html>
<html>
<head>
    <title>Bukti Antrian Peminjaman Buku</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; }
        .content { margin-top: 30px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Bukti Antrian Peminjaman Buku</h2>
        <strong>No Antrian: {{ $queue->queue_number }}</strong>
    </div>
    <div class="content">
        <p><strong>Nama:</strong> {{ $queue->user->name }}</p>
        <p><strong>Buku:</strong> {{ $queue->book->title }}</p>
        <p><strong>Tanggal Pinjam:</strong> {{ \Carbon\Carbon::parse($queue->loan_date)->format('d M Y') }}</p>
        <p><strong>Tanggal Kembali:</strong> {{ \Carbon\Carbon::parse($queue->return_date)->format('d M Y') }}</p>
        <p><strong>Status:</strong> {{ ucfirst($queue->status) }}</p>
    </div>
</body>
</html>