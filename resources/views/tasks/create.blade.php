<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
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
        textarea {
            width: 50%;
            padding: 8px;
            margin-bottom: 10px;    
        }
    </style>
</head>
<body>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>
