<div class="container" style="border: 3px solid black">
    <h1> Log In </h1>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="loginname" placeholder="name" required />
        <input type="password" name="loginpassword" placeholder="password" required />
        <button>Log in</button>
    </form>
</div>