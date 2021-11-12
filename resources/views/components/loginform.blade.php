<div class="login">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h1>Login</h1>
        <label for="email">Email</label>
        @error("email")
        <p>{{$message}}</p>
        @enderror
        <input value="{{old('email')}}" type="text" placeholder="Enter Email" name="email">
        <label for="password">Password</label>
        @error("password")
        <p>{{$message}}</p>
        @enderror
        <input type="password" placeholder="Enter Password" name="password">

        <a href="{{route('register')}}">don't have an account ? Register</a>
        <button>Login</button>
    </form>

</div>