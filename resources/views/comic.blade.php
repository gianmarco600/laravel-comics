@extends('layouts.app')

@section('title', 'comics')
    
@section('main_content')
<?php 

if ($_GET["key"] != ''){
    $key = $_GET["key"];
};

?> 
<div class="container">
    <h2 class="my-20" >{{$comics[$key]['title']}}</h2>
    
    <img class="my-20" src="{{$comics[$key]['thumb']}}" alt="">
    <p>{{$comics[$key]['description']}}</p>
    <div class="prezzo my-20">{{$comics[$key]['price']}}</div>
    <p>a cura di:</p>
    <ul class="my-20">
        @foreach ($comics[$key]['artists'] as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
</div>
    
    

@endsection