@extends('layouts.default')
@section('content')
 <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="text-2xl font-bold">Hello Laravel</h1>
        <p class="my-2">
        你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training/8.x" class="text-blue-500">Web 开发实战入门</a>
        的实例项目主页
        </p>
        <p class="my-2">
            一切，将从这里开始。这里是nitomeyo2！
        </p>
        <p class="w-24 h-8 bg-green-600 rounded-lg text-center pt-1 text-white" >
            <a class="text-center" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
 </div>
@stop