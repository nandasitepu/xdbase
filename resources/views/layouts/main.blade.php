<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
  @yield('navtop')
  <body>
    <!-- CONTENT -->
    @yield('content')
    <!-- JS-->
    @include('layouts._scripts')
  </body>
  @yield('navbot')
  @include('layouts._foot')
</html>
