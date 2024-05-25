<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        // dd ($posts);
        $data = [
            'posts' => $posts
        ];
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('judul');
        $content = $request->input('konten');

        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);

        $new_post = [
            count($posts) +1,
            $title,
            $content,
            date('d-m-Y H:i:s')
        ];
        $new_post = implode(',', $new_post);
        array_push($posts, $new_post); // memasukkan variabel new_post kedalam posts
        $posts = implode("\n", $posts);
        Storage::write("posts.txt", $posts); //menimpa file dengan yg baru
        return redirect("posts");
        // dd($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Storage::get('posts.txt'); //mengambil data di storage
        $posts = explode("\n", $posts); //\n = setiap baris dipecah, explode = memisahkan sebuah string menjadi array berdasarkan delimiter tertentu
        $selected_post = Array();
        foreach ($posts as $post) {
            $post = explode(",", $post); 
            if ($post[0] == $id) { // jika id yg direquest
                $selected_post = $post; //memasukkan post ke selected post
            }
        }

        $data = [
            'post' => $selected_post
        ];
        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
