<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body class="goto-here">
    <div class="">
      <header>
      @include('includes.header')
      </header>
      <div>
        @yield('content')
      </div>
      <footer>
      <!-- @include('includes.footer') -->
      </footer>
    </div>
  </body>
</html>