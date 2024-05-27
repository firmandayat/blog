<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Mail\BlogPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Post;
=======
use Illuminate\Http\Request;
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
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
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        
        $posts = Post::active()->get(); //menampilkan blog aktif boolean
        $posts = Post::active()->paginate(4); // menampilkan limit data
        // dd($posts);
=======
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        // dd ($posts);
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
        $data = [
            'posts' => $posts
        ];
        return view('posts.index', $data);
<<<<<<< HEAD
        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);
        // dd ($posts);
=======
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('posts.create');
=======
        return view ('posts.create');
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        $title = $request->input('judul');
        $content = $request->input('konten');

        $post = Post::create([
            'title' => $title,
            'content' => $content
        ]);

        \Mail::to(Auth::user()->email)->send(new BlogPosted($post)); //notif mailtrap

        $this->notify_telegram($post); //notif tele

        return redirect("posts");
        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);

        // $new_post = [
        //     count($posts) +1,
        //     $title,
        //     $content,
        //     date('d-m-Y H:i:s')
        // ];
        // $new_post = implode(',', $new_post);
        // array_push($posts, $new_post); // memasukkan variabel new_post kedalam posts
        // $posts = implode("\n", $posts);
        // Storage::write("posts.txt", $posts); //menimpa file dengan yg baru
=======
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
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
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
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        $post = Post::where('id', $id)->first();
        $comments = $post->comments()->get();
        $totalcomments = $post->totalKomen();
        // dd($post);
        $data = [
            'post' => $post,
            'comments' => $comments,
            'totalKomen' => $totalcomments
        ];
        return view('posts.show', $data);
        // $posts = Storage::get('posts.txt'); //mengambil data di storage
        // $posts = explode("\n", $posts); //\n = setiap baris dipecah, explode = memisahkan sebuah string menjadi array berdasarkan delimiter tertentu
        // $selected_post = Array();
        // foreach ($posts as $post) {
        //     $post = explode(",", $post); 
        //     if ($post[0] == $id) { // jika id yg direquest
        //         $selected_post = $post; //memasukkan post ke selected post
        //     }
        // }
=======
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
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        $post = Post::where('id', $id)->first();
        // dd($post);
        $data = [
            'post' => $post
        ];
        return view('posts.edit', $data);
=======
        //
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
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
<<<<<<< HEAD
        if (!Auth::check()) {
            return redirect('login');
        }

        $title = $request->input('judul');
        $content = $request->input('konten');

        Post::where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        return redirect("posts/$id");
=======
        //
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        Post::where('id', $id)
            ->delete();
        return redirect('posts');
    }

    private function notify_telegram($post)
    {
        $api_token = "7346534667:AAFYJSRsn1yWHeHL9SCqezmJgzHCMX_lfuM";
        $url = "https://api.telegram.org/bot{$api_token}/sendMessage";
        $chat_id = -4236304591;
        $content = "Ada postingan baru niih dengan judul:<strong>\"{$post->title}\"</strong>";

        $data = [
            'chat_id' => $chat_id,
            'text' => $content,
            'parse_mode' => "HTML"
        ];

        Http::post($url, $data);
=======
        //
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
    }
}
