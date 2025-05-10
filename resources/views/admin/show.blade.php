<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
        .title_deg{
            font-size: 30px;
            font-weight: bold;
            color:white;
            padding: 30px;
            text-align: center;
        }
        .table_deg{
            border: 1px solid black;
            width: 90%;
            text-align: center;
            margin-left: 60px;
        }
        .th_des{
            background-color: rgb(186, 196, 100);
            color: white;
        }
        .img_des{
            height: 100px;
            width: 150px;
            padding: 10px;
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
    <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif
        <h1 class="title_deg">All Post</h1>

        <table class="table_deg">
            <tr class="th_des">
                <th>Post title</th>
                <th>Description</th>
                <th>Name</th>
                <th>Image</th>
                <th>User Type</th>
                <th>Post Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($post as $post )
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{$post->description }}</td>
                    <td>{{ $post->name }}</td>
                    <td><img class="img_des" src="postimage/{{ $post->image}}"></td>
                    <td>{{ $post->usertype }}</td>
                    <td>{{ $post->post_status }}</td>
                    <td> <a href="{{ url('edit' , $post->id) }}" class="btn btn-success">Edit</a> </td>
                    <td><a href="{{ url('delete_post',$post->id) }}" class="btn btn-danger" onclick="return confirm('Are You sure to Delete This?')">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>
  </body>
</html>
