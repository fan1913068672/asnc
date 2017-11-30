@extends('layouts.app')
@section('login_js')
    <script>
        function refreshCaptcha(){
            $.ajax({
                url: "/login/refereshcapcha",
                type: 'get',
                dataType: 'html',
                success: function(json) {
                    $('.refereshrecapcha').html(json);
                },
                error: function(data) {
                    alert('Try Again.');
                }
            });
        }
    </script>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">邮箱地址</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Capcha -->
                        <div class="form-group">
                            <label for="captcha" class="col-md-4 control-label">验证码</label>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <input id="captcha"  class="form-control" type="captcha" name="captcha" value="{{ old('captcha')  }}" required>
                                    @if ($errors->has('captcha'))
                                        <span class="help-block">
                                            <strong>验证码输入错误</strong>
                                        </span>
                                    @endif
                                </div>
                                <span class="col-md-1 refereshrecapcha" onclick="refreshCaptcha()">
                                     {!! captcha_img('flat')  !!}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>记住密码
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   登录
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   密码忘记了?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
