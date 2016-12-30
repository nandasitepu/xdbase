<!DOCTYPE html>
<html lang="en">
  @include('layouts._head')
  <body>
    <div class="container">
      @yield('content')
    </div>
  @include('layouts._scripts')
  </body>
  @include('layouts._foot')
</html>
