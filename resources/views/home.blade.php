
@extends('layouts.app')

@section('title', 'DC comics')
    
@section('main_content')
<div class="container">
    <div class="row wrap">
        @foreach ($comics as $key => $comic)
            <div class="col-2 my-20 p-20">
                <div class="card">
                    
                    
                    <div class="bgimg">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="etichetta"><a href="{{route('comic')}}?key={{$key}}">{{$comic['title']}}</a></div>
                </div>
                
            </div>
        @endforeach
    </div>

    <p>cta</p>
    

    
</div>
    
    

@endsection