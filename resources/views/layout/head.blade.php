{{-- 导航栏 --}}
<div class="panel panel-default" style="background:inherit;border:0px;">
            <div class="panel-body center-block" style="height:130px;">
                    <a href="{{url('/')}}">
                    <img class="img-responsive" src="{{asset('upload/head.gif')}}" style="height: 100%;width: 100%;border-radius:10px;"/>
                    </a>
            </div>
        </div>
        {{-- 小型设备不显示 --}}
        <nav class="navbar navbar-inverse" style="background-color:#337ab7;border:0px;border-radius: 10px;">
            <ul class="nav nav-pills nav-justified row ">
                <style type="text/css">
                  .nav>li>a[href]{
                    line-height: 50px;
                    font-size : 10px;
                    color:white;
                                    }
                    .nav>li>a[href]:hover{

                    font-size : 15px;
                    color:black;
                                    }
                }
                </style>
                <li class="col-md-2"></li>
                <li role="presentation" class="col-md-1"><a class="button" href="{{url('/')}}">首页</a></li>
                <li role="presentation" class="col-md-1"> <a href="{{url('zxjj')}}">中心简介</a></li>
                <li role="presentation" class="col-md-1"> <a href="{{url('zcfg')}}">政策法规</a></li>
                <li role="presentation" class="col-md-1"><a href="{{url('gzzd')}}">规章制度</a></li>
                <li role="presentation" class="col-md-1"> <a href="{{url('news')}}">新闻中心</a></li>
                <li role="presentation" class="col-md-1"><a href="{{url('szgz')}}">思政工作</a></li>
                <li role="presentation" class="col-md-1"><a href="{{url('swb')}}">舍务部</a></li>
                <li role="presentation" class="col-md-1"><a href="{{url('shcs')}}">生活常识</a></li>
                <li class="col-md-2"></li>
            </ul>
          </nav>
        {{-- 小型设备不显示 --}}
       