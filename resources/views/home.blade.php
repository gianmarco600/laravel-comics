@extends('layouts.app')

@section('title', 'DC comics')
    
@section('main_content')
<div class="container">
    <div class="jumbo">
        jumbo
        <img src="" alt="">
    </div>
    <p>serie</p>
    @yield('current_series')

    <p>cta</p>
    @yield('cta')

    
</div>
    
    

@endsection