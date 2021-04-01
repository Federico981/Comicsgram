<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Collection;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function update_home()
    {
        $user1=Auth::user()->id;
        $res=DB::select("SELECT post.id, post.url, post.text,post.username_id, post.data, post.num_like, users.username from post join users on post.username_id=users.id where post.username_id = '".$user1."' or post.username_id in (select followed_id from follows where follower_id = '".$user1."') order by data DESC");
        
        
        $myRows = new Collection();
        foreach($res as $r){
            $res1=DB::select("SELECT * from likes where idpost_id= '".$r->id."' and userlike_id ='".$user1."'");
            $array = [
                "id" => $r->id,
                "data" => $r->data,
                "text" => $r->text,
                "username" => $r->username,
                "url" => $r->url,

                "like_view" => (empty($res1)) ? 0 : 1
            ];
            

            $myRows->push($array);

        } 
        
        
         return response()->json($myRows);

        
            
    }

    public function miPiace()
    {
        $user1=Auth::user()->id;
        $res=DB::select("SELECT idpost_id from likes where userlike_id = '".$user1."'");
        return response()->json($res);
    }

    public function add_like(Request $request)
    {
        $user1=Auth::user()->id;
        $id_post=$request->idpost_id;
        $query= Like::create([
                'userlike_id' => $user1,
                'idpost_id' => $id_post,
        ]);
        return 1;
    }

    public function remove_like(Request $request)
    {
        $user=Auth::user()->id;
        $id_post=$request->id_post;
        DB::select("DELETE from likes where  userlike_id like '".$user."' and idpost_id ='".$id_post."'");
    }

    public function show_like(Request $request)
    {
        $id_post=$request->id_post;
        $res=DB::select("SELECT users.username, users.photo from likes join users on likes.userlike_id = users.id where likes.idpost_id = $id_post");
        return response()->json($res);
    }
}




