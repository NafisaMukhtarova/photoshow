<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF8">
      <title>Photoshow</title>
    
    <link rel="icon" type="image" href="https://www.favicon.by/ico/610d886d65628.ico ">
    
  <!-- CSS -->
<!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

  </head>


<body>
  <div class="row">
  @include('inc.topbar')
  @include('inc.messages')
    @yield('content')
  <div>


</body>
</html>