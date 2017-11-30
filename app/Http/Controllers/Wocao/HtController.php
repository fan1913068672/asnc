<?php

namespace App\Http\Controllers\Wocao;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Input;
class HtController extends Controller
{
    //
    public function get(){
        return view('wocao.ht');
    }
    public function post(){
        $input = Input::all();
        $a_type=$input['a_type'];
        $a_title=$input['a_title'];
        $a_context = $input['a_context'];
        $article = new Article;

        $article->a_type = $a_type;
        $article->a_title = $a_title;
        $article->a_context = $a_context;
        $article->save();
        $article = Article::all()->where('a_type',$a_type)
            ->where('a_title',$a_title)
            ->where('a_context',$a_context)
            ->first();
        $a_id = $article->a_id;
        return redirect('pc')->with('a_id',$a_id);
    }
}
