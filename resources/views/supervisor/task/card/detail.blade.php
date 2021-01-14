@include('supervisor.project.modal.task.edit')
<div class="col-lg-6">
    <div class="card border-light shadow-sm text-center pt-3 pb-3 mb-4 mb-lg-0">
        <div class="card-body">
            <h2 class="display-3 mb-2">{{ $task->name }}</h2>
            @if ($task->status != 0)
                <div class="medium font-weight-bold mt-1">Project Name : {{ $task->projectuser->project->name }}</div>
            @endif
            <div class="medium mt-1">{{ $task->description }}</div>
            <div class="medium font-weight-bold mt-1 text-primary">
                <span class="fa fa-stopwatch mr-2"></span>Duration : {{ $task->duration }} hours
            </div>
            <div class="medium font-weight-bold mt-1 text-warning">
                <span class="fa fa-hourglass-half mr-2"></span>Deadline :
                {{ date('d F Y', strtotime($task->deadline)) }}
            </div>
            @if ($task->status == 0)
                <div class="medium font-weight-bold mt-1 text-warning">
                    <span class="fa fa-clock mr-2"></span>Ongoing
                </div>
            @endif
            @if ($task->status == 1)
                <div class="medium font-weight-bold mt-1 text-success">
                    <span class="fa fa-check mr-2"></span>Completed
                </div>
            @endif
            @if ($task->status == 0)
                <a class="btn btn-sm btn-primary mt-1" data-toggle="modal"
                    data-target="#modal-edit-task-{{ $task->id }}">
                    <span class="fa fa-cog mr-2"></span>Edit Task
                </a>
                <a href="{{ route('supervisor.task.finish', $task->id) }}" type="submit"
                    class="btn btn-sm btn-success mt-1">
                    <span class="fa fa-check mr-2"></span>Finish Task
                </a>
            @endif
        </div>
    </div>
</div>
