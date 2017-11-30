<html>
<head lang="{{ app()->getLocale() }}">
@include('layout.all')
</head>
<body>

<div class="container">
    @include('layout.head')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>{{$data->a_title}}</h1>
        </div>
        <div class="panel-body">
            {!! $data->a_context !!}
        </div>
    </div>
    @if(count($allPath)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>图片浏览</h1>
        </div>
        <div class="panel-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @for($i=0;$i<count($allPath);$i++)
                        @if($i==0)
                            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                        @else
                            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
                        @endif
                    @endfor

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php $flag=1; ?>
                    @foreach($allPath as $v)
                        @if($flag==1)
                            <?php $flag=0;?>
                                <div class="item active">

                                    <img src="{{asset($v)}}" alt="...">
                                    <div class="carousel-caption">
                                        <!--描述图片-->

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
    @endif
</div>
@include('layout.all2');
</body>

</html>
