<x-layout title="Login">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
            <h2 class="mb-6 text-2xl font-bold text-center text-gray-800">Welcome Back</h2>
            
            @if(session('success'))
                <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 border border-green-200 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required 
                           class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required 
                           class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    Login
                </button>
            </form>

            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">Don't have an account? <a href="{{ route('registerPage') }}" class="text-blue-600 hover:underline">Register here</a></p>
            </div>
        </div>
    </div>
</x-layout>