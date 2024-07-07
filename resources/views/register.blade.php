 <x-header name="{{$users['name']}}"/>
    @auth 
    <p> {{$users['name']}} successfully logged in!</p>
    <form action="/logout" method="post">
        @csrf
    <button> Logout</button>
    </form>
    @else
    <div style="border: 3px solid black">
        <h1> Register</h1>
        <form action="/admin" method="post">
            @csrf
            <input type="text" name="name" placeholder="name" required />
            <input type="text" name="email" placeholder="email" required />
            <input type="text" name="user_roll" placeholder="User Roll" />
            <input type="date" name="dob"/>
            <input type="date" name="joined_date">
            <input type="text" name="hourly_rate" placeholder="hourly_rate">
            <input type="password" name="password" placeholder="password" required />
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black">
        <h1> Log In </h1>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="loginname" placeholder="name" required />
            <input type="password" name="loginpassword" placeholder="password" required />
            <button>Log in</button>
        </form>
    </div>
    @endauth
<x-footer/>