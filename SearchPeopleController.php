<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;


class SearchPeopleController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view("search_people", [
            "username" =>$user->username,
            "photo" => $user->photo
        ]);
    }

    public function do_search(Request $request){
        $user=Auth::user();
        $request->validate([
          "search_people" => "required|string"
        ]);

        $username = $request->search_people;
        $result=User::where('username', 'like', $username.'%')->get();
        return $result;
    }


    public function follow_people(Request $request){
        $user = Auth::user();
        $user->followed()->attach($request->followed);

    }

    public function unfollow_people(Request $request){
        $user = Auth::user();
        $user->followed()->detach($request->unfollow);

    }
}
