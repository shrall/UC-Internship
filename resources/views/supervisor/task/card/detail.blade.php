{{-- disini itu ngasi detail dari sebuah task  --}}
{{-- bisa ngedit. berarti include modal.edit  --}}
<div class="col-lg-6">
    <div class="card border-light shadow-sm text-center pt-3 pb-4 mb-4 mb-lg-0">
        <div class="card-body">
            <h2 class="display-3 mb-2">{{ $task->name }}</h2>
            <div class="medium font-weight-bold mt-1">Project Name : {{ $task->projectuser->project->name }}</div>
            <div class="medium mt-1">{{ $task->description }}</div>
            <div class="medium font-weight-bold mt-1 text-primary">
                <span class="fa fa-stopwatch mr-2"></span>Duration : {{ $task->duration }} hours
            </div>
            <div class="medium font-weight-bold mt-1 text-warning">
                <span class="fa fa-hourglass-half mr-2"></span>Deadline :
                {{ date('d F Y', strtotime($task->deadline)) }}
            </div>
            @if($task->status == 0)
                <div class="medium font-weight-bold mt-1 text-warning">
                    <span class="fa fa-clock mr-2"></span>Ongoing
                </div>
            @endif
            @if($task->status == 1)
                <div class="medium font-weight-bold mt-1 text-success">
                    <span class="fa fa-check mr-2"></span>Completed
                </div>
            @endif
        </div>
    </div>
</div>

