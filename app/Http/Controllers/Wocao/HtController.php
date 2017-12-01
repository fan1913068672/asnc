<?php

namespace App\Http\Controllers\Wocao;

use App\Http\Controllers\Controller;
use App\Article;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
class HtController extends Controller
{
    //
    public function get(){
        return view('wocao.ht');
    }
    //传入参数满足要求才做以下的事情
    public function post(){
        //为这个请求写个验证器
        //验证内容
        $input = Input::all();
        //验证规则
        $rules = [
            'a_type'=>'required',
            'a_title'=>'required|max:50',
            'a_context'=>'required|unique:asnc_article',
        ];
        //验证对应错误提示
        $messages = [
            'a_type.required'=>'类型是必须的',
            'a_title.required'=>'题目是必须有的',
            'a_context.required'=>'内容是必须的',
            'a_context.unique'=>'相同内容的文章已经有了',
            'a_title.max'=>'题目不能长度超过50字',
        ];
        $validator = Validator::make($input, $rules,$messages);
//        dd($validator->errors());
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect('article/create')->with(compact('errors'));
        }
        else{
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
}
