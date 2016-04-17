<html>
<head></head>
<body>
<div>
{!! Form::open(['method'=>'post','accept-charset'=>'GBK','data-bind'=>'zhangqiang']) !!}
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', "", ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
</div>
<div class="form-group">
{!!Form::file("image")!!}
</div>
{!! Form::close() !!}
</div>
</body>
</html>