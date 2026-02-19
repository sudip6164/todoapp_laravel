<nav class="bg-gray-800 text-white p-4 flex justify-between items-center shadow-lg">
    <div>
        <a href="/" class="text-xl font-bold tracking-tight hover:text-gray-300 transition-colors">Todoapp</a>
    </div>
    <div class="flex items-center space-x-6">
        <a href="/" class="text-sm font-medium hover:text-gray-300 transition-colors">Home</a>
        @auth
            <div class="flex items-center space-x-4">
                <a href="{{ route('profileEditPage') }}" class="flex items-center space-x-2 group">
                    @if(auth()->user()->profile_picture)
                        <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Avatar" class="h-8 w-8 rounded-full object-cover border-2 border-gray-700 group-hover:border-gray-500 transition-all">
                    @else
                        <div class="h-8 w-8 rounded-full bg-gray-700 flex items-center justify-center text-[10px] font-bold uppercase border-2 border-gray-600 group-hover:border-gray-500 transition-all">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                    @endif
                    <span class="text-sm font-semibold group-hover:text-gray-300 transition-colors">{{ auth()->user()->name }}</span>
                </a>
                
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-xs font-bold uppercase tracking-wider text-gray-400 hover:text-white transition-colors">Logout</button>
                </form>
            </div>
        @else
            <div class="space-x-4">
                <a href="{{ route('loginPage') }}" class="text-sm font-medium hover:text-gray-300 transition-colors">Login</a>
                <a href="{{ route('registerPage') }}" class="px-4 py-2 bg-white text-gray-800 text-sm font-bold rounded-lg hover:bg-gray-100 transition-all">Register</a>
            </div>
        @endauth
    </div>
</nav>
