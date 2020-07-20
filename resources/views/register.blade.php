<html>
    <form action="/register" method = 'POST'>
        @include('layouts.errors')
        @csrf
        <input type="text" name='name' required placeholder="Name">
        <input type="email" name='email' required placeholder="Email">
        <input type="password" name='password' required placeholder="Password">
        <button type="submit">Submit</button>
    </form>
</html>
