<html>
<head>
    @include('layout.all')
</head>
<body>
<div class="container">
    @include('layout.head')
    <div class="row">
        <!-- 导航条 -->
        <div class="col-xs-6 col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li id="ztwz" role="presentation"><a href="{{url('article/create')}}" target="main">添加文章</a></li>
                <li id='scwz' role="presentation"><a href="{{url('delete_article')}}" target="main">删除文章</a></li>
                <li id='scwz' role="presentation"><a href="{{url('info')}}" target="main">文章信息</a></li>
                <li id='lgout' class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                退出登录
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-10">
            <!-- 执行窗口 -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe name='main' class="embed-responsive-item" src="{{url('info')}}"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
@include('layout.all2')


</html>