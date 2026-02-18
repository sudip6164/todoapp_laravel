<x-layout title="Create Task">
    <div class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 px-4">
        <div class="w-full max-w-lg p-8 bg-white rounded-2xl shadow-xl border border-gray-100">
            <h2 class="mb-6 text-3xl font-extrabold text-center text-gray-900 leading-tight">Create New Task</h2>
            
            <form action="{{ route('tasksCreate') }}" method="post" class="space-y-6">
                @csrf
                @error('title')
                <div class="p-4 mb-4 text-sm rounded-base bg-red-200"><span>*{{ $message }}</span></div>
                @enderror
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Task Title</label>
                    <input type="text" name="title" id="title" placeholder="What needs to be done?" value="{{ old('title') }}" required 
                           class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800">
                </div>

                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Description (Optional)</label>
                    <textarea name="description" id="description" rows="4" placeholder="Add some details..."
                              class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800 resize-none">{{ old('description') }}</textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit" class="flex-1 px-6 py-3.5 font-bold text-white bg-gray-800 rounded-xl hover:bg-gray-900 transition-all shadow-lg active:scale-95">
                        Create Task
                    </button>
                    <a href="{{ route('tasksIndex') }}" class="flex-1 px-6 py-3.5 font-bold text-center text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-all active:scale-95">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
