<div class="modal fade" id="modal-edit-task-{{ $task->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-edit-task-{{ $task->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Task</h2><button type="button" class="btn-close" data-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('supervisor.task.update', $task->id) }}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <label for="name">Name</label>
                    <input class="form-control" value="{{ $task->name }}" id="name" name="name" type="text"
                        placeholder="Task Name" required>
                    <label for="description" class="mt-4">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"
                        required>{{ $task->description }}</textarea>
                    <label for="deadline" class="mt-4">Deadline</label>
                    <input value="{{ $task->deadline }}" class="form-control" id="deadline" name="deadline" type="date"
                        placeholder="Deadline" min="{{ $currentperiod->start }}" max="{{ $currentperiod->end }}"
                        required>

                    <label for="pic" class="mt-4">PIC</label>
                    <select name="pic" class="form-select w-100 mb-0">
                        @foreach ($task->projectuser->project->works as $student)
                            <option value="{{ $student->id }}" @if ($task->projectuser->uci_user_id == $student->id) selected
                        @endif>{{ $student->name . ' (' . $student->email . ')' }}</option>
                        @endforeach
                    </select>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Edit Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
