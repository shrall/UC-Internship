{{-- ini modal buat edit task  --}}
<div class="modal fade" id="modal-edit-task-{{ $project->id }}" tabindex="-1" role="dialog"
     aria-labelledby="modal-edit-task-{{ $project->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Create New Task</h2><button type="button" class="btn-close"
                                                                       data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('supervisor.task.store') }}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="Task Name" required>
                    <label for="description" class="mt-4">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"
                              required></textarea>
                    <label for="deadline" class="mt-4">Deadline</label>
                    <input class="form-control" id="deadline" name="deadline" type="date" placeholder="Deadline" min="{{$currentperiod->start}}" max="{{$currentperiod->end}}"  required>

                    <label for="pic" class="mt-4">PIC</label>
                    <select name="pic" class="form-select w-100 mb-0">
                        @foreach ($project->works as $student)
                            <option value="{{$student->id}}" required>{{$student->name.' ('. $student->email .')'}}</option>
                        @endforeach

                    </select>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Add New Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
