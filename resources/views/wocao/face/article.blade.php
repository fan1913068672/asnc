<html>
<head lang="{{ app()->getLocale() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/sidebar/simple-sidebar.css')}}" rel="stylesheet">
</head>
<body>

<div class="container hidden-xs hidden-sm">
    @include('layout.head')
    <div class="row">
    <div class="col-md-4  hidden-sm hidden-xs">
        {{-- 快速链接Start --}}
        <div class="panel  panel-primary">
            <div class="panel-heading">
                <h1 class="text-center">快速通道</h1>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <a class="list-group-item" target="view_window" href="http://202.199.248.12/tmweb/login.aspx">教务管理系统</a>
                    <a class="list-group-item" target="view_window" href="http://www.asnc.edu.cn/">学院官网</a>
                    <a class="list-group-item" target="view_window" href="http://202.199.252.161">学生工作处</a>
                </ul>

            </div>
        </div>
        {{-- 快速链接End --}}
        {{--寝室掠影Start --}}
        <div class="panel  panel-primary">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                {{-- Indicators --}}
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                {{-- Wrapper for slides --}}
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('upload/7auw2AXry24oeVXl1FiR5Hqo2Xg9rErimSvD3pCT.jpeg')}}" alt="...">
                        <div class="carousel-caption">
                            {{--描述图片--}}
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('upload/AYrIxXsILmUDtmmOMCefzt4esmiz851DGKqKRb7x.jpeg')}}" alt="...">
                        <div class="carousel-caption">
                            {{--描述图片--}}
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('upload/jSbUaMuFVTf5yzNLvWaZxqOJFHodvANVaueu5RIA.jpeg')}}" alt="...">
                        <div class="carousel-caption">
                            {{--描述图片--}}
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('upload/GTYma5MuW9pt3iQfPzTjwmeWg1ujPv9W1l43TG8f.jpeg')}}" alt="...">
                        <div class="carousel-caption">
                            {{--描述图片--}}
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('upload/S8000678.JPG')}}" alt="">
                        <div class="carousel-caption">
                            {{--描述图片--}}
                        </div>
                    </div>
                </div>

                {{-- Controls --}}
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
        {{--寝室掠影End --}}
        {{--外链播放器 --}}
        {{--
        <div class="embed-responsive embed-responsive-16by9">
        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=110 src="//music.163.com/outchain/player?type=0&id=762388251&auto=1&height=90"></iframe>
        </div>
        --}}
        {{--外链播放器 --}}
    </div>
    <div class="col-md-8">
        {{-- 文章Start --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$data->a_title}}</h1>
            </div>
            <div class="panel-body">
                {!! $data->a_context !!}
            </div>
        </div>
        {{-- 文章End --}}
        {{-- 图片Start --}}
        @if(count($allPath)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>图片浏览</h1>
                </div>
                <div class="panel-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        {{-- Indicators --}}
                        <ol class="carousel-indicators">
                            @for($i=0;$i<count($allPath);$i++)
                                @if($i==0)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
                                @endif
                            @endfor

                        </ol>

                        {{-- Wrapper for slides --}}
                        <div class="carousel-inner" role="listbox">
                            <?php $flag=1; ?>
                            @foreach($allPath as $v)
                                @if($flag==1)
                                    <?php $flag=0;?>
                                    <div class="item active">

                                        <img src="{{asset($v)}}" alt="...">
                                        <div class="carousel-caption">
                                            {{--描述图片--}}

                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <img src="{{asset($v)}}" alt="...">
                                        <div class="carousel-caption">

                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>

                        {{-- Controls --}}
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
    @endif
    {{-- 图片End --}}
    </div>
    <div class="clearfix"></div>
    @include("layout.contact_us")
    </div> {{-- row --}}
</div>
{{-- small device --}}
<div id="wrapper">
        
        <!-- Sidebar -->
        @include('layout.head_sm')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid row hidden-md hidden-lg">

              <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
       {{-- 文章Start --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{$data->a_title}}</h1>
            </div>
            <div class="panel-body">
                {!! $data->a_context !!}
            </div>
        </div>
        {{-- 文章End --}}
        {{-- 图片Start --}}
        @if(count($allPath)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>图片浏览</h1>
                </div>
                <div class="panel-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        {{-- Indicators --}}
                        <ol class="carousel-indicators">
                            @for($i=0;$i<count($allPath);$i++)
                                @if($i==0)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
                                @endif
                            @endfor

                        </ol>

                        {{-- Wrapper for slides --}}
                        <div class="carousel-inner" role="listbox">
                            <?php $flag=1; ?>
                            @foreach($allPath as $v)
                                @if($flag==1)
                                    <?php $flag=0;?>
                                    <div class="item active">

                                        <img src="{{asset($v)}}" alt="...">
                                        <div class="carousel-caption">
                                            {{--描述图片--}}

                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <img src="{{asset($v)}}" alt="...">
                                        <div class="carousel-caption">

                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>

                        {{-- Controls --}}
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
    @endif
    {{-- 图片End --}}
            </div>
            <div class="hidden-md hidden-lg">
            @include("layout.contact_us")
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>
@include("layout.jquery")
@include("layout.bootstrap_js")
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>

</html>
