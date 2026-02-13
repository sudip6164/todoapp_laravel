<x-layout title="Tasks">
    <h1>My Tasks</h1>

    @foreach($tasks as $task)
        <b>{{ $task->title }}</b><br>
        {{ $task->description }}<br>
        Status: {{ $task->status }}<br><hr><br>
    @endforeach
</x-layout>
