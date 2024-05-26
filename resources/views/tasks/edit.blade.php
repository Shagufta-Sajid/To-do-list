<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <style>
        body {
            padding: 20px;
        }
        form {
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea,
        select {
            width: calc(100% - 16px); /* Adjust width to fit within the container */
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    
        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Incomplete</option>
                <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Completed</option>
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Tasks</a>
</body>
</html>
