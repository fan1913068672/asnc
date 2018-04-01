<?php

namespace App\Http\Controllers\Wocao\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class DeleteArticleController extends Controller
{
    public function index(){
        $data = Article::where('a_type','中心简介')->orderBy('created_at','desc')->paginate(10);
        return view('wocao.delete_article')->with(compact(['data']));
    }
    public function post(){
        $input = Input::all();
        $data = Article::where('a_type',$input['a_type'])->orderBy('created_at','desc')->paginate(10);
        return view('wocao.delete_article')->with(compact(['flag','data']));
    }
    public function delete($a_id){
        DB::delete('delete from asnc_article where a_id = ?',[$a_id]);
        $flag = false;
        return view('wocao.delete_article')->with(compact('flag'));
    }
}
