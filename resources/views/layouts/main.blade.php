<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
  <header>
    <!-- NAVTOP -->
    @yield('navtop')
  </header>

  <!-- BODY-->
  <body>
    <!-- CONTENT -->
    @yield('content')
    <!-- JS-->
    @include('layouts._scripts')
  </body>

  <footer>
    <!-- NAVBOT -->
    @yield('navbot')
    <!-- Footer -->
    @include('layouts._foot')
  </footer>

</html>
