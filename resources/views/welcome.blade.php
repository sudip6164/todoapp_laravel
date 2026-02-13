<x-layout title="Home">
    <div class="flex flex-col items-center justify-center min-h-[calc(100vh-160px)] px-4 text-center">
        <h1 class="mb-4 text-5xl font-extrabold text-gray-900">
            Welcome to <span class="text-gray-800">Todoapp</span>
        </h1>
        <p class="mb-8 text-xl text-gray-600 max-w-2xl">
            A simple, clean, and efficient way to manage your tasks and stay productive. 
            Organize your life one task at a time.
        </p>
        
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

        <div class="grid grid-cols-1 gap-8 mt-16 md:grid-cols-3 w-full max-w-5xl">
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 italic">
                <div class="text-3xl mb-2">🚀</div>
                <h3 class="text-lg font-bold mb-2">Fast & Simple</h3>
                <p class="text-gray-500 text-sm">Create and view tasks instantly without any clutter.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 italic">
                <div class="text-3xl mb-2">🔒</div>
                <h3 class="text-lg font-bold mb-2">Secure</h3>
                <p class="text-gray-500 text-sm">Your tasks are private and protected by session-based auth.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 italic">
                <div class="text-3xl mb-2">📱</div>
                <h3 class="text-lg font-bold mb-2">Responsive</h3>
                <p class="text-gray-500 text-sm">Access your todo list from any device, anywhere.</p>
            </div>
        </div>
    </div>
</x-layout>