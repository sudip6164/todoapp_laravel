<x-layout title="Profile Settings">
    <div class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 px-4 py-12">
        <div class="w-full max-w-lg p-8 bg-white rounded-2xl shadow-xl border border-gray-100">
            <h2 class="mb-6 text-3xl font-extrabold text-center text-gray-900 leading-tight">Profile Settings</h2>
            
            @if(session('success'))
                <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 border border-green-200 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profileEdit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <!-- Current Profile Picture -->
                <div class="flex flex-col items-center mb-6">
                    <div class="relative group">
                        @if($user->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile" class="h-32 w-32 rounded-full object-cover border-4 border-gray-100 shadow-md">
                        @else
                            <div class="h-32 w-32 rounded-full bg-gray-800 flex items-center justify-center text-white text-4xl font-bold border-4 border-gray-100 shadow-md uppercase">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                        @endif
                    </div>
                </div>

                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required 
                           class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800 bg-white">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Email Address</label>
                    <input type="email" value="{{ $user->email }}" disabled 
                           class="w-full px-5 py-3 border border-gray-100 rounded-xl bg-gray-50 text-gray-400 cursor-not-allowed outline-none italic">
                    <p class="text-[10px] text-gray-400 mt-1 ml-1 italic font-medium tracking-wide">* Email cannot be changed</p>
                </div>

                <div>
                    <label for="profile_picture" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">New Profile Picture</label>
                    <div class="mt-1 flex items-center">
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/*"
                               class="block w-full text-sm text-gray-500
                               file:mr-4 file:py-2.5 file:px-4
                               file:rounded-xl file:border-0
                               file:text-sm file:font-bold
                               file:bg-gray-100 file:text-gray-700
                               hover:file:bg-gray-200 transition-all cursor-pointer">
                    </div>
                    @error('profile_picture')
                        <p class="text-red-500 text-xs mt-1 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full px-6 py-4 font-bold text-white bg-gray-800 rounded-xl hover:bg-gray-900 transition-all shadow-lg active:scale-95 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
