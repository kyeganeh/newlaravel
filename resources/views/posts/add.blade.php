@extends('main.app')

@section('content')
    <h2 style="color: pink">افزودن پست جدید</h2>
    {!! Form::open(['method'=>'POST','files'=>true]) !!}
        {!! Form::text('title',null,['placeholder'=>'عنوان']) !!}
        <br><br>
        {!! Form::textarea('description',null,['placeholder'=>'متن']) !!}
        <br><br>
        {!! Form::file('path') !!}
        <br><br>
        {!! Form::text('userid',null,['placeholder'=>'آی دی کاربر']) !!}
        <br><br>
        {!! Form::submit('ارسال') !!}
    {!! Form::close() !!}
    <br><br>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div style="padding: 2px;background-color: red;color: white">{{ $error }}</div>
        @endforeach

    @endif
@endsection
