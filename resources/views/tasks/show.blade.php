<x-layout title="Task Detail">
    <div class="max-w-2xl mx-auto py-12 px-4 font-sans">
        <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
            <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-100">
                <h1 class="text-3xl font-extrabold text-gray-900">Task Information</h1>
                <a href="{{ route('tasksIndex') }}" class="text-sm font-semibold text-gray-500 hover:text-gray-800 transition-colors">
                    &larr; Back to List
                </a>
            </div>

            <div class="space-y-6">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Task Title</label>
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <p class="text-xl font-bold text-gray-800">{{ $task->title }}</p>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Description</label>
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 min-h-[100px]">
                        <p class="text-gray-600 leading-relaxed">{{ $task->description }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 pt-4 border-t border-gray-50">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Status</label>
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-bold bg-gray-100 text-gray-800">
                            {{ $task->status }}
                        </span>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Creation Date</label>
                        <p class="text-sm text-gray-500 font-medium">{{ $task->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
