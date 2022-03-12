
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/template/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/template/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- CALL NAV -->
    @include('layout.nav')

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

       <!-- CALL HEADER -->
       @include('layout.header')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </div>

          <!-- CONTENT -->
          @yield('content')

        </div>
        <!---Container Fluid-->
      </div>

      <!-- CALL FOOTER -->
      @include('layout.footer')
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="/template/vendor/jquery/jquery.min.js"></script>
  <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/template/js/ruang-admin.min.js"></script>
  <script src="/template/vendor/chart.js/Chart.min.js"></script>
  <script src="/template/js/demo/chart-area-demo.js"></script>  
</body>

</html>