<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index() {
        $posts = DB::select('select * from posts');
        // return view('post.index', ['posts' => $posts]);
        return response()->json(['posts' => $posts]);
    }

    function create() {
        return view('post.create');
    }

    function store(Request $request) {
        DB::insert('insert into posts(title, content, created_at, updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);
        return redirect()->route('post.index');
    }

    function delete(Request $request) {
        DB::delete('delete from posts where id = ?', [
            $request->id
        ]);
        return back();
    }
}
