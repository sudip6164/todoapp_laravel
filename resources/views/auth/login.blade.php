<x-layout title="Login">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    Do not have account? <a href="{{ route('registerPage') }}">Register</a>
</x-layout>