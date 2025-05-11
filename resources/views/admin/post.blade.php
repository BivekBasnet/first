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
        <div class="page-content">
            <p style="text-align: center;color:white;font-size:60px">Add Post</p>
            <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class="center">
                    <label>Post Title</label>
                    <input type="text" name="title" placeholder="Write a title" required="">
                </div>
                <div class="center">
                    <label>Description</label>
                    <textarea name="description" placeholder="Write a description" required=""></textarea>
                </div>
                <div class="center">
                    <label>Image</label>
                    <input type="file" name="image" required="">
                </div>
                <div class="center">
                    <button class="btn">Submit</button>
                </div>
            </form>
    <!-- JavaScript files-->

        @include('admin.javascript')
  </body>
</html>
