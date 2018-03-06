<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('index_picture_button/css/normalize.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('index_picture_button/css/main.css')}}" />
        <link href="{{asset('css/sidebar/simple-sidebar.css')}}" rel="stylesheet">
        {{-- 3d翻转图片  
        <link rel="stylesheet" href="{{asset('css/css_3d/normalize_3d.css')}}" />
        <link rel="stylesheet" href="{{asset('css/css_3d/demo_3d.css')}}">
        <link rel="stylesheet" href="{{asset('css/css_3d/style_3d.css')}}">
        --}}
        <title>鞍山师范学院宿舍网</title>
        <style>
            #person_time{
              display:inline-block;
            }
            .panel>.panel-heading{
              height : 70px;
              text-align: center;
              padding-bottom:5px;
            }
            .panel>.panel-heading>h1{
                line-height: 70px;
                margin-top : 0;
            }
        </style>
    </head>
    <body style="background: url({{url('upload/index_bg3.jpg')}}) no-repeat center fixed;">
    <div class="container hidden-sm hidden-xs">
        @include("layout.head")

        <div class="container">
            {{-- 左边栏Start  --}}
            <div class="col-md-4 row">
                {{-- 时间Start  --}}
                <div class="panel  panel-primary col-md-12 col-lg-12 col-xs-12 col-sm-12" id='person_time' style="align-content:center;padding-left:65px;padding-right:auto;padding-bottom:20px;">
                    <script type="text/javascript" src="{{asset('time/js/clock.js')}}">
                    </script>
                </div>
                <div class="clearfix"></div>
                {{--时间Start  --}}
                {{--天气预报Start --}}
                <div class="panel panel-primary">
                    <div class="panel-body">
                            <iframe allowtransparency="true" frameborder="0" width="180" height="36" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=3&z=3&t=0&v=0&d=2&bd=0&k=000000&f=&ltf=009944&htf=cc0000&q=1&e=1&a=0&c=71555&w=180&h=36&align=center" style="text-decoration: none;"></iframe>
                    </div>
                </div>
                {{--天气预报End --}}
                {{-- 快速链接Start  --}}
                <div class="panel  panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">快速通道</h1>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <a class="list-group-item" target="view_window" href="http://202.199.248.12/tmweb/login.aspx">教务管理系统</a>
                            <a class="list-group-item" target="view_window" href="http://www.asnc.edu.cn/">学院官网</a>
                            <a class="list-group-item" target="view_window" href="http://202.199.252.161">学生工作处</a>
                            @foreach($data3 as $v)
                                <a class="list-group-item" target="view_window" href='{{$v->link_url}}'>
                                  {{$v->link_name}}
                                </a>
                            @endforeach
                        </ul>

                    </div>
                </div>
                {{-- 快速链接End  --}}

                {{-- 近期更新Start  --}}
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
                {{-- 近期更新End  --}}
                {{--寝室掠影Start  --}}
                <div class="hidden-xs hidden-sm panel  panel-primary">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      {{-- Indicators  --}}
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                      </ol>
                      {{-- Wrapper for slides  --}}
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                              <img src="{{asset('upload/7auw2AXry24oeVXl1FiR5Hqo2Xg9rErimSvD3pCT.jpeg')}}" alt="...">
                              <div class="carousel-caption">
                                  {{--描述图片 --}}
                              </div>
                          </div>
                          <div class="item">
                              <img src="{{asset('upload/AYrIxXsILmUDtmmOMCefzt4esmiz851DGKqKRb7x.jpeg')}}" alt="...">
                              <div class="carousel-caption">
                                  {{--描述图片 --}}
                              </div>
                          </div>

                          <div class="item">
                              <img src="{{asset('upload/jSbUaMuFVTf5yzNLvWaZxqOJFHodvANVaueu5RIA.jpeg')}}" alt="...">
                              <div class="carousel-caption">
                                  {{--描述图片 --}}
                              </div>
                          </div>

                          <div class="item">
                              <img src="{{asset('upload/GTYma5MuW9pt3iQfPzTjwmeWg1ujPv9W1l43TG8f.jpeg')}}" alt="...">
                              <div class="carousel-caption">
                                  {{--描述图片 --}}
                              </div>
                          </div>

                          <div class="item">
                              <img src="{{asset('upload/S8000678.JPG')}}" alt="">
                              <div class="carousel-caption">
                                  {{--描述图片 --}}
                              </div>
                          </div>
                      </div>

                      {{-- Controls  --}}
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
                {{--寝室掠影End  --}}

                {{--外链播放器  --}}
                {{----}}
                <div class="embed-responsive embed-responsive-16by9" style="height:400px;">
                <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=500 src="//music.163.com/outchain/player?type=0&id=762388251&auto=0&height=500"></iframe>
                </div>
                 
                {{--外链播放器  --}}
            </div>
            {{--左边栏End --}}
            
            {{--右边栏Start --}}
            <div class="col-md-8">
                {{-- 公告栏Start  --}}
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
                {{--公告栏End --}}
                
{{-- 校园掠影2 start--}}
                <div class="panel  panel-primary">
                  <div class="panel-heading">
                        <h1>校园掠影</h1>
                  </div>
                  <div class="panel-body">
                    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                        {{-- Indicators  --}}
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="4"></li>
                        </ol>
                        {{-- Wrapper for slides  --}}
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{asset('upload/face/hehua.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{asset('upload/face/yueji.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/longgong.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/tiyuguan.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/swb02.jpg')}}" alt="">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>
                        </div>

                        {{-- Controls  --}}
                        <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                  </div>
                </div>
{{-- 校园掠影2 end--}}

                {{-- 3d 图片浏览start  
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>校园掠影</h1>
                    </div>
                    <div class="panel-body">
                      <div class="carousel my3d">
                          <figure class='my3d-figure'>
                              <img src="{{asset('upload/img_3d/dp1.jpg')}}" alt="">
                              <img src="{{asset('upload/img_3d/dp2.jpg')}}" alt="">
                              <img src="{{asset('upload/img_3d/dp3.jpg')}}" alt="">
                              <img src="{{asset('upload/img_3d/dp4.jpg')}}" alt="">
                          </figure>
                          <nav class="my3d-nav">
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                                  <defs>
                                      <filter id="fyh-filter-goo-2">
                                          <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                          <feComposite in="SourceGraphic" in2="goo" />
                                      </filter>
                                  </defs>
                              </svg>
                              <button id="fyh-component-2" class="button button--2" style="filter: url('#fyh-filter-goo-2');">
                                  Pre
                                  <span class="button__bg"></span>
                              </button>
                              <button id="fyh-component-3" class="button button--2 next" style="filter: url('#fyh-filter-goo-2');">
                                  Next
                                  <span class="button__bg"></span>
                              </button>
                          </nav>

                      </div>
                      

                    </div>
                    
                </div>
                --}}
                {{-- 3d 图片浏览end --}}
                {{-- 图片Start  --}}

                {{-- 文章显示start  --}}
                <div class="col-md-12 col-lg-12">
                    <div class="panel  panel-primary">
                        <div class="panel-heading">
                            <h1>舍务部</h1>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php $i=1;?>
                                @foreach($swb_data as $v)
                                    <a class="list-group-item" href='{{url("news/".$v->a_id)}}'>
                                        <span class="badge">{{$i}}</span>
                                        {{$v->a_title}}
                                    </a>
                                    <?php $i++?>
                                @endforeach
                            </ul>
                            <nav aria-label="Page navigation">
                                {{$swb_data->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="panel  panel-primary">
                        <div class="panel-heading">
                            <h1>政策法规</h1>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php $i=1;?>
                                @foreach($zcfg_data as $v)
                                    <a class="list-group-item" href='{{url("news/".$v->a_id)}}'>
                                        <span class="badge">{{$i}}</span>
                                        {{$v->a_title}}
                                    </a>
                                    <?php $i++?>
                                @endforeach
                            </ul>
                            <nav aria-label="Page navigation">
                                {{$zcfg_data->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="panel  panel-primary">
                        <div class="panel-heading">
                            <h1>规章制度</h1>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php $i=1;?>
                                @foreach($gzzd_data as $v)
                                    <a class="list-group-item" href='{{url("news/".$v->a_id)}}'>
                                        <span class="badge">{{$i}}</span>
                                        {{$v->a_title}}
                                    </a>
                                    <?php $i++?>
                                @endforeach
                            </ul>
                            <nav aria-label="Page navigation">
                                {{$gzzd_data->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
                {{-- 文章显示end  --}}

            </div>
            {{--右边栏End --}}
        </div>
        @include('layout.contact_us')
    </div>
    <div id="wrapper">
        
        <!-- Sidebar -->
        @include('layout.head_sm')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid row hidden-md hidden-lg">

              <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
              {{-- 近期更新Start  --}}
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
                {{-- 近期更新End  --}}
                {{-- 校园掠影2 start--}}
                <div class="panel  panel-primary">
                  <div class="panel-heading">
                        <h1>校园掠影</h1>
                  </div>
                  <div class="panel-body">
                    <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
                        {{-- Indicators  --}}
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic3" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic3" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic3" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic3" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic3" data-slide-to="4"></li>
                        </ol>
                        {{-- Wrapper for slides  --}}
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{asset('upload/face/hehua.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{asset('upload/face/yueji.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/longgong.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/tiyuguan.jpg')}}" alt="...">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{asset('upload/face/swb02.jpg')}}" alt="">
                                <div class="carousel-caption">
                                    {{--描述图片 --}}
                                </div>
                            </div>
                        </div>

                        {{-- Controls  --}}
                        <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                  </div>
                </div>
{{-- 校园掠影2 end--}}
{{-- 快速链接Start  --}}
                <div class="panel  panel-primary">
                    <div class="panel-heading">
                        <h1 class="text-center">快速通道</h1>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <a class="list-group-item" target="view_window" href="http://202.199.248.12/tmweb/login.aspx">教务管理系统</a>
                            <a class="list-group-item" target="view_window" href="http://www.asnc.edu.cn/">学院官网</a>
                            <a class="list-group-item" target="view_window" href="http://202.199.252.161">学生工作处</a>
                            @foreach($data3 as $v)
                                <a class="list-group-item" target="view_window" href='{{$v->link_url}}'>
                                  {{$v->link_name}}
                                </a>
                            @endforeach
                        </ul>

                    </div>
                </div>
                {{-- 快速链接End  --}}
                {{-- 公告栏Start  --}}
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
                {{--公告栏End --}}
            </div>
            <div class="hidden-md hidden-lg">
            @include("layout.contact_us")
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>
    <!-- /#wrapper -->
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
    {{-- 实现3d翻转js start  
    <script type="text/javascript">
        'use strict';

        window.addEventListener('load', function () {
            // var carousels = document.querySelectorAll('.carousel');
            var carousels = document.querySelectorAll('.my3d');
            for (var i = 0; i < carousels.length; i++) {
                carousel(carousels[i]);
            }
        });

        function carousel(root) {
          // var figure = root.querySelector('figure'),
            var figure = root.querySelector('.my3d-figure'),
                nav = root.querySelector('.my3d-nav'),
                images = figure.children,
                n = images.length,
                gap = root.dataset.gap || 0,
                bfc = 'bfc' in root.dataset,
                theta = 2 * Math.PI / n,
                currImage = 0;

            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            window.addEventListener('resize', function () {
                setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            });

            setupNavigation();

            function setupCarousel(n, s) {
                var apothem = s / (2 * Math.tan(Math.PI / n));

                figure.style.transformOrigin = '50% 50% ' + -apothem + 'px';

                for (var i = 0; i < n; i++) {
                    images[i].style.padding = gap + 'px';
                }for (i = 1; i < n; i++) {
                    images[i].style.transformOrigin = '50% 50% ' + -apothem + 'px';
                    images[i].style.transform = 'rotateY(' + i * theta + 'rad)';
                }
                if (bfc) for (i = 0; i < n; i++) {
                    images[i].style.backfaceVisibility = 'hidden';
                }rotateCarousel(currImage);
            }

            function setupNavigation() {
                var bt = document.querySelectorAll('#fyh-component-2')[0];
                var bt2 = document.querySelectorAll('#fyh-component-3')[0];
                var filter = document.querySelectorAll('#fyh-filter-goo-2 feGaussianBlur')[0];
                var particleCount = 12;
                var colors = ['#DE8AA0', '#8AAEDE', '#FFB300', '#60C7DA']
                bt.addEventListener('click',onClickPre);
                bt2.addEventListener('click',onClickNext);
                function onClickPre(e) {
                    //按钮变形Start
                    var particles = [];
                    var tl = new TimelineLite({onUpdate: function() {
                        filter.setAttribute('x', 0);
                    }});

                    tl.to(bt.querySelectorAll('.button__bg'), 0.6, { scaleX: 1.05 });
                    tl.to(bt.querySelectorAll('.button__bg'), 0.9, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 0.6);

                    for (var i = 0; i < particleCount; i++) {
                        particles.push(document.createElement('span'));
                        bt.appendChild(particles[i]);

                        particles[i].classList.add(i % 2 ? 'left' : 'right');

                        var dir = i % 2 ? '-' : '+';
                        var r = i % 2 ? getRandom(-1, 1)*i/2 : getRandom(-1, 1)*i;
                        var size = i < 2 ? 1 : getRandom(0.4, 0.8);
                        var tl = new TimelineLite({ onComplete: function(i) {
                            particles[i].parentNode.removeChild(particles[i]);
                            this.kill();
                        }, onCompleteParams: [i] });

                        tl.set(particles[i], { scale: size });
                        tl.to(particles[i], 0.6, { x: dir + 20, scaleX: 3, ease: SlowMo.ease.config(0.1, 0.7, false) });
                        tl.to(particles[i], 0.1, { scale: size, x: dir +'=25' }, '-=0.1');
                        if(i >= 2) tl.set(particles[i], { backgroundColor: colors[Math.round(getRandom(0, 3))] });
                        tl.to(particles[i], 0.6, { x: dir + getRandom(60, 100), y: r*10, scale: 0.1, ease: Power3.easeOut });
                        tl.to(particles[i], 0.2, { opacity: 0, ease: Power3.easeOut }, '-=0.2');
                    }
                    e.stopPropagation();
                    //按钮变形End

                    var t = e.target;
                    if (t.tagName.toUpperCase() != 'BUTTON') return;
                    currImage--;
                    rotateCarousel(currImage);//转到当前图片id
                }
                function onClickNext(e) {
                    //按钮变形Start
                    var particles = [];
                    var tl = new TimelineLite({onUpdate: function() {
                        filter.setAttribute('x', 0);
                    }});

                    tl.to(bt2.querySelectorAll('.button__bg'), 0.6, { scaleX: 1.05 });
                    tl.to(bt2.querySelectorAll('.button__bg'), 0.9, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 0.6);

                    for (var i = 0; i < particleCount; i++) {
                        particles.push(document.createElement('span'));
                        bt2.appendChild(particles[i]);

                        particles[i].classList.add(i % 2 ? 'left' : 'right');

                        var dir = i % 2 ? '-' : '+';
                        var r = i % 2 ? getRandom(-1, 1)*i/2 : getRandom(-1, 1)*i;
                        var size = i < 2 ? 1 : getRandom(0.4, 0.8);
                        var tl = new TimelineLite({ onComplete: function(i) {
                            particles[i].parentNode.removeChild(particles[i]);
                            this.kill();
                        }, onCompleteParams: [i] });

                        tl.set(particles[i], { scale: size });
                        tl.to(particles[i], 0.6, { x: dir + 20, scaleX: 3, ease: SlowMo.ease.config(0.1, 0.7, false) });
                        tl.to(particles[i], 0.1, { scale: size, x: dir +'=25' }, '-=0.1');
                        if(i >= 2) tl.set(particles[i], { backgroundColor: colors[Math.round(getRandom(0, 3))] });
                        tl.to(particles[i], 0.6, { x: dir + getRandom(60, 100), y: r*10, scale: 0.1, ease: Power3.easeOut });
                        tl.to(particles[i], 0.2, { opacity: 0, ease: Power3.easeOut }, '-=0.2');
                    }
                    //按钮变形End
                    //切换图片Start
                    e.stopPropagation();
                    var t = e.target;
                    if (t.tagName.toUpperCase() != 'BUTTON') return;
                    currImage++;
                    rotateCarousel(currImage);//转到当前图片id
                    //切换图片End
                }
            }

            function rotateCarousel(imageIndex) {
                figure.style.transform = 'rotateY(' + imageIndex * -theta + 'rad)';
            }
        }
    </script>
    --}}
    {{-- 实现3d翻转js end --}}
    {{-- 图片按钮js start 
    <script src="{{asset('index_picture_button/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('index_picture_button/js/main.js')}}"></script>
    --}}
    {{-- 图片按钮js end --}}

    
    
</html>
