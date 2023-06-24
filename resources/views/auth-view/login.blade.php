<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <title>Halaman Login</title>

  <style>
    *{
      font-family: 'Plus Jakarta Sans', sans-serif !important;
    }
    body{
      min-height: 38.4rem;
    }
    .card{
      border: 1px solid rgba(46, 45, 45, 0.137) !important;
      box-shadow: 3px 3px 7px rgba(68, 68, 68, 0.151);
    }
  </style>
</head>

<body class="d-flex justify-content-center align-items-center">
<div class="col-lg-4 col-10">
  @if (Session::has('status-login-fail'))
  <div class="col-12">
    <div class="alert alert-danger text-center" role="alert">
      {{ Session::get('message-login-fail') }}
    </div>
  </div>
  @endif
  <div class="card">
    <div class="card-body p-4">
      <h3 class="text-center mb-4">Login Account</h3>
      <form action="" method="POST" autocomplete="off">
        @csrf
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Masukkan alamat email" name="email" required>
        </div>
        <div class="mb-4">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Masukkan password" name="password" required>
        </div>
        <button class="btn btn-primary w-100 mb-2" type="submit">Login</button>
      </form>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>