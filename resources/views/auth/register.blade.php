<x-layout title="Register">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <label for="password_confirmation">Confirm Password:</label><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
</x-layout>