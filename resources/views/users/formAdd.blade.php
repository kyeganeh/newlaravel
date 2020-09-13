@extends('main.app')

@section('content')
    <h2 style="color: pink">افزودن کاربر جدید</h2>
    {!! Form::open(['method'=>'POST']) !!}
        {!! Form::text('name',null,['placeholder'=>'نام']) !!}
    <br><br>
        {!! Form::email('email',null,['placeholder'=>'ایمیل']) !!}
    <br><br>
        {!! Form::password('password',['placeholder'=>'رمز عبور']) !!}
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
