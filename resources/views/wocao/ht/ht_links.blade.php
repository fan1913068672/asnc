<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('layer/layer.js')}}"></script>
</head>
<body>
    @foreach($links as $link)
      链接序号:<input type='text' onchange="changeOrder(this,{{$link->link_id}})" value="{{$link->link_order}}"/><br>
      链接id:<label>{{$link->link_id}}</label><br>
      链接描述:<input type='text' onchange="changeName(this,{{$link->link_id}})" value="{{$link->link_name}}"/><br>
      链接:<input type='text' onchange="changeUrl(this,{{$link->link_id}})" value="{{$link->link_url}}"/><br>
      操作:<a href='javascript:' onclick="deleteLink({{$link->link_id}})">删除</a><br>
      <hr>
    @endforeach
</body>
<script>
        //测试jquery
        // $(
        //   function changeOrder(){
        //     alert('love');
        //   }
        // );
        function changeOrder(obj,link_id){
            //获取到对象的值
            var link_order = $(obj).val();
            //post提交
            $.post(
              //提交路由
              "{{url('linkchange')}}",
              //传输的数据
              {
                '_token':'{{csrf_token()}}',
                'link_order':link_order,
                'link_id':link_id,
              },
              //回调函数，使用data接受传回来的数据
              function(data){
                if(data.status==0){
                  //刷新页面
                  location.href = location.href;
                  layer.msg(data.msg,{icon:6});
                }else{
                  layer.msg(data.msg,{icon:5});
                }
              }
            );
          }

          function changeName(obj,link_id){
              //获取到linkName
              var link_name = $(obj).val();
              //post提交
              $.post(
                //提交路由
                "{{url('links/changeName')}}",
                //传输的数据
                {
                  '_token':'{{csrf_token()}}',
                  'link_name':link_name,
                  'link_id':link_id,
                },
                //回调函数，使用data接受传回来的数据
                function(data){
                  if(data.status==0){
                    //刷新页面
                    location.href = location.href;
                    layer.msg(data.msg,{icon:6});
                  }else{
                    layer.msg(data.msg,{icon:5});
                  }
                }
              );
            }
            function changeUrl(obj,link_id){
                //获取到linkName
                var link_url = $(obj).val();
                //post提交
                $.post(
                  //提交路由
                  "{{url('links/changeUrl')}}",
                  //传输的数据
                  {
                    '_token':'{{csrf_token()}}',
                    'link_url':link_url,
                    'link_id':link_id,
                  },
                  //回调函数，使用data接受传回来的数据
                  function(data){
                    if(data.status==0){
                      //刷新页面
                      location.href = location.href;
                      layer.msg(data.msg,{icon:6});
                    }else{
                      layer.msg(data.msg,{icon:5});
                    }
                  }
                );
              }

</script>

<script>
function deleteLink(link_id){
  layer.confirm(
    "确定删除这个链接?",
    {btn:['确定','取消']},
    function(){
      $.post(
        "{{url('links/')}}/"+link_id,
        {
          '_token':'{{csrf_token()}}',
          '_method':'delete',
        },
        function(data){
          if(data.status==0){
            //刷新页面
            location.href = location.href;
            layer.msg(data.msg,{icon:6});
          }else{
            layer.msg(data.msg,{icon:5});
          }
        }
      );
      // alert(link_id);
    },
    function(){
      layer.msg("删除失败,请稍后重试",{icon:5});
    }
  );
}
</script>
</html>
