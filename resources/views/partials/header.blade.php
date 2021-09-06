<header>
    <div class="container_fluid">
        <div class="row holder">
            <div id="logo" >
                
                <a href="{{route('homepage')}}"><img src="{{asset('img/dc-logo.png')}}" alt=""></a>
            </div>
            
            <nav>
                <ul>
                    <li><a href="{{route('characters')}}">Characters</a><div class="anim"></div></li>
                    <li><a href="{{route('comics')}}?key=''">Comics</a><div class="anim"></div></li>
                    <li><a href="{{route('movies')}}">Movies</a><div class="anim"></div></li>
                    <li><a href="{{route('tv')}}">TV</a><div class="anim"></div></li>
                    <li><a href="{{route('games')}}">Games</a><div class="anim"></div></li>
                    <li><a href="{{route('videos')}}">Videos</a><div class="anim"></div></li>
                    <li><a href="{{route('news')}}">News</a><div class="anim"></div></li>
                    <li><a href="{{route('shop')}}">Shop</a><div class="anim"></div></li>
                </ul>
            </nav>
            
        </div>
        <div class="jumbo">
            
            <img src="{{asset('img/jumbotron.jpg')}}" alt="">
        </div>
    </div>
</header>