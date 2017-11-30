<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    @include('layout.all')
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <table class="table">
        <tr>
            <td><input class="btn btn-default" type="hidden" name="a_id" value="{{$a_id}}"/></td>
        </tr>
        <tr>
            <td>选择图片</td>
            <td><input class="btn btn-default" type="file" id='picture' name="picture"/></td>
        </tr>
        <tr>
            <td><input class="btn btn-default" type="submit" value="提交"/></td>
            <td><input class="btn btn-default" type="reset" value="取消" onclick="location.href='{{url('/info')}}'"/></td>
        </tr>

    </table>
</form>
@include('layout.all2')
</body>
</html>