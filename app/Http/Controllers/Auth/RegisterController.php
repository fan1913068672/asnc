<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected function redirectTo()
    {
//        return '/';
//        dd(route('registered'));
        return route('registered');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //名字验证规则：不可为空|字符串|最大字符255
            'name' => 'required|string|max:25',//
            //邮件的验证规则:不可为空|字符串|邮件|最大字符255|在users表中独一无二
            'email' => 'required|string|email|max:255|unique:users',
            //密码验证规则:不可为空|字符串|最小长度6|密码重复验证
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     //这个事件不能改那我就改一下触发的机制

     public function register(Request $request)
     {

         $this->validator($request->all())->validate();

         event(new Registered($user = $this->create($request->all())));
        //注册归注册别登录
              // $this->guard()->login($user);
             return $this->registered($request, $user)
                             ?: redirect($this->redirectPath());

     }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'active' => 0,
            'password' => bcrypt($data['password']),
        ]);

    }
}
