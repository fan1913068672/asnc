<?php

namespace App\Http\Controllers\Wocao;
use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Storage;
use App\Http\Model\Links;
class IndexController extends Controller
{
    //
    public function index(){
        //载入公告 创建时间从新到旧
        $data = Article::where('a_type','公告')->orderBy('created_at','desc')->paginate(10);
        //近期更新
        $data2 = Article::offset(0)->limit(10)->get();
        //快速链接
        $data3 =  Links::orderBy('link_order')->get();
        return view('wocao.index')->with(compact(['data','data2','data3']));
    }
}
