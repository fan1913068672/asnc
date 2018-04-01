<html>
<head>
    @include('layout.all')
</head>
<body>
<div class="container">

    {!! Form::open(['action' => "Wocao\Article\DeleteArticleController@post",'method' => 'post']) !!}
    {{csrf_field()}}

    <select class="selectpicker" id="tp" name="a_type">
        <option value="中心简介">中心简介</option>
        <option value="政策法规">政策法规</option>
        <option value="规章制度">规章制度</option>
        <option value="新闻中心">新闻中心</option>
        <option value="思政工作">思政工作</option>
        <option value="舍务部">舍务部</option>
        <option value="生活常识">生活常识</option>
        <option value="公告">公告</option>
    </select>
    <input class="btn btn-default" onclick="check()" type="submit" value="查看"/>
    <script>
    function check(){
    var s = document.getElementById('a')
    console.log("sdf:"+s.value)
    if(s.value==''){
      alert("请选择类型:")
      return false;
    }

  }
    </script>
    {!! Form::close() !!}
    {{--@if(isset($flag) && $flag==true)--}}
    <div class="panel-body">
        <ul class="list-group">
            <?php $i=1;?>
            @foreach($data as $v)
                <?php $path = url('delete_article/'.$v->a_id)?>
                <a class="list-group-item" href='#' onclick="doDelete(this,'{{$path}}');">
                    <span class="badge">{{'创建时间:'.$v->created_at}}</span>
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
</body>
<script>
    function doDelete(element,path){
        res = confirm("删除是不可恢复的，你确认要删除吗？");
        if(res){
            window.location.href = path
        }
    }
</script>
@include('layout.all2')
</html>
