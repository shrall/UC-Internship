<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-tasks mr-2"></i>Task List</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0">Name</th>
                            <th class="border-0">PIC</th>
                            <th class="border-0">Duration</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project->projectusers as $pu)
                            @foreach ($pu->tasks as $task)
                                <!-- Item -->
                                <tr>
                                    <td>
                                        <a style="font-weight: 700; text-decoration: underline;" class="text-info"
                                            href="{{ route('student.task.show', $task->id) }}">{{ $task->name }}</a>
                                    </td>
                                    <td class="font-weight-bold proj-name">
                                        {{ $task->projectuser->user->detailable->name }}
                                    </td>
                                    <td>{{ $task->duration }} Hours</td>
                                    @if ($task->status == 0)
                                        <td class="text-warning">
                                            <span class="fas fa-clock"></span>
                                            <span class="font-weight-bold">Ongoing</span>
                                        </td>
                                    @endif
                                    @if ($task->status == 1)
                                        <td class="text-success">
                                            <span class="fas fa-check"></span>
                                            <span class="font-weight-bold">Completed</span>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
