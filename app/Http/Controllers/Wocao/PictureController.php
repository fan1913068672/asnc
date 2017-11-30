<?php

namespace App\Http\Controllers\Wocao;
use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function index(){
        $a_id = session('a_id');
        if(session('a_id')!=null)
            return view('wocao.pc')->with(compact('a_id'));
        else
            return view('wocao.info');
    }
    public function store(Request $request){
        $a_id = Input::get('a_id');
        $input = $request->file('picture');
        $path = $input ->store('upload');
        $url = Storage::url($path);
        $picture = new Picture;
        $picture->a_id = $a_id;
        $picture->p_path = $url;
        $res = $picture->save();
        return redirect('pc')->with(compact('a_id'));
    }
}
