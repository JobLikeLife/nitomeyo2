@extends('layouts.default')
@section('title',$user->name)
@section('content')
<!--{{ $user->name }} - {{ $user->email }}-->
<div class="container">
 <section class="mx-auto">
 @include('shared._user_info', ['user' => $user])
 </section>
</div>
@stop