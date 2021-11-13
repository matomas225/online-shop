<nav>
    <ul>
        <h1><a href="{{route('home')}}">Online Shop</a></h1>
        @guest
        <li><a href="{{route('login')}}">Login/Register</a> </li>
        @endguest
        @auth
        <li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </li>
        <li><a href="">{{auth()->user()->name}}</a></li>
        <li><a href="{{route('postlist')}}">My Posts</a></li>
        <li><a href="{{route('post')}}">Create Post</a></li>

        @endauth
    </ul>
</nav>