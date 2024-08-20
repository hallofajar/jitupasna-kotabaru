<!DOCTYPE html>
<html>

<head>
  <title>JITUPASNA KAB Kotabaru</title>
  <meta name="theme-color" content="#ffffff">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/favicon.ico') }}" />

  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

  <style>
    .w3layouts-main {
      background-image: url("{{ asset('assets/leadingpage/img/bg.jpeg') }}");
    }
  </style>

  <!-- Custom Theme files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link href="{{ asset('assets/leadingpage') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- //Custom Theme files -->

  <!-- web font -->
  <link href='//fonts.googleapis.com/css?family=Hind:300,400,500,600,700' rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato|Roboto:400,900' rel='stylesheet' type='text/css'>
  <!-- //web font -->
</head>

<body>

  <!-- main -->
  <div class="w3layouts-main">
    <div class="bg-layer">
      <h1>pengkajian kebutuhan bencanan kabupaten kotabaru</h1>
      <div class="header-main" id="test">
        <!-- <div class="main-icon">
          <img src="{{ asset('assets/leadingpage/img/sinaugis.png') }}" alt="" width="100" srcset="">
        </div> -->

        <div class="row">
          <div class="col">
            <div class="button header-left-bottom">
              <button onclick="location.href='#'" class="btn btn btn-ones"><br>
                <img class="mt-2"
                  src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Lambang_Kabupaten_Kotabaru.png"
                  alt="" height="200" width="150" srcset="">
              </button>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="button header-left-bottom">
            <button onclick="location.href='{{ route('dashboard') }}'"
              class="btn btn btn-one mt-2"><strong>LOGIN</strong></button>
          </div>
        </div>
      </div>
      <div class="mt-4 text-center text-light">
        <h6>Tahun 2024</h6>
      </div>
    </div>

  </div>
  </div>
  <!-- //main -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>
