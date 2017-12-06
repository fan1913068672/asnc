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
      <input type='text' onchange="changeOrder(this,{{$link->link_id}})" value="{{$link->link_order}}"/><br>
      <label>{{$link->link_id}}</label><br>
      <label>{{$link->link_name}}</label><br>
      <label>{{$link->link_url}}</label><br>
      <a href='javascript:' onclick="deleteLink({{$link->link_id}})">删除</a><br>
      <hr>
    @endforeach
</body>
</html>
