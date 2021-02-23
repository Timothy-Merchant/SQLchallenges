<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="/owners/all">Owners</a>
    <a class="navbar-brand" href="/home">Home</a>
    <a class="navbar-brand" href="/login">Login</a>
    @if (Auth::check())
    <a class="navbar-brand" href="/logout">Log-Out</a>
    @endif    
    <a class="navbar-brand" href="/register">Register</a>
    <a class="navbar-brand" href="/">Animals</a>
</nav>
