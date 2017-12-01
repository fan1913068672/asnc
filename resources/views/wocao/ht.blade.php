<html>
<head>
@include('layout.all')
</head>
  <body>
  <div class="container">
    <div class="alert alert-info" role="alert">
        <h6 class="well">题目不可为空，长度不能超过50字</h6>
      <h6 class="well">内容不可为空</h6>
    </div>
    <form action="{{url('article')}}" method='post'>
      {{csrf_field()}}
      <!-- 文章题目 -->
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">题目</span>
        <input type="text" name="a_title" class="form-control" placeholder="" aria-describedby="basic-addon1">
      </div>
      <!-- 文章内容 -->
      <textarea id='editor1' name='a_context'></textarea>
      <!-- 底栏 -->
      <nav class="navbar navbar-default">
          <select class="selectpicker navbar-btn" name="a_type">
            <option value="中心简介">中心简介</option>
            <option value="政策法规">政策法规</option>
            <option value="规章制度">规章制度</option>
            <option value="新闻中心">新闻中心</option>
            <option value="思政工作">思政工作</option>
            <option value="舍务部">舍务部</option>
            <option value="生活常识">生活常识</option>
            <option value="公告">公告</option>
          </select>
        <!-- 提交 -->
        <input class="btn btn-success navbar-btn"  type="submit" value="添加"/>
      </nav>
      @if(count($errors)>0)
        @foreach($errors->all() as $error)
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>警告!</strong>
            {{$error}}
          </div>
        @endforeach
      @endif
    </form>
    </div>
  </body>
@include('layout.all2')
<!-- 引入 ckeditor -->
<script>
    // 这里的 'editor1' 等于 textarea 的 id 'editor1
    CKEDITOR.replace('editor1',{
        language:       'zh-cn', // 语言: 中文，默认是英文
        allowedContent: true,
        removePlugins:  'elementspath', // 编辑器下面不显示元素路径
        resize_enabled: false, // 是否允许拖动改变编辑器的大小
        height:         '300px', // CKEditor 中编辑区的高度，不算工具栏的高度
    });
</script>
</html>
