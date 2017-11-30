<?php

namespace App\Http\Controllers\Wocao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\Picture;
use Illuminate\Support\Facades\Storage;

class ZcfgController extends Controller
{
    public function index(){
        //分页10篇文章一
        $data = Article::where('a_type','政策法规')->orderBy('created_at','desc')->paginate(10);
        return view('wocao.zcfg')->with(compact('data'));
    }
    //
    public function show($a_id){
        //通过文章id获取图片
        $data = Article::where('a_id',$a_id)->first();
        //得到图片
        $pictures = Picture::all()->where('a_id',$a_id);
        // dd($pictures);
        $allPath = [];
        foreach($pictures as $picture){
            $url = $picture->p_path;
//        $url = Storage::url($path);
            $allPath[] = $url;
        }
        // dd($allPath);
        // dd($pictures);
        //把这个图片绑定发送到新页面
        // dd($data);
        return view('wocao.article')->with(compact('data','allPath'));
    }
}
