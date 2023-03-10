@extends('layouts.app')
@section('content')

<div class ="flex-center position-ref full-height">
    <div class ="content" >
    <img src="/img/pizzahouse.jpg" alt="pizz house image">
        <div class="title m-b-md">
            Food house 
        </div>
    <div>    
    <div class="mssg">{{session('mssg')}}</div>
    <div class="msg">{{session('msg')}}</div>
</div>
@endsection