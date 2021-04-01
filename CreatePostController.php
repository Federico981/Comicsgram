<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class CreatePostController extends Controller
{
    public function index(){
        return view("create_post");
    }

    public function do_searchpost(Request $request){
        /* $request->validate([
         "campo" => "required|string"
         ]); */

         if($request->api==="opzione1"){
           $key= env("FUMETTI_KEY");
           $data = urlencode($request->campo);
           $curl = curl_init();
           curl_setopt($curl, CURLOPT_URL, "https://comicvine.gamespot.com/api/search/?api_key=".$key."&format=json&query='.$data.'&resources=issue&sort=name:asc&limit=50");

           curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

           $result = curl_exec($curl);
           $result = json_decode($result,true);
           curl_close($curl);
           return response()->json($result);
      }elseif($request->api==="opzione2"){
           $data = urlencode($request->campo);
           $curl = curl_init();
           curl_setopt($curl, CURLOPT_URL, "http://openlibrary.org/search.json?author=" .$data);
           curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
           $result = curl_exec($curl);
           $result = json_decode($result,true);
           curl_close($curl);
           return response()->json($result);
     }
   }
   public function do_createpost(Request $request){
     $user = Auth::user()->id;
     $text = $request->campo2;
     $hidden_url = $request->nascosto;
     $hidden_type = $request->nascosto2;
     $current_date = date("Y-m-d H:i:s");
         $query = Post::create([
             'username_id' => $user,
             'data' => $current_date,
             'text' => $text,
             'url' => $hidden_url,
             'tipe' => $hidden_type,
             'num_like' => 0
         ]);

         if($query)
             return true;
         else
             return false;
    }
}
