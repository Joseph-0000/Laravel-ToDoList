<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="editModal{{ $todo->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $todo->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('todos.update', $todo) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel{{ $todo->id }}">Edit Task</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" value="{{ $todo->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <input class="form-control" type="text" name="description" value="{{ $todo->description }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Progress</label>
                            <select name="completed" class="form-select" @selected($todo->completed)>
                                <option value="0" >Pending</option>
                                <option value="1" >Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>