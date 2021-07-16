<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
  <!--    <link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="{{asset('libs/simplesidebar/simplesidebar.css')}}">
  <link rel="stylesheet" href="{{asset('css/link.css')}}">
  <link rel="stylesheet" href="{{asset('css/intrastyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/imagehover.css')}}">
  <link rel="stylesheet" href="{{asset('css/imageside.css')}}">
  <link rel="stylesheet" href="{{asset('css/imageon.css')}}">
  <link rel="stylesheet" href="{{asset('css/imagecircle.css')}}">
  <link rel="stylesheet" href="{{asset('css/imagecircle.css')}}">
  <link rel="stylesheet" href="{{asset('css/imageletteron.css')}}">
  <link rel="stylesheet" href="{{asset('css/imagegrid.css')}}">




  <title>Intranet CCD</title>
  </head>
  <body>

    @yield('content')

    <footer class="page-footer bg-dark text-white p-3">
        <div>
            <span>Centro para la Competitividad y el Desarrollo</span>
        </div>
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>

<script src="{{asset('libs/simplesidebar/simplesidebar.js')}}"></script>
<script src="{{asset('js/imagehover.js')}}"></script>


<script>
    $(document).ready(function () {
        $("#my-sidebar-context").simpleSidebar();
    });
</script>
</body>
</html>
