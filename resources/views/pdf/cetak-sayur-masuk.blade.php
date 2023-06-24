<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Laporan Sayur Masuk</title>
  <style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
      *{
        font-family: 'Plus Jakarta Sans', sans-serif !important;
      }
    </style>
  </style>
</head>
<body>
  <div class="container">
    <h3 style=" font-family: 'Plus Jakarta Sans', sans-serif; text-align: center;">Laporan Sayur Masuk</h3>
    <h5 style=" font-family: 'Plus Jakarta Sans', sans-serif; text-align: left; margin-bottom: -13px;">Tanggal: {{ now()->setTimezone('Asia/Jakarta')->format('d/m/Y') }}</h5>
    <h5 class="mb-4" style=" font-family: 'Plus Jakarta Sans', sans-serif; text-align: left;">Waktu: {{ now()->setTimezone('Asia/Jakarta')->format('H:i:s') }} WIB</h5>
    <div class="table-responsive">
      <table style="border-collapse: collapse; width: 100%;">
        <tr>
            <th style="border: 1px solid #000; padding: 8px; text-align: left">No</th>
            <th style="border: 1px solid #000; padding: 8px; text-align: left">Nama sayur</th>
            <th style="border: 1px solid #000; padding: 8px; text-align: left">Jumlah sayur masuk</th>
            <th style="border: 1px solid #000; padding: 8px; text-align: left">Supplier</th>
            <th style="border: 1px solid #000; padding: 8px; text-align: left">Tanggal Masuk</th>
        </tr>
        @foreach ($sayurMasuk as $item)
        <tr>
            <td style="border: 1px solid #000; padding: 8px; text-align: left">{{ $loop->iteration }}</td>
            <td style="border: 1px solid #000; padding: 8px; text-align: left">{{ $item->sayur->nama_sayur }}</td>
            <td style="border: 1px solid #000; padding: 8px; text-align: left">{{ $item->jumlah }}</td>
            <td style="border: 1px solid #000; padding: 8px; text-align: left">{{ $item->supplier->nama_supplier }}</td>
            <td style="border: 1px solid #000; padding: 8px; text-align: left">{{ $item->tanggal_masuk->setTimezone('Asia/Jakarta')->format('d/m/Y') }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>