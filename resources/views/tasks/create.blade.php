<x-layout title="Create Task">
    <h1>Create New Task</h1>
    <form action="{{ route('tasksCreate') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description"></textarea><br><br>
        
        <button type="submit">Create Task</button>
        <a href="{{ route('tasksIndex') }}">Cancel</a>
    </form>
</x-layout>
