<div class="register">
    <form action="{{route('register')}}" method="POST">
        @csrf
        <h1>Register</h1>
        <label for="username">Username</label>
        @error("username")
        <p>{{$message}}</p>
        @enderror
        <input value="{{old('username')}}" type="text" placeholder="Enter Username" name="username">
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
        <label for="password">Repeat Password</label>
        <input type="password" placeholder="Repeat Password" name="password_confirmation">
        <a href="{{route('login')}}">have an account ? Login</a>
        <button>Register</button>
    </form>

</div>