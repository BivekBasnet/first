<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class admincontroller extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user')
            {
                return view('home.home');
            }
            elseif($usertype =='admin')
            {
                return view('admin.index');
            }
            else
            {
                return redirect->back();
            }
        }
    }

    public function postpage()
    {
        return view('admin.post');
    }

    public function post_page(Request $request)
    {
        $user=Auth()->user();

        $user_id = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $post = new Post;

        $post->title = $request-> title;

        $post->description = $request-> description;

        $post->post_status = 'active';

        $post->user_id = $user_id;

        $post->usertype = $usertype;

        $post->name = $name;

        $image = $request->image;

        if($image)
        {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request -> image -> move('postimage', $imagename);

            $post-> image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message','Post Added Sucessfully');
    }

    public function show()
    {
        $post = Post::all();
        return view('admin.show',compact('post'));
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->with('message','Post Deleted Sucessfully');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.edit', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        $data = Post::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->file('image'); // Corrected from "imgae"

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('postimage', $imagename); // Cleaned syntax
            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message','Post Updated Sucessfully');
    }

}
