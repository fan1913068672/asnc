<!-- 文章页面 -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layout.all')
</head>
<body>
<div class="container">
    @include('layout.head')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>@yield('content')</h1>
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
            <!-- 分页栏 -->
            <nav aria-label="Page navigation">
                {{$data->links()}}
            </nav>
        </div>
    </div>
</div>
@include('layout.all2')
</body>
</html>
