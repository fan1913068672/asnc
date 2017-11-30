<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        @include('layout.all')
        <title>鞍山师范学院宿舍网</title>
    </head>
    <body>
    <!--  style="background: url({{url('upload/index_bg3.jpg')}}) no-repeat fixed center; "-->
    <div class="container" style="background: url({{url('upload/index_bg3.jpg')}}) no-repeat center; ">
        @include('layout.top')
        @include('layout.head')
        <div class="container">
        <div class="col-sm-9 col-md-6 col-lg-4">
        <!-- 快速链接 -->
        <div class="panel  panel-primary">
            <div class="panel-heading">
                <h1 class="text-center">快速通道</h1>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <a class="list-group-item" href="http://202.199.248.12/tmweb/login.aspx">教务管理系统</a>
                    <a class="list-group-item" href="http://www.asnc.edu.cn/">学院官网</a>
                    <a class="list-group-item" href="http://202.199.252.161">学生工作处</a>
                </ul>

            </div>
        </div>
        <!-- 近期更新 -->
        <div class="panel  panel-primary">
            <div class="panel-heading">
                <h1 class="text-center">近期更新</h1>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php $i=1;?>
                    @foreach($data2 as $v)
                        <a class="list-group-item" href='{{url("news/".$v->a_id)}}'>
                            <span class="badge">{{$i}}</span>
                            {{$v->a_title}}
                        </a>
                        <?php $i++?>
                    @endforeach
                </ul>

            </div>
        </div>
        </div>
        <div class="col-sm-3 col-md-6 col-lg-8">
        <!-- 公告栏 -->
        <div class="panel  panel-primary">
            <div class="panel-heading">
                <h1>公告栏</h1>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <?php $i=1;?>
                    @foreach($data as $v)
                        <a class="list-group-item" href='{{url("news/".$v->a_id)}}'>
                            <span class="badge">{{$i}}</span>
                            {{$v->a_title}}
                        </a>
                        <?php $i++?>
                    @endforeach

                </ul>

                <nav aria-label="Page navigation">
                    {{$data->links()}}
                </nav>
            </div>
        </div>
        <!-- 图片 -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>公寓掠影</h1>
            </div>
            <div class="panel-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{asset('upload/7auw2AXry24oeVXl1FiR5Hqo2Xg9rErimSvD3pCT.jpeg')}}" alt="...">
                            <div class="carousel-caption">
                                <!--描述图片-->
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('upload/AYrIxXsILmUDtmmOMCefzt4esmiz851DGKqKRb7x.jpeg')}}" alt="...">
                            <div class="carousel-caption">
                                <!--描述图片-->
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{asset('upload/jSbUaMuFVTf5yzNLvWaZxqOJFHodvANVaueu5RIA.jpeg')}}" alt="...">
                            <div class="carousel-caption">
                                <!--描述图片-->
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{asset('upload/GTYma5MuW9pt3iQfPzTjwmeWg1ujPv9W1l43TG8f.jpeg')}}" alt="...">
                            <div class="carousel-caption">
                                <!--描述图片-->
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{asset('upload/S8000678.JPG')}}" alt="">
                            <div class="carousel-caption">
                                <!--描述图片-->
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!--<div class="jumbotron">-->

            <!--<h1>联系我们</h1>-->
            <!--<p>学生公寓管理中心公开电话：-->
                <!--主任室：2960002   办公室：2960840-->
                <!--公开信箱：assy_ourhome@163.com-->
            <!--</p>-->
            <!--<p></p>-->
        <!--</div>-->
        <!-- 联系我们 -->
        <div class="panel  panel-primary">
            <div class="panel-heading">
                <h1>联系我们</h1>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                        <a class="list-group-item" href='javascript:void(0);'>
                            学生公寓管理中心公开电话
                        </a>
                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-lg-8">
                            <a class="list-group-item" href='javascript:void(0);'>
                                主任室：
                            </a>
                        </div>
                        <div class="col-xs-6  col-md-4 col-lg-4">
                            <a class="list-group-item" href='javascript:void(0);'>
                                2960002
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-lg-8">
                            <a class="list-group-item" href='javascript:void(0);'>
                                办公室：
                            </a>
                        </div>
                        <div class="col-xs-6  col-md-4 col-lg-4">
                            <a class="list-group-item" href='javascript:void(0);'>
                                2960840
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-8 col-lg-8">
                            <a class="list-group-item" href='javascript:void(0);'>
                                公开信箱：
                            </a>
                        </div>
                        <div class="col-xs-6  col-md-4 col-lg-4">
                            <a class="list-group-item" target="view_window" href='https://mail.qq.com'>
                                assy_ourhome@163.com
                            </a>
                        </div>
                    </div>

                </ul>
            </div>
        </div>
    </div>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>
