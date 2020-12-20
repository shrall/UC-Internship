<div class="row">
    <div class="card border-light shadow-sm mb-4">
        <div class="card-header border-bottom border-light">
            <h2 class="h5 mb-0">
                <span class="fas fa-tasks"></span> Tasks
            </h2>
        </div>
        <div class="card-body">
            <?php $x=0 ?>
            @foreach($tasks as $task)
                <div class="row align-items-center @if ($x==0)border-bottom border-light pb-4 mb-4 @endif">
                    <div class="col-auto">
                        <a href="{{ route('student.task.show', $task->id) }}">
                            <div class="calendar d-flex">
                                <span
                                    class="calendar-month">{{ date("M", strtotime($task->deadline)) }}</span>
                                <span
                                    class="calendar-day">{{ date("d", strtotime($task->deadline)) }}</span>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ route('student.task.show', $task->id) }}">
                            <h3 class="h5">{{ $task->name }}</h3>
                        </a>
                        <span>Supervised by <h6 class="text-700 d-inline">
                                {{ $task->projectuser->project->supervisor->name }}</h6></span>
                        <div class="small font-weight-bold mt-1">
                            Status : <span class="fas fa-clock text-warning"></span>
                            <div class="text-warning d-inline">Ongoing</div>
                        </div>
                        <a
                            href="{{ route('student.project.show', $task->projectuser->project->id) }}">
                            <span class="small font-weight-bold">Project:
                                {{ $task->projectuser->project->name }}</span>
                        </a>
                    </div>
                </div>
                <?php $x++ ?>
            @endforeach
        </div>
        <div class="card-footer border-top border-light text-center">
            <a class="font-weight-bold text-primary" href="{{ route('student.project.index') }}">See
                all</a>
        </div>
    </div>
</div>
