<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <style>
        .incomplete {
            background-color: #fff; /* White background */
            color: #333; /* Dark text color */
        }

        /* Style for completed tasks */
        .completed {
            background-color: #FFC7B0; /* Light gray background */
            color: #999; /* Light text color */
            
        }
        table {
            width: 80%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #A9A9A9;
        }
    </style>
</head>
<body>
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr class="{{ $task->status ? 'completed' : '' }}">
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status ? 'Completed' : 'Incomplete' }}</td>
                    <td>
                        @if ($task->status)
                            <form action="{{ route('tasks.incomplete', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Mark as Incomplete</button>
                            </form>
                        @else
                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Mark as Complete</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('tasks.show', $task->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">View</button>
                        </form>

                        <form action="{{ route('tasks.edit', $task->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
