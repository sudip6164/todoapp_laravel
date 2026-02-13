<x-layout title="Home">
    <div class="flex flex-col items-center justify-center min-h-[calc(100vh-160px)] px-4 text-center">
        <h1 class="mb-4 text-5xl font-extrabold text-gray-900">
            Welcome to <span class="text-gray-800">Todoapp</span>
        </h1>
        
        <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6">
            @auth
                <a href="{{ route('tasksIndex') }}" 
                   class="px-8 py-3 text-lg font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-900 transition-colors shadow-lg">
                    Manage My Tasks
                </a>
            @else
                <a href="{{ route('loginPage') }}" 
                   class="px-8 py-3 text-lg font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-900 transition-colors shadow-lg">
                    Get Started
                </a>
                <a href="{{ route('registerPage') }}" 
                   class="px-8 py-3 text-lg font-semibold text-gray-800 border-2 border-gray-800 rounded-lg hover:bg-gray-100 transition-colors">
                    Create Account
                </a>
            @endauth
        </div>
</x-layout>