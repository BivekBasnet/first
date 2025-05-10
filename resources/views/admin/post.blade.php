<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
        .center{
            text-align: center;
            padding: 30px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .btn{
            cursor: pointer;
            border: 1px solid black;
            background-color: white;
            color: black;
        }
    </style>
  </head>
  <body>
        @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
    <!-- JavaScript files-->
        @include('admin.javascript')
  </body>
</html>
