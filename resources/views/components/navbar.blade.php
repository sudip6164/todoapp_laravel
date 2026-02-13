<nav class="bg-gray-800 text-white p-4 flex justify-between">
    <div>
        <a href="/" class="font-bold">Todoapp</a>
    </div>
    <div class="space-x-4">
        <a href="/" class="hover:underline">Home</a>
        @auth
            <span>Logged in as: {{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="hover:underline" style="background:none; border:none; color:inherit; cursor:pointer; padding:0;">Logout</button>
            </form>
        @else
            <a href="{{ route('loginPage') }}" class="hover:underline">Login</a>
            <a href="{{ route('registerPage') }}" class="hover:underline">Register</a>
        @endauth
    </div>
</nav>
