<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
    " rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row">  
    
      @include('menu')
      <main class="col-md-9 ms-sm-auto col-lg-10 ">
      {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 "> --}}

        <div class="border border-warning" style="border-radius:15px 1px 1px 15px">
      @include('menu1')

      <h1 class="text-center text-primary">    @yield('titre')</h1>
          
      <br>
      @yield('main')
    </div>
    </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>