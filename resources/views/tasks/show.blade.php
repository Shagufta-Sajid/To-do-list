<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h1>Task Details</h1>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description ? $task->description : 'No description available' }}</p>
    <p><strong>Status:</strong> {{ $task->status ? 'Completed' : 'Incomplete' }}</p>
    <a href="{{ route('tasks.index') }}">Back to Tasks</a>
</body>
</html>
