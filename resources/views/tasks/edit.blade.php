<x-layout title="Edit Task">
    <div class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 px-4">
        <div class="w-full max-w-lg p-8 bg-white rounded-2xl shadow-xl border border-gray-100">
            <h2 class="mb-6 text-3xl font-extrabold text-center text-gray-900 leading-tight">Modify Task</h2>
            
            <form action="{{ route('tasksEdit', $task->id) }}" method="post" class="space-y-6">
                @csrf
                @error('title')
                <div class="p-4 mb-4 text-sm rounded-base bg-red-200"><span>*{{ $message }}</span></div>
                @enderror
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Task Title</label>
                    <input type="text" name="title" id="title" value="{{ $task->title }}" required 
                           class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800 bg-white">
                </div>

                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Description</label>
                    <textarea name="description" id="description" rows="4" placeholder="Add some details..." 
                              class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800 resize-none bg-white">{{ $task->description }}</textarea>
                </div>

                <div>
                    <label for="status" class="block text-sm font-semibold text-gray-700 ml-1 mb-1">Status</label>
                    <div class="relative">
                        <select name="status" id="status" class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent transition-all outline-none text-gray-800 appearance-none bg-white cursor-pointer">
                            <option value="todo" {{ $task->status === 'todo' ? 'selected' : '' }}>TODO</option>
                            <option value="doing" {{ $task->status === 'doing' ? 'selected' : '' }}>DOING</option>
                            <option value="done" {{ $task->status === 'done' ? 'selected' : '' }}>DONE</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-400">
                            <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit" class="flex-1 px-6 py-3.5 font-bold text-white bg-gray-800 rounded-xl hover:bg-gray-900 transition-all shadow-lg active:scale-95">
                        Save Changes
                    </button>
                    <a href="{{ route('tasksIndex') }}" class="flex-1 px-6 py-3.5 font-bold text-center text-gray-700 bg-gray-100 rounded-xl hover:bg-gray-200 transition-all active:scale-95">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
