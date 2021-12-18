<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insurance;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {

        // $user = User::find(1);
        // // $user = User::where('id',  1)->first();

        // // $insurance = Insurance::where('user_id', $user->id)->first();

        // dd($user->insurance);

        $insurance = Insurance::find(2);

        dd($insurance->user);

        return 'dd';
    }

    public function one_to_many()
    {

        // $category = Category::find(1);

        // dd($category->posts);

        $post = Post::find(3);
        dd($post->category);

        // if($post->category) {
        //     dd($post->category);
        // }else {
        //     dd('Uncategorized');
        // }

        return 'aa';
    }

    public function posts()
    {
        return view('posts.index')->with('posts', Post::with('category')->get());
    }


    public function many_to_many()
    {

        $post = Post::find(1);

        $post->tags()->sync([1, 5]);

        // dd($post->tags);

        // attach // add the items to db
        // detach // remove item from db
        // sync // add or delete



        return 'ww';
    }
}
