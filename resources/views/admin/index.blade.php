<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <body>
        @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

        @include('admin.body')
    <!-- JavaScript files-->
        @include('admin.javascript')
  </body>
</html>
