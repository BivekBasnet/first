<!DOCTYPE html>
<html>
  <head>
    <base href="\public">
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
        <p style="text-align: center;color:white;font-size:60px">Edit</p>
        <form action="{{ url('update_post', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="center">
                <label>Post Title</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="center">
                <label>Description</label>
                <textarea name="description">{{ $post->description}}</textarea>
            </div>
            <div class="center">
                <label>Old Image</label>
                <img style="height: 150px; width: 100px; margin: auto;" src="/postimage/{{ $post->image }}">
            </div>
            <div class="center">
                <label>Update a file</label>
                <input type="file" name="image">
            </div>
            <div class="center">
                <button class="btn">Submit</button>
            </div>
        </form>

      </div>
    <!-- JavaScript files-->
        @include('admin.javascript')
  </body>
</html>
