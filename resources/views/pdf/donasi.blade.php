<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .transaction-receipt {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            }

            .header span {
            font-size: 18px;
            font-weight: bold;
            color: #337ab7;
            }

            .transaction-info {
            margin-bottom: 20px;
            }

            .transaction-info h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .payment-info {
            margin-bottom: 20px;
            }

            .payment-info h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .total-bayar {
            margin-bottom: 20px;
            }

            .total-bayar h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .saldo-dana {
            margin-bottom: 20px;
            }

            .saldo-dana h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .detail-penerima {
            margin-bottom: 20px;
            }

            .detail-penerima h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .detail-transaksi {
            margin-bottom: 20px;
            }

            .detail-transaksi h2 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            color: #337ab7;
            }

            .chat-diana {
            margin-bottom: 20px;
            }

            .chat-diana p {
            font-size: 16px;
            color: #337ab7;
            text-decoration: underline;
            cursor: pointer;
            }

            .bub-dana {
            margin-bottom: 20px;
            }

            .bub-dana p {
            font-size: 16px;
            color: #337ab7;
            text-decoration: underline;
            cursor: pointer;
            }

            .dana-blue {
            color: #337ab7;
            }

            .dana-green {
            color: #5cb85c;
            }

            .dana-red {
            color: #d9534f;
            }

            .dana-orange {
            color: #f0ad4e;
            }

            .dana-grey {
            color: #999;
            }

            .dana-black {
            color: #333;
            }

            .dana-white {
            color: #fff;
            }
    </style>
</head>
<body>
    <div class="transaction-receipt">
        <div class="header">
          {{-- <span>Tanggal</span> --}}
          {{-- <span>4.48</span> --}}
        </div>
        <div class="transaction-info">
          <h2>Transaksi</h2>
          <p>{{$donasi->tanggal}}</p>
          <p>Transaksi berhasil!</p>
        </div>
        <div class="total-bayar">
          <h2>Total Donasi</h2>
          <p>Rp. {{number_format($donasi->nominal, 0)}}</p>
        </div>
        <div class="saldo-dana">
          {{-- <h2>Saldo DANA</h2> --}}
          <!-- saldo dana value here -->
        </div>
        <div class="detail-penerima">
          <h2>Detail Pengirim</h2>
          <p>Nama: {{$donatur->nama}}</p>
          <p>Alamat: {{$donatur->alamat}}</p>
          <p>HP: {{$donatur->hp}}</p>
          <p>email: {{$donatur->email}}</p>
        </div>
        <div class="detail-penerima">
            <h2>Detail Penerima</h2>
            <p>Nama: Panti Asuhan Aisyiyah</p>
            <p>Alamat: {{$konfig->alamat}}</p>
            <p>email: {{$konfig->email}}</p>
          </div>
        <div class="chat-diana">
          {{-- <p>CHAT DIANA UNTUK BANTUAN</p> --}}
        </div>
        <div class="bub-dana">
          {{-- <p>BUB DANA DANA DANA</p> --}}
        </div>
      </div>
</body>
</html>