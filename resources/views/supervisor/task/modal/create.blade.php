<div class="modal fade" id="modal-task-{{ $project->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-task-{{ $project->id }}" aria-hidden="true">
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
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"
                        required></textarea>
                    <label for="deadline">Deadline</label>
                    <input class="form-control" id="deadline" name="deadline" type="date" placeholder="Deadline"
                        min="{{ $currentperiod->start }}" max="{{ $currentperiod->end }}" required>
                </form>
            </div>
            <div class="modal-footer">
                <div class="text-danger"><span class="fa fa-times mr-2"></span>Declined</div>
            </div>
        </div>
    </div>
</div>
