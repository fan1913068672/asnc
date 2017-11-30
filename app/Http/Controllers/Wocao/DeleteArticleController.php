<?php

namespace App\Http\Controllers\Wocao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Picture;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class DeleteArticleController extends Controller
{
    public function index(){
        return view('wocao.delete_article');
    }
    public function post(){
        $input = Input::all();
        $flag = false;
        if($input==null){
            return view('wocao.delete_article')->with(compact('flag'));
        }
        else{
            $flag = true;
            $data = Article::where('a_type',$input['a_type'])->orderBy('created_at','desc')->paginate(10);
            return view('wocao.delete_article')->with(compact(['flag','data']));
        }
    }
    public function delete($a_id){
        DB::delete('delete from asnc_article where a_id = ?',[$a_id]);
        $flag = false;
        return view('wocao.delete_article')->with(compact('flag'));
    }
}
