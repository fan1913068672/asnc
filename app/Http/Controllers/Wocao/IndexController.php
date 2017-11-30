<?php

namespace App\Http\Controllers\Wocao;
use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Storage;
class IndexController extends Controller
{
    //
    public function index(){
        //载入公告 创建时间从新到旧
        $data = Article::where('a_type','公告')->orderBy('created_at','desc')->paginate(10);
        $data2 = Article::offset(0)->limit(10)->get();
        return view('wocao.index')->with(compact(['data','data2']));
    }
}
