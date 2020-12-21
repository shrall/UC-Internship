<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-spinner mr-2"></i>Incoming Progress</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0" width="25px">#</th>
                            <th class="border-0"><span class="fas fa-spinner mr-2"></span>Progress Description</th>
                            <th class="border-0"><span class="fas fa-clipboard-list mr-2"></span>Project Name</th>
                            <th class="border-0"><span class="fas fa-user mr-2"></span>Student</th>
                            <th class="border-0"><span class="fa fa-hourglass-start mr-2"></span>Time Start</th>
                            <th class="border-0"><span class="fa fa-hourglass-end mr-2"></span>Time End</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($progresses as $progress)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><a href="{{ route('supervisor.task.show', $progress->task->id) }}">{{$progress->description}}</a></td>
                            <td><a href="{{ route('supervisor.project.show', $progress->task->projectuser->uci_project_id) }}">{{$progress->task->projectuser->project->name}}</a></td>
                            <td><a href="{{ route('supervisor.student.show', $progress->task->projectuser->uci_user_id) }}">{{$progress->task->projectuser->user->name}}</a></td>
                            <td>{{ date("d-m-Y, H:i", strtotime($progress->time_start)) }}</td>
                            <td>{{ date("d-m-Y, H:i", strtotime($progress->time_end)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
