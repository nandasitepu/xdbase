<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
  <!-- NAVTOP -->
  @yield('navtop')

  <!-- BODY-->
  <body>
    <!-- CONTENT -->
    @yield('content')
    <!-- JS-->
    @include('layouts._scripts')
  </body>

  <!-- NAVBOT -->
  @yield('navbot')
  <!-- Footer -->
  @include('layouts._foot')
</html>
