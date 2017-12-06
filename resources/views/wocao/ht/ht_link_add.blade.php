<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form method="post" action="{{url('links')}}">
      {{csrf_field()}}
      链接名字:<input type="text" name="link_name"/><br>
      链接地址:<input type="text" name="link_url"/><br>
      <input type="submit" value="添加"/><br>
    </form>
</body>

</script>
</html>
