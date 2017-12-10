<?php

namespace App\Http\Controllers\Wocao\Link;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Links;
class LinkController extends Controller
{
    //
    public function index(){
      $links = Links::orderBy('link_order')->get();
      return view('wocao.ht.ht_links')->with(compact('links'));

    }
    public function changeOrder(){
      $input = Input::all();
      $link = Links::find($input['link_id']);
      $link->link_order = $input['link_order'];
      $res = $link->update();
      if($res){
        $data = [
          'status' => 0,
          'msg' => '排序更新成功',
        ];
        return $data;
      }else{
        $data = [
          'status' => -1,
          'msg' => '排序更新失败',
        ];
        return $data;
      }
      // echo($link);
      // echo $input['link_id']."\n";
      // echo $input['link_order']."\n";
    }

    //delete links/{cate_id}
    public function destroy($link_id){
        $link = Links::find($link_id);
        if($link==null){
          return ['status'=>-1,'msg'=>'删除失败,请稍后重试'];
        }
        $res = $link->delete();
        if($res){
          return ['status'=>0,'msg'=>'删除成功'];
        }else{
          return ['status'=>-1,'msg'=>'删除失败,请稍后重试'];
        }
      // echo 4532452345;
    }
    // post links/
    public function store(){
      $input = Input::all();
      $link = new Links;
      $link->link_name=$input['link_name'];
      $link->link_url=$input['link_url'];
      $link->save();
      return redirect(url('links'));
    }
    // get links/create
    public function create(){
      return view('wocao.ht.ht_link_add');
    }
    // get /links/{link_id}/edit
    public function edit($link_id){
    }
    public function changeName(){
      $input = Input::all();
      $link = Links::find($input['link_id']);
      $link->link_name = $input['link_name'];
      $res = $link->update();
      if($res){
        $data = [
          'status' => 0,
          'msg' => '名字更新成功',
        ];
        return $data;
      }else{
        $data = [
          'status' => -1,
          'msg' => '名字更新失败,请稍后重试',
        ];
        return $data;
    }
  }
  public function changeUrl(){
    $input = Input::all();
    $link = Links::find($input['link_id']);
    $link->link_url = $input['link_url'];
    $res = $link->update();
    if($res){
      $data = [
        'status' => 0,
        'msg' => '地址更新成功',
      ];
      return $data;
    }else{
      $data = [
        'status' => -1,
        'msg' => '地址更新失败,请稍后重试',
      ];
      return $data;
    }
  }

}
