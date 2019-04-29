@extends('layouts.default')

@section('content')
  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你现在看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入门教程</a> 的示例项目主页。
    </p>
    <p>一切，将从这里开始。</p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
    </p>
  </div>
@endsection