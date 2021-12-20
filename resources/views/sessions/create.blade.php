@extends('layouts.default')
@section('title', '登陆')
@section('content')
<div class="container px-5 py-8 mx-auto flex">
 <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:mx-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
    <div class="text-gray-900 text-lg mb-1 font-medium title-font border-b-2">
    <h5>登陆</h5>
    </div>
  <div class="">
    @include('shared._errors')<!--错误消息局部视图-->
    <form method="POST" action="{{ route('login') }}">
    <!--{{ csrf_field() }}-->
    @csrf
    
    <div class="">
        <label for="email" class="leading-7 text-sm text-gray-600">邮箱：</label>
        <input type="text" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}" id="email">
    </div>
    <div class="">
        <label for="password" class="leading-7 text-sm text-gray-600">密码：</label>
        <input type="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('password') }}" id="password">
    </div>
    <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-6 mt-2 focus:outline-none hover:bg-red-600 rounded text-lg">登陆</button>
    </form>
<hr>
<p>还没账号？<a href="{{ route('signup') }}">现在注册!</a></p>
  </div> 
 </div>
</div>
@stop