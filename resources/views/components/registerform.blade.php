<div class="register">
    <form action="">
        <h1>Register</h1>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <label for="password">Repeat Password</label>
        <input type="password-confirm" placeholder="Repeat Password" name="password-confirm" required>
        <a href="{{route('login')}}">have an account ? Login</a>
        <button>Register</button>
    </form>

</div>