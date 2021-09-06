@extends('layouts.app')

@section('title', 'comic')
    
@section('main_content')
<?php 


$key = $_GET["key"];


?> 
<div class="container clearfix white">
    <div class="card_info">
       <h2 class="" >{{$comics[$key]['title']}}</h2>
        <div class="shadow">
            <img class="thumb my-20" src="{{$comics[$key]['thumb']}}" alt="">
        </div>
        
        <p>{{$comics[$key]['description']}}</p>
        <div class="prezzo my-20">{{$comics[$key]['price']}}</div>
        <p>a cura di:</p>
        <ul class="my-20">
            @foreach ($comics[$key]['artists'] as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul> 
    </div>
    
</div>
    
    

@endsection