<?php

namespace App\Http\Controllers\Wocao\Index;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Model\Article;
use Illuminate\Support\Facades\Storage;
use App\Http\Model\Links;
class IndexController extends Controller
{
    //
    public function index(){
        //载入公告 创建时间从新到旧
        $data = Article::where('a_type','公告')->orderBy('created_at','desc')->paginate(10);
        //近期更新
        // $data2 = Article::offset(0)->limit(10)->get();
        $data2 = Article::orderBy('created_at','desc')->offset(0)->limit(10)->get();
        //快速链接
        $data3 =  Links::orderBy('link_order')->get();
        //舍务部
        $swb_data = Article::where('a_type','舍务部')->orderBy('created_at','desc')->paginate(10);
        //政策法规
        $zcfg_data = Article::where('a_type','政策法规')->orderBy('created_at','desc')->paginate(10);
        //规章制度
        $gzzd_data = Article::where('a_type','规章制度')->orderBy('created_at','desc')->paginate(10);
        return view('wocao.face.index')->with(compact(['data','data2','data3','swb_data','zcfg_data','gzzd_data']));
    }
}
