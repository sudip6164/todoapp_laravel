<x-layout title="My Tasks">
    <div class="max-w-4xl mx-auto py-8 px-4">
        <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-200">
            <h1 class="text-3xl font-bold text-gray-900">My Tasks</h1>
            <a href="{{ route('tasksCreatePage') }}" class="px-5 py-2.5 text-sm font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-900 transition-colors shadow-sm">
                + Add New Task
            </a>
        </div>

        @if(session('success'))
            <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 border border-green-200 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if($tasks->isEmpty())
            <div class="text-center py-12 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                <p class="text-gray-500 italic">No tasks yet. Start by creating one!</p>
            </div>
        @else
            <div class="space-y-4">
                @foreach($tasks as $task)
                    <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h2 class="text-xl font-bold text-gray-800 mb-1">{{ $task->title }}</h2>
                                <p class="text-gray-600 mb-4">{{ $task->description }}</p>
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        {{ $task->status === 'done' ? 'bg-green-100 text-green-800' : ($task->status === 'doing' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                        {{ strtoupper($task->status) }}
                                    </span>
                                    @if($task->created_at)
                                        <span class="text-xs text-gray-400 italic">
                                            Added {{ $task->created_at->diffForHumans() }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-2 ml-4">
                                <form action="{{ route('tasksDelete', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                                    @csrf
                                    <button type="submit" class="w-full text-xs font-bold px-3 py-1.5 bg-red-50 text-red-600 rounded hover:bg-red-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
