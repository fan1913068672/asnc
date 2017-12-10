<?php

namespace App\Http\Controllers\Wocao\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Article;
use App\Http\Model\ArticlePicture;
use Illuminate\Support\Facades\Storage;

class SwbController extends Controller
{
    public function index(){
        //分页10篇文章一
        $data = Article::where('a_type','舍务部')->orderBy('created_at','desc')->paginate(10);
        return view('wocao.swb')->with(compact('data'));
    }
    //
    public function show($a_id){
        //通过文章id获取图片
        $data = Article::where('a_id',$a_id)->first();
        //得到图片
        $pictures = ArticlePicture::all()->where('a_id',$a_id);
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
