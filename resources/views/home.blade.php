
@extends('layouts.app')

@section('title', 'DC comics')
    
@section('main_content')
<div class="container rel">
    <div class="banner">
        <h4>current series</h4>
    </div>
    <div class="row wrap ">
        @foreach ($comics as $key => $comic)
            <div class="col-2 my-30 p-20">
                <a href="{{route('comic')}}?key={{$key}}" class="card">
                    
                    
                    <div class="bgimg">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="etichetta">{{$comic['title']}}</div>
                </a>
                
            </div>
        @endforeach
    </div>

    <p>cta</p>
    

    
</div>
    
    

@endsection